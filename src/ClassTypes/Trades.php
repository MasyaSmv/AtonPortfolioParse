<?php

namespace Aton\Portfolio\Parse\ClassTypes;

use Aton\Portfolio\Parse\ClassOperations\OperationTrades;
use Aton\Portfolio\Parse\Interfaces\ClassTypes\ClassTypesInterface;

class Trades implements ClassTypesInterface
{
    public array $defaultData;
    public array $data;

    public function __construct($defaultData)
    {
        $this->setDefaultData($defaultData['Row'] ?? $defaultData);
        $this->setData($this->createOperationClass());
    }

    private function createOperationClass()
    {
        $arrays = [];

        foreach ($this->getDefaultData() as $value) {
            $value = $value['@attributes'] ?? $value;
            
            $operation = new OperationTrades($value);
            $arrays[] = $operation->getData();
            echo '<pre>';
            var_dump($operation->getOperID());
            echo '</pre>';
            die();
        }

        return $arrays;
    }

    public function setDefaultData($defaultData): Trades
    {
        $this->defaultData = $defaultData;
        return $this;
    }

    public function getDefaultData(): array
    {
        return $this->defaultData;
    }

    public function setData($data): Trades
    {
        $this->data = $data;
        return $this;
    }

    public function getData(): array
    {
        return $this->data;
    }
}