<?php

class CarModelS implements Car
{
    protected $model = 's';
    protected $wheel = 'sports';
    protected $sunRoof = true;

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