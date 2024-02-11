<?php

namespace Aton\Portfolio\Parse\ClassOperations;

use Aton\Portfolio\Parse\Interfaces\ClassOperations\ClassOperationsInterface;
use Aton\Portfolio\Parse\RegexOperation;
use Aton\Portfolio\Parse\Traits\ClassOperations\MoneyInOut\GetOperationMoneyInOutTrait;
use Aton\Portfolio\Parse\Traits\ClassOperations\MoneyInOut\SetOperationMoneyInOutTrait;
use Aton\Portfolio\Parse\Traits\ClassOperations\OperationClassTrait;
use Carbon\Carbon;

class OperationMoneyInOut implements ClassOperationsInterface
{
    use GetOperationMoneyInOutTrait;
    use SetOperationMoneyInOutTrait;
    use OperationClassTrait;

    private $oper_id;
    private $oper_type;
    private $oper_type_sort;
    private $oper_date;
    private $payment_date;
    private $quantity;
    private $comment;
    private $portfolio;
    private $oper_date_sort;
    private $oper_time_sort;
    private $currency;
    private $settlement_date;
    private $is_ib_stock;
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
        $this->addSetData($data);
        $this->setCompany($this->searchCompany());
        $this->setTicker($this->searchTicker());
        $this->setOperDateTimeSort($this->searchOperDateTimeSort());

        $data['ticker'] = $this->getTicker();
        $data['company'] = $this->getCompany();
        $data['oper_date_time_sort'] = $this->getOperDateTimeSort();
        self::$data = $data;
    }

    /**
     * @return array|null
     */
    private function searchTickerAndCompany(): ?array
    {
        $fullName = $this->getComment();
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
}