<?php

namespace Aton\Portfolio\Parse;

use Aton\Portfolio\Parse\ClassTypes\ClientMoneyConvert;
use Aton\Portfolio\Parse\ClassTypes\CommonData;
use Aton\Portfolio\Parse\ClassTypes\CorpActionIn;
use Aton\Portfolio\Parse\ClassTypes\CorpActionOut;
use Aton\Portfolio\Parse\ClassTypes\MoneyConvert;
use Aton\Portfolio\Parse\ClassTypes\MoneyInOut;
use Aton\Portfolio\Parse\ClassTypes\MoneyInOutIo;
use Aton\Portfolio\Parse\ClassTypes\MoneyOnDate;
use Aton\Portfolio\Parse\ClassTypes\MoneyOnDateMarketPrc;
use Aton\Portfolio\Parse\ClassTypes\MoneyOnDateSingle;
use Aton\Portfolio\Parse\ClassTypes\StockInOut;
use Aton\Portfolio\Parse\ClassTypes\StockOnDate;
use Aton\Portfolio\Parse\ClassTypes\StockOnDateExg;
use Aton\Portfolio\Parse\ClassTypes\StockOnDateExgSum;
use Aton\Portfolio\Parse\ClassTypes\StockOnDateMtl;
use Aton\Portfolio\Parse\ClassTypes\StockPayingOff;
use Aton\Portfolio\Parse\ClassTypes\Trades;
use Aton\Portfolio\Parse\ClassTypes\TradesNonRegRepo;
use Aton\Portfolio\Parse\ClassTypes\TradesRegRepo;
use SimpleXMLElement;

class File
{
    private array $file;
    private MoneyInOutIo $money_in_out_io;
    private Trades $trades;
    private TradesRegRepo $trades_reg_repo;
    private TradesNonRegRepo $trades_non_reg_repo;
    private StockInOut $stock_in_out;
    private MoneyInOut $money_in_out;
    private MoneyConvert $money_convert;
    private ClientMoneyConvert $client_money_convert;
    private CorpActionIn $corp_action_in;
    private CorpActionOut $corp_action_out;
    private StockPayingOff $stock_paying_off;
    private MoneyOnDate $money_on_date;
    private CommonData $common_data;
    private MoneyOnDateSingle $money_on_date_single;
    private MoneyOnDateMarketPrc $money_on_date_market_prc;
    private StockOnDate $stock_on_date;
    private StockOnDateExg $stock_on_date_exg;
    private StockOnDateExgSum $stock_on_date_exg_sum;
    private StockOnDateMTL $stock_on_date_mtl;

    /**
     * Конструктор.
     *
     * @param string $file Путь к файлу.
     */
    public function __construct($file)
    {
        $this->setFile($file);
        $this->createClassType();
    }

    /**
     * Проверяет, существует ли файл, доступен ли он для чтения и имеет ли расширение xml.
     *
     * @param string $fileName Имя файла.
     * @return string Имя файла.
     * @throws Exception Если файл не существует, не может быть прочитан или не имеет расширения xml.
     */
    public function assertFile($fileName)
    {
        if (!is_file($fileName)) {
            throw new Exception('Файл "' . $fileName . '" не существует.');
        }
        if (!is_readable($fileName)) {
            throw new Exception('Не удалось открыть "' . $fileName . '" для чтения.');
        }
        if (pathinfo($fileName, PATHINFO_EXTENSION) != 'xml') {
            throw new Exception('Ожидается тип файла xml вместо "' . pathinfo($fileName, PATHINFO_EXTENSION));
        }
        return $fileName;
    }

    /**
     * Преобразует xml-файл в массив.
     *
     * @param string $file Путь к файлу.
     * @return array Преобразованный массив.
     */
    public function fileXmlToArray($file)
    {
        libxml_use_internal_errors(true);
        return $this->objToArray(new SimpleXMLElement($file, 0, true, 'BIS', true));
    }

    /**
     * Устанавливает свойство файла.
     *
     * @param string $file Путь к файлу.
     * @return $this Текущий объект.
     */
    public function setFile($file)
    {
        $this->file = $this->fileXmlToArray($this->assertFile($file));
        return $this;
    }

    /**
     * Получает свойство файла.
     *
     * @return mixed Свойство файла.
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Преобразует объект в массив.
     *
     * @param mixed $obj Преобразуемый объект.
     * @return array|mixed Преобразованный массив.
     */
    public function objToArray($obj)
    {
        if (is_object($obj) || is_array($obj)) {
            $ret = (array)$obj;
            foreach ($ret as &$item) {
                $item = object_to_array($item);
            }
            return $ret;
        }
        return $obj;
    }

    /**
     * @return void
     */
    public function createClassType()
    {
        echo '<pre>';
        var_dump();
        echo '</pre>';
        die();
    }
}