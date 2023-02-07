<?php

use Illuminate\Support\Facades\Route;
use shuvo\calculator\CalCulatorController;

Route::get('calculator', function() {
    echo "Hello from the calculator package";
});

Route::get('add/{a}/{b}', [CalCulatorController::class, 'add']);
Route::get('substract/{a}/{b}', [CalCulatorController::class, 'substract']);










?>
