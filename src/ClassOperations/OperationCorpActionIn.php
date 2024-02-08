<?php

namespace Aton\Portfolio\Parse\ClassOperations;

use Aton\Portfolio\Parse\Interfaces\ClassOperations\ClassOperationsInterface;

class OperationCorpActionIn implements ClassOperationsInterface
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