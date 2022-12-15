<?php

namespace Amir\Abstract3\Product\SmartPhone;

class AppleSmartphone implements SmartPhoneInterface
{
    public function switchOn()
    {
        return 'Apple Smartphone: Switching on';
    }

    public function ring()
    {
        return 'Apple Smartphone: Ringing';
    }

}