<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MotorcycleModelController;

Route::get('hello', function () {
    $hello = config('app.hello');
    return "Hello, $hello!";
});

Route::prefix('motorcycle-model/{model_id}')->group(function () {
    Route::get('power-to-weight-ratio', [MotorcycleModelController::class, 'powerToWeightRatio']);
});
