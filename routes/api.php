<?php

use Illuminate\Support\Facades\Route;

Route::get('hello', function () {
    $hello = config('app.hello');
    return "Hello, $hello!";
});
