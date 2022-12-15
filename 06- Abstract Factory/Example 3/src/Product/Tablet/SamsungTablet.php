<?php

namespace Amir\Abstract3\Product\Tablet;

use Amir\Abstract3\Product\Tablet\TabletInterface;

class SamsungTablet implements TabletInterface
{
    public function switchOn()
    {
        return 'Samsung Tablet: Switching on';
    }
}