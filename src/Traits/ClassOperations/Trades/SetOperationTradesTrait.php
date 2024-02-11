<?php

namespace Aton\Portfolio\Parse\Traits\ClassOperations\Trades;

trait SetOperationTradesTrait
{
    public function setOperDateTimeSort($dateTimeSort)
    {
        $this->oper_date_time_sort = $dateTimeSort;
        return $this;
    }
    
    public function setCompany($company)
    {
        $this->company = $company;
        return $this;
    }    
    
    public function setTicker($ticker)
    {
        $this->ticker = $ticker;
        return $this;
    }
    
    public function setOperID($OperId)
    {
        $this->oper_id = $OperId;
        return $this;
    }

    public function setisComplete($IsComplete)
    {
        $this->is_complete = $IsComplete;
        return $this;
    }

    public function setOperPlace($OperPlace)
    {
        $this->oper_place = $OperPlace;
        return $this;
    }

    public function setIntOperNum($IntOperNum)
    {
        $this->int_oper_num = $IntOperNum;
        return $this;
    }

    public function setTradeType($TradeType)
    {
        $this->trade_type = $TradeType;
        return $this;
    }

    public function setAssetName($AssetName)
    {
        $this->asset_name = $AssetName;
        return $this;
    }

    public function setQuantity($Quantity)
    {
        $this->quantity = $Quantity;
        return $this;
    }

    public function setPrice($Price)
    {
        $this->price = $Price;
        return $this;
    }

    public function setPriceCurr($PriceCurr)
    {
        $this->price_curr = $PriceCurr;
        return $this;
    }

    public function setPaymentCurr($PaymentCurr)
    {
        $this->payment_curr = $PaymentCurr;
        return $this;
    }

    public function setPayment($Payment)
    {
        $this->payment = $Payment;
        return $this;
    }

    public function setPayment_RUR($PaymentRur)
    {
        $this->payment_rur = $PaymentRur;
        return $this;
    }

    public function setNKD($Nkd)
    {
        $this->nkd = $Nkd;
        return $this;
    }

    public function setNKD_RUR($NkdRur)
    {
        $this->nkd_rur = $NkdRur;
        return $this;
    }

    public function setPaymentDate($PaymentDate)
    {
        $this->payment_date = $PaymentDate;
        return $this;
    }

    public function setSettlementDate($SettlementDate)
    {
        $this->settlement_date = $SettlementDate;
        return $this;
    }

    public function setComExg($ComExg)
    {
        $this->com_exg = $ComExg;
        return $this;
    }

    public function setComTS($ComTs)
    {
        $this->com_ts = $ComTs;
        return $this;
    }

    public function setComDlr($ComDlr)
    {
        $this->com_dlr = $ComDlr;
        return $this;
    }

    public function setOrderTerm($OrderTerm)
    {
        $this->order_term = $OrderTerm;
        return $this;
    }

    public function setPortfolio($Portfolio)
    {
        $this->portfolio = $Portfolio;
        return $this;
    }

    public function setisRPS($IsRps)
    {
        $this->is_rps = $IsRps;
        return $this;
    }

    public function setOperDateSort($OperDateSort)
    {
        $this->oper_date_sort = $OperDateSort;
        return $this;
    }

    public function setOperTimeSort($OperTimeSort)
    {
        $this->oper_time_sort = $OperTimeSort;
        return $this;
    }

    public function setIsOperWithoutPrice($IsOperWithoutPrice)
    {
        $this->is_oper_without_price = $IsOperWithoutPrice;
        return $this;
    }

    public function setIsPif($IsPif)
    {
        $this->is_pif = $IsPif;
        return $this;
    }

    public function setIsIB($IsIb)
    {
        $this->is_ib = $IsIb;
        return $this;
    }
}