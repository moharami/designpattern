<?php

include_once "Car.php";

class CarModelR implements Car
{
    protected $model = 'r';
    protected $wheel = 'regular';
    protected $sunRoof = false;

    public function getModel()
    {
        return $this->model;
    }

    public function getWheel()
    {
        return $this->wheel;
    }

    public function hasSunRoof()
    {
        return $this->sunRoof;
    }
}