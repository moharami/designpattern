<?php

use Amir\Proxy\subject;
use Amir\Proxy\RealSubject;
use Amir\Proxy\Proxy;

require_once __DIR__ . '/vendor/autoload.php';


function ClientCode(subject $subject)
{
    $subject->request();
}

echo "Client: Executing the client code with a real subject:\n";
$realSubject = new RealSubject();
clientCode($realSubject);

echo "\n";

echo "Client: Executing the same client code with a proxy:\n";
$proxy = new Proxy($realSubject);
clientCode($proxy);