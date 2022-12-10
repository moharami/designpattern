<?php

include_once 'CarModelR.php';
include_once 'CarModelS.php';

class CarFactory
{

    protected $car;

    // Determine which model to manufacture, and instantiate
    //  the concrete classes that make each model.
    public function make($model = null)
    {
        if (strtolower($model) == 'r')
            return $this->car = new CarModelR();

        return $this->car = new CarModelS();
    }
}