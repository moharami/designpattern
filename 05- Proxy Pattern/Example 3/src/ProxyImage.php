<?php

namespace Amir\Proxy3;

class ProxyImage implements ImageInterface
{
    protected $id;
    protected $image;

    public function __construct($filename)
    {
        $this->filename = $filename;
    }

    public function display()
    {
        if (is_null($this->image)) {
            $this->image = new Image($this->filename);
        }
        return $this->image->display();
    }
}