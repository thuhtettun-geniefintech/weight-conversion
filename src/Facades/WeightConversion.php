<?php

namespace Thuhtet\WeightConversion\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Thuhtet\WeightConversion\WeightConversion
 */
class WeightConversion extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'weight-conversion';
    }
}
