<?php

namespace Aton\Portfolio\Parse\ClassTypes;

use Aton\Portfolio\Parse\ClassOperations\OperationTrades;
use Aton\Portfolio\Parse\Interfaces\ClassTypes\ClassTypesInterface;

class Trades implements ClassTypesInterface
{
    public array $defaultData;
    public array $data;

    /**
     * @param $defaultData
     */
    public function __construct($defaultData)
    {
        $this->setDefaultData($defaultData['Row'] ?? $defaultData);
        $this->setData($this->createOperationClass());
    }

    /**
     * @return array
     */
    private function createOperationClass(): array
    {
        $arrays = [];

        foreach ($this->getDefaultData() as $value) {
            $value = $value['@attributes'] ?? $value;

            $operation = new OperationTrades($value);
            $arrays[] = $operation->getOperation();
        }

        return $arrays;
    }

    /**
     * @param $defaultData
     * @return $this
     */
    public function setDefaultData($defaultData): Trades
    {
        $this->defaultData = $defaultData;
        return $this;
    }

    /**
     * @return array
     */
    public function getDefaultData(): array
    {
        return $this->defaultData;
    }

    /**
     * @param $data
     * @return $this
     */
    public function setData($data): Trades
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }
}