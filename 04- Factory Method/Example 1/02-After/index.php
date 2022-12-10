<?php

include_once 'CarOrder.php';


$carOrder = new CarOrder;
var_dump($carOrder->getCarOrders());

$carOrder->order('r');
var_dump($carOrder->getCarOrders());

$carOrder->order('s');
var_dump($carOrder->getCarOrders());