<?php

namespace Aton\Portfolio\Parse\ClassTypes;

use Aton\Portfolio\Parse\ClassOperations\OperationMoneyInOut;
use Aton\Portfolio\Parse\ClassOperations\OperationTrades;
use Aton\Portfolio\Parse\Interfaces\ClassTypes\ClassTypesInterface;

class MoneyInOut implements ClassTypesInterface
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

            $operation = new OperationMoneyInOut($value);
            $arrays[] = $operation->getOperation();
        }

        echo '<pre>';
        var_dump($arrays);
        echo '</pre>';
        die();
        return $arrays;
    }

    /**
     * @param $defaultData
     * @return $this
     */
    public function setDefaultData($defaultData): MoneyInOut
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
    public function setData($data): MoneyInOut
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