<?php

namespace App\Http\Controllers;

use App\Http\Requests\MotorcyclePowerToWeightRatioRequest;

class MotorcycleModelController extends Controller
{
    public function powerToWeightRatio(MotorcyclePowerToWeightRatioRequest $request) : float {
        return $request->model->calculatePowerToWeightRatio();
    }
}
