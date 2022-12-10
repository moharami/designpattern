<?php

class CarOrder2
{
    protected $carOrders = array();
    protected $car;

    // Order the car.
    public function order($model = null)
    {
        $car = $this->make($model);
        $this->carOrders[] = $car->getModel();
    }

    // The actual making of the car is now separated into a method of its own.
    protected function make($model = null)
    {
        if (strtolower($model) == 'r')
            return $this->car = new CarModelR();

        return $this->car = new CarModelS();
    }

    public function getCarOrders()
    {
        return $this->carOrders;
    }
}