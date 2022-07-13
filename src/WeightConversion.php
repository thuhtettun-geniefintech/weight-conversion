<?php

namespace Thuhtet\WeightConversion;

class WeightConversion
{
    public static function kilogram(float $kilograms): self
    {
        return new static($kilograms);
    }

    public function __construct(protected float $kilograms)
    {
        # code...
    }

    public function toPounds(): float
    {
        return $this->kilograms * 2.2046;
    }

    public function toStones(): float
    {
        return $this->kilograms * 1.5430;
    }
}
