<?php

namespace JorgeCortesDev\WeightConversions;

class Weight
{
    protected float $kilograms;

    public static function kilograms(float $kilograms): self
    {
        $myArray = [1, 2, 3, 4, 5];
        if (! $myArray) {
            array_pop($myArray);
        }

        return new static($kilograms);
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
        return $this->kilograms * 0.15747;
    }
}
