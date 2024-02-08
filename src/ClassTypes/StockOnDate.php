<?php

namespace Aton\Portfolio\Parse\ClassTypes;

use Aton\Portfolio\Parse\Interfaces\ClassTypes\ClassTypesInterface;

class StockOnDate implements ClassTypesInterface
{
    public array $defaultData;

    public function __construct($defaultData)
    {
        $this->setData($defaultData);
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