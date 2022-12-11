<?php

use Amir\Proxy2\Downloader;
use Amir\Proxy2\CachingDownloader;
use Amir\Proxy2\SimpleDownloader;

require_once __DIR__ . '/vendor/autoload.php';


function clientCode(Downloader $subject)
{
    $url = 'https://refactoring.guru/images/content-public/logos/logo-military.png';
    $result = $subject->download($url);

    // Duplicate download requests could be cached for a speed gain.

    $result = $subject->download($url);

}

echo "Executing client code with real subject:\n";
$realSubject = new SimpleDownloader();
clientCode($realSubject);

echo "</br>";

echo "Executing the same client code with a proxy:\n";
$proxy = new CachingDownloader($realSubject);
clientCode($proxy);
