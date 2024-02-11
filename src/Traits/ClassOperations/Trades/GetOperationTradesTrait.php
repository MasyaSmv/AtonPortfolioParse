<?php

namespace Aton\Portfolio\Parse\Traits\ClassOperations\Trades;

trait GetOperationTradesTrait
{
    public function getTrade()
    {
        return $this;
    }
    
    /**
     * @return array
     */
    public function getData()
    {
        $array = [];

        foreach (self::$data as $key => $value) {
            $getFuncName = 'get' . $key;
            $result = $this->$getFuncName($value);

            if (!$result) {
                continue;
            }

            $array[$key] = $result;
        }

        return $array;
    }
    
    public function getOperDateTimeSort()
    {
        return $this->oper_date_time_sort ?? null;
    }
    
    public function getTicker()
    {
        return $this->ticker ?? null;
    }
    
    public function getCompany()
    {
        return $this->company ?? null;
    }
    
    public function getOperID()
    {
        return $this->oper_id ?? null;
    }

    public function getisComplete()
    {
        return $this->is_complete ?? null;
    }

    public function getOperPlace()
    {
        return $this->oper_place ?? null;
    }

    public function getIntOperNum()
    {
        return $this->int_oper_num ?? null;
    }

    public function getTradeType()
    {
        return $this->trade_type ?? null;
    }

    public function getAssetName()
    {
        return $this->asset_name ?? null;
    }

    public function getQuantity()
    {
        return $this->quantity ?? null;
    }

    public function getPrice()
    {
        return $this->price ?? null;
    }

    public function getPriceCurr()
    {
        return $this->price_curr ?? null;
    }

    public function getPaymentCurr()
    {
        return $this->payment_curr ?? null;
    }

    public function getPayment()
    {
        return $this->payment ?? null;
    }

    public function getPayment_RUR()
    {
        return $this->payment_rur ?? null;
    }

    public function getNKD()
    {
        return $this->nkd ?? null;
    }

    public function getNKD_RUR()
    {
        return $this->nkd_rur ?? null;
    }

    public function getPaymentDate()
    {
        return $this->payment_date ?? null;
    }

    public function getSettlementDate()
    {
        return $this->settlement_date ?? null;
    }

    public function getComExg()
    {
        return $this->com_exg ?? null;
    }

    public function getComTS()
    {
        return $this->com_ts ?? null;
    }

    public function getComDlr()
    {
        return $this->com_dlr ?? null;
    }

    public function getOrderTerm()
    {
        return $this->order_term ?? null;
    }

    public function getPortfolio()
    {
        return $this->portfolio ?? null;
    }

    public function getisRPS()
    {
        return $this->is_rps ?? null;
    }

    public function getOperDateSort()
    {
        return $this->oper_date_sort ?? null;
    }

    public function getOperTimeSort()
    {
        return $this->oper_time_sort ?? null;
    }

    public function getIsOperWithoutPrice()
    {
        return $this->is_oper_without_price ?? null;
    }

    public function getIsPif()
    {
        return $this->is_pif ?? null;
    }

    public function getIsIB()
    {
        return $this->is_ib ?? null;
    }
}