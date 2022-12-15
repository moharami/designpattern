<?php

require_once __DIR__ . '/vendor/autoload.php';

use Amir\Abstract3\Brand\Apple\AppleFactory;
use Amir\Abstract3\Brand\DeviceFactory;
use Amir\Abstract3\Brand\Samsung\SamsungFactory;


function testProducts(DeviceFactory $factory)
{
    $smartphone = $factory->createSmartphone();
    echo $smartphone->ring() . PHP_EOL;


    $tablet = $factory->createTablet();
    echo $tablet->switchOn() . PHP_EOL;
}

testProducts(new SamsungFactory);
testProducts(new AppleFactory);
