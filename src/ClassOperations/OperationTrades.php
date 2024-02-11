<?php

namespace Aton\Portfolio\Parse\ClassOperations;

use Aton\Portfolio\Parse\Interfaces\ClassOperations\ClassOperationsInterface;
use Aton\Portfolio\Parse\RegexOperation;
use Aton\Portfolio\Parse\Traits\ClassOperations\Trades\GetOperationTradesTrait;
use Aton\Portfolio\Parse\Traits\ClassOperations\Trades\SetOperationTradesTrait;
use Carbon\Carbon;

class OperationTrades implements ClassOperationsInterface
{
    use SetOperationTradesTrait;
    use GetOperationTradesTrait;

    private $oper_id;
    private $is_complete;
    private $oper_place;
    private $int_oper_num;
    private $trade_type;
    private $asset_name;
    private $quantity;
    private $price;
    private $price_curr;
    private $payment_curr;
    private $payment;
    private $payment_rur;
    private $nkd;
    private $nkd_rur;
    private $payment_date;
    private $settlement_date;
    private $com_exg;
    private $com_ts;
    private $com_dlr;
    private $order_term;
    private $portfolio;
    private $is_rps;
    private $oper_date_sort;
    private $oper_time_sort;
    private $is_oper_without_price;
    private $is_pif;
    private $is_ib;
    private $ticker;
    private $company;
    private $oper_date_time_sort;

    private static array $keys = [];
    private static array $data = [];

    /**
     * @param $data
     */
    public function __construct($data)
    {
        self::$data = $data;
        $this->addSetData($data);
        $this->setCompany($this->searchCompany());
        $this->setTicker($this->searchTicker());
        $this->setOperDateTimeSort($this->searchOperDateTimeSort());
    }

    /**
     * @param $data
     * @return true
     */
    private function addSetData($data): bool
    {
        foreach ($data as $key => $value) {
            $setFuncName = 'set' . $key;
            self::$keys[] = $key;

            $this->$setFuncName($value);
        }

        return true;
    }

    /**
     * @return array|null
     */
    private function searchTickerAndCompany(): ?array
    {
        $fullName = $this->getAssetName();
        $result = RegexOperation::conditionFindRegex($fullName);
        if (empty($result)) {
            return null;
        }

        return [$result[0], $result[1]];
    }

    /**
     * @return mixed
     */
    private function searchTicker()
    {
        [$company, $ticker] = $this->searchTickerAndCompany();
        return $ticker;
    }

    /**
     * @return mixed
     */
    private function searchCompany()
    {
        [$company, $ticker] = $this->searchTickerAndCompany();
        return $company;
    }

    /**
     * @return Carbon
     */
    private function searchOperDateTimeSort(): Carbon
    {
        if ($this->getOperDateSort() && $this->getOperTimeSort()) {
            $date = $this->getOperDateSort();
            $time = $this->getOperTimeSort();
        }else{
            [$date, $time] = $this->searchDateTimeInOperNum();
        }

        $date = Carbon::createFromFormat('d.m.Y H:i:s', $date)->format('Y-m-d');
        $time = Carbon::createFromFormat('d.m.Y H:i:s', $time)->format('H:i:s');
        return Carbon::parse($date . $time);
    }

    /**
     * @return array
     */
    private function separationIntOperNum(): array
    {
        $explodes = explode(',', $this->getIntOperNum());
        return [$explodes[0], trim($explodes[1]), trim($explodes[2]), trim($explodes[3])];
    }

    /**
     * @return array
     */
    private function searchDateTimeInOperNum(): array
    {
        [$contract, $date, $time, $contractTwo] = $this->separationIntOperNum();
        return [$date, $time];
    }
}