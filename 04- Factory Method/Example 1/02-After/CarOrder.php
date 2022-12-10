<?php

include_once 'CarFactory.php';

class CarOrder
{
    protected $carOrders = array();
    protected $car;

    // First, create the carFactory object in the constructor.
    public function __construct()
    {
        $this->car = new CarFactory();
    }

    public function order($model = null)
    {
        // Use the make() method from the carFactory.
        $car = $this->car->make($model);
        $this->carOrders[] = $car->getModel();
    }

    public function getCarOrders()
    {
        return $this->carOrders;
    }
}