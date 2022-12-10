<?php

class Cheese implements FoodItem
{
    private $item;
    public function __construct (FoodItem $item) {
        $this->item = $item;
    }
    public function cost () {
        return $this->item->cost() + 0.25;
    }
}