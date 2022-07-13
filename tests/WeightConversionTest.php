<?php

use Thuhtet\WeightConversion\WeightConversion;

it('can convert kilograms to pounds', function () {
    $pounds = WeightConversion::kilogram(100)->toPounds();
    expect($pounds)->toEqual(220.46);
});

it('can convert kilograms to stones', function () {
    $pounds = WeightConversion::kilogram(100)->toStones();
    expect($pounds)->toEqual(154.29999999999998);
});
