<?php

namespace Thuhtet\WeightConversion;

class WeightConversion
{
    protected float $kilograms;

    public static function kilogram(float $kilograms): self
    {
        return new self($kilograms);
    }

    public function __construct(float $kilograms)
    {
        $this->kilograms = $kilograms;
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
