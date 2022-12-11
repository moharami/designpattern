<?php

namespace Amir\Proxy;

class RealSubject implements subject
{

    public function request()
    {
        echo "RealSubject: Handling request.\n";
    }
}