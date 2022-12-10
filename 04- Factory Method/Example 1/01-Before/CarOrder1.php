<?php

class CarOrder1
{
    protected $carOrders = array();
    protected $car;

    // Order & make the car in the same method???!
    public function order($model = null)
    {
        if (strtolower($model) == 'r')
            $this->car = new CarModelR();
        else
            $this->car = new CarModelS();

        $this->carOrders[] = $this->car->getModel();
    }


    public function getCarOrders()
    {
        return $this->carOrders;
    }
}