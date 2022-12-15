<?php

namespace Amir\Abstract3\Brand\Samsung;

use Amir\Abstract3\Brand\DeviceFactory;
use Amir\Abstract3\Product\SmartPhone\SamsungSmartphone;
use Amir\Abstract3\Product\Tablet\SamsungTablet;

class SamsungFactory implements DeviceFactory
{
    public function createSmartphone()
    {
        return new SamsungSmartphone();
    }

    public function createTablet()
    {
        return new SamsungTablet();
    }
}