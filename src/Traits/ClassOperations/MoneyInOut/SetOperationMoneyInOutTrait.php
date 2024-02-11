<?php

namespace Aton\Portfolio\Parse\Traits\ClassOperations\MoneyInOut;

trait SetOperationMoneyInOutTrait
{
    public function setOperID($OperID)
    {
        $this->oper_id = $OperID;
        return $this;
    }

    public function setOperType($OperType)
    {
        $this->oper_type = $OperType;
        return $this;
    }

    public function setOperTypeSort($OperTypeSort)
    {
        $this->oper_type_sort = $OperTypeSort;
        return $this;
    }

    public function setOperDate($OperDate)
    {
        $this->oper_date = $OperDate;
        return $this;
    }

    public function setPaymentDate($PaymentDate)
    {
        $this->payment_date = $PaymentDate;
        return $this;
    }

    public function setQuantity($Quantity)
    {
        $this->quantity = $Quantity;
        return $this;
    }

    public function setComment($Comment)
    {
        $this->comment = $Comment;
        return $this;
    }

    public function setPortfolio($Portfolio)
    {
        $this->portfolio = $Portfolio;
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

    public function setCurrency($Currency)
    {
        $this->currency = $Currency;
        return $this;
    }

    public function setSettlementDate($SettlementDate)
    {
        $this->settlement_date = $SettlementDate;
        return $this;
    }

    public function setIsIBStock($IsIBStock)
    {
        $this->is_ib_stock = $IsIBStock;
        return $this;
    }

    public function setTicker($ticker)
    {
        $this->ticker = $ticker;
        return $this;
    }

    public function setCompany($company)
    {
        $this->company = $company;
        return $this;
    }

    public function setOperDateTimeSort($operDateTimeSort)
    {
        $this->oper_date_time_sort = $operDateTimeSort;
        return $this;
    }
}