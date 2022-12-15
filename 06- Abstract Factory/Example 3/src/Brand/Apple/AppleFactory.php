<?php

namespace Amir\Abstract3\Brand\Apple;

use Amir\Abstract3\Brand\DeviceFactory;
use Amir\Abstract3\Product\SmartPhone\AppleSmartphone;
use Amir\Abstract3\Product\Tablet\AppleTablet;

class AppleFactory implements DeviceFactory
{

    public function createSmartphone()
    {
        return new AppleSmartphone();
    }

    public function createTablet()
    {
        return new AppleTablet();
    }
}