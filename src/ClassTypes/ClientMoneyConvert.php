<?php

namespace Aton\Portfolio\Parse\ClassTypes;

use Aton\Portfolio\Parse\Interfaces\ClassTypes\ClassTypesInterface;

class ClientMoneyConvert implements ClassTypesInterface
{
    public array $defaultData;

    public function __construct($defaultData)
    {
        $this->setData($defaultData);
    }

    public function setData($defaultData)
    {
        $this->data = $defaultData;
        return $this;
    }

    public function getData()
    {
        return $this->data;
    }
}