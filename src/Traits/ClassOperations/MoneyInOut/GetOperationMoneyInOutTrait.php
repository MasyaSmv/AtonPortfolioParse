<?php

namespace Aton\Portfolio\Parse\Traits\ClassOperations\MoneyInOut;

trait GetOperationMoneyInOutTrait
{
    public function getOperation()
    {
        return $this;
    }

    public function getOperID()
    {
        return $this->oper_id;
    }

    public function getOperType()
    {
        return $this->oper_type;
    }

    public function getOperTypeSort()
    {
        return $this->oper_type_sort;
    }

    public function getOperDate()
    {
        return $this->oper_date;
    }

    public function getPaymentDate()
    {
        return $this->payment_date;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function getComment()
    {
        return $this->comment;
    }

    public function getPortfolio()
    {
        return $this->portfolio;
    }

    public function getOperDateSort()
    {
        return $this->oper_date_sort;
    }

    public function getOperTimeSort()
    {
        return $this->oper_time_sort;
    }

    public function getCurrency()
    {
        return $this->currency;
    }

    public function getSettlementDate()
    {
        return $this->settlement_date;
    }

    public function getIsIBStock()
    {
        return $this->is_ib_stock;
    }

    public function getTicker()
    {
        return $this->ticker;
    }

    public function getCompany()
    {
        return $this->company;
    }

    public function getOperDateTimeSort()
    {
        return $this->oper_date_time_sort;
    }
}