<?php

namespace App\Traits;

/**
 * This trait calculates the power to weight ratio of a
 * vehicle model with power and weight properties
 */
trait PowerToWeightRatio
{
    // Calculate ratio
    public function calculatePowerToWeightRatio(): float
    {
        return round($this->horsepower / $this->weight, 2);
    }
}
