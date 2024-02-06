<?php

namespace Aton\Portfolio\Parse;

class ParseAtonFactory
{
    private File $file;

    /**
     * @param $fileName
     */
    public function __construct($fileName)
    {
        $this->setFile(new File($fileName));
    }

    /**
     * @param $fileName
     * @return ParseAtonFactory
     */
    public static function load($fileName): ParseAtonFactory
    {
        return new self($fileName);
    }

    /**
     * @return File
     */
    public function getFile(): File
    {
        return $this->file;
    }

    /**
     * @param File $file
     * @return $this
     */
    public function setFile(File $file): ParseAtonFactory
    {
        $this->file = $file;
        return $this;
    }
}