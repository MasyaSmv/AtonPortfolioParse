<?php

namespace Aton\Portfolio\Parse\ClassOperations;

use Aton\Portfolio\Parse\Interfaces\ClassOperations\ClassOperationsInterface;
use Aton\Portfolio\Parse\RegexOperation;
use Aton\Portfolio\Parse\Traits\ClassOperations\Trades\GetOperationTradesTrait;
use Aton\Portfolio\Parse\Traits\ClassOperations\Trades\SetOperationTradesTrait;

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
        $this->searchTickerAndCompany();
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
     * @return true|null
     */
    private function searchTickerAndCompany(): ?bool
    {
        $fullName = $this->getAssetName();
        $result = RegexOperation::conditionFindRegex($fullName);
        if(empty($result)) {
           return null;
        }

        $this->setcompany($result[0]);
        $this->setTicker($result[1]);

        return true;
    }
    
    private function searchOperDateTimeSort()
    {
        
    }
}