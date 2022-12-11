<?php

namespace Amir\Proxy3;

class Image implements ImageInterface
{
    protected $filename;

    public function __construct($filename)
    {
        $this->filename = $filename;
        $this->loadFromDisk();
    }

    protected function loadFromDisk()
    {
        echo "Loading {$this->filename}\n";
    }

    public function display()
    {
        echo "Display {$this->filename}\n";
    }
}