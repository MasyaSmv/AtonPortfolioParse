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
     * @return File
     */
    public static function load($fileName): File
    {
        return (new self($fileName))->getFile();
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