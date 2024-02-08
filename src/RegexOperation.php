<?php

namespace Aton\Portfolio\Parse;

class RegexOperation
{
    private static string $first_pattern = '\(([A-Za-z0-9А-Яа-я\(\)\-\,\.\ \%\/\;\&\"\'\ \|]+)\/([A-Z0-9]{12})\/\)$';
    private static string $second_pattern = '^([A-Za-z0-9А-Яа-я\(\)\-\,\.\ \%\/\;\&\"\'\ \|]+)\/([A-Z0-9]{12})\/$';
    private static string $third_pattern = '^([A-Za-z0-9А-Яа-я\(\)\-\,\.\ \%\/\;\&\"\'\ \|]+)\/([A-Z0-9]{12})\/([A-Za-z0-9А-Яа-я\-]+)$';

    /**
     * @param $str
     * @return array|string[]
     */
    public static function conditionFindRegex($str): array
    {
        // Подготовка названия компании
        $str = self::prepareCompanyName($str);

        $result = self::searchTickerByPatterns($str);
        if (!empty($result)) {
            return [$company, $ticker] = $result;
        }

        // Проверяем, содержит ли элемент кириллические символы
        $ticker = preg_match("/[А-Яа-я]/", $str) ? '' : $str;
        $company = empty($ticker) ? $str : '';

        return [$company, $ticker];
    }

    /**
     * @param $str
     * @return array
     */
    public static function searchTickerByPatterns($str): array
    {
        $result = self::searchForPatterns($str);
        if (empty($result)) {
            return [];
        }

        if (count($result) === 3) {
            unset($result[0]);
        }

        if (strlen($result[2]) != 12) {
            return [];
        }

        return [$result[1], $result[2]];
    }

    /**
     * @param $str
     * @return array|string[]
     */
    public static function searchForPatterns($str): array
    {
        mb_ereg(self::$first_pattern, $str, $tickerAndCompany);
        if (!empty($tickerAndCompany) && count($tickerAndCompany) > 1) {
            return $tickerAndCompany;
        }

        mb_ereg(self::$second_pattern, $str, $tickerAndCompany);
        if (!empty($tickerAndCompany) && count($tickerAndCompany) > 1) {
            return $tickerAndCompany;
        }

        mb_ereg(self::$third_pattern, $str, $tickerAndCompany);
        if (empty($tickerAndCompany) || count($tickerAndCompany) === 1) {
            return [];
        }

        return [];
    }

    /**
     * @param $name
     * @return string
     */
    public static function prepareCompanyName($name): string
    {
        //в некоторых названиях компаний не хватает точки после слова Inc
        if (str_contains($name, '(ADR)')) {
            $name = str_replace('(ADR)', '', $name);
        }

        if (str_contains($name, '(GDR)')) {
            $name = str_replace('(GDR)', '', $name);
        }

        if (str_contains($name, '(C)')) {
            $name = str_replace('(C)', '', $name);
        }

        if (str_contains($name, '(P)')) {
            $name = str_replace('(P)', '', $name);
        }

        if (str_contains($name, '(EXCH)')) {
            $name = str_replace('(EXCH)', '', $name);
        }

        if (str_contains($name, 'Inc.')) {
            //в этой ситуации ничего не делаем, так как точка есть

        } elseif (str_contains($name, 'Inc')) {
            //заменяем Inc без точки на Inc.
            $name = str_replace('Inc', 'Inc.', $name);
        }

        if (str_contains($name, 'Ltd.')) {
            //в этой ситуации ничего не делаем, так как точка есть

        } elseif (str_contains($name, 'Ltd')) {
            //заменяем Ltd без точки на Ltd.
            $name = str_replace('Ltd', 'Ltd.', $name);
        }

        return trim(str_replace('&quot;', '', $name));
    }
}