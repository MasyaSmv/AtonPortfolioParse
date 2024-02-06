<?php

namespace Aton\Portfolio\Parse\ClassTypes;

use Aton\Portfolio\Parse\Interfaces\ClassTypes\ClassTypesInterface;

class StockOnDateExg implements ClassTypesInterface
{
    public array $data;

    public function __construct($data)
    {
        $this->setData($data);
    }

    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }

    public function getData()
    {
        return $this->data;
    }
}