<?php

namespace Aton\Portfolio\Parse;

class ParseAtonFactory
{
    private $file;

    public function __construct($fileName)
    {
        $this->file = new File($fileName);
    }

    public static function load($fileName)
    {
        return new self($fileName);
    }

    public function getFile()
    {
        return $this->file;
    }

}