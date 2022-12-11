<?php

namespace Amir\Proxy;

class Proxy implements subject
{
    private RealSubject $realSubject;

    public function __construct(RealSubject $realSubject)
    {
        $this->realSubject = $realSubject;
    }

    public function request()
    {
        if ($this->checkAccess()) {
            $this->realSubject->request();
            $this->logAccess();
        }
    }

    private function checkAccess()
    {
        // Some real checks should go here.
        echo "Proxy: Checking access prior to firing a real request.\n";

        return true;
    }

    private function logAccess()
    {
        echo "Proxy: Logging the time of request.\n";
    }
}