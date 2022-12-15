<?php

namespace Amir\Abstract3\Product\SmartPhone;

class SamsungSmartphone implements SmartPhoneInterface
{
    public function switchOn()
    {
        return 'Samsung Smartphone: Switching on';
    }

    public function ring()
    {
        return 'Samsung Smartphone: Ringing';
    }
}