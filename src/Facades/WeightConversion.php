<?php

namespace Spatie\WeightConversion\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Spatie\WeightConversion\WeightConversion
 */
class WeightConversion extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'weight-conversion';
    }
}
