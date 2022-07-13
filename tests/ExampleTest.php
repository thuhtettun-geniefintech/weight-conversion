<?php

use Thuhtet\WeightConversion\WeightConversion;

it('can convert kilograms to pounds', function () {
    $pounds = WeightConversion::kilogram(100)->toPounds();
    expect($pounds)->toEqual(220.46);
});
