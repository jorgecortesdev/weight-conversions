<?php

namespace JorgeCortesDev\WeightConversions;

class WeightConversionsClass
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
}
