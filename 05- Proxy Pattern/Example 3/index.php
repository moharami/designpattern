<?php

use Amir\Proxy3\Image;
use Amir\Proxy3\ProxyImage;

require_once __DIR__ . '/vendor/autoload.php';

$filename = 'test.png';

$image1 = new Image($filename); // loading necessary
echo $image1->display(); // loading unnecessary

$image2 = new ProxyImage($filename); // loading unnecessary
echo $image2->display(); // loading necessary
echo $image2->display(); // loading unnecessary
