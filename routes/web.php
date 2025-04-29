<?php

use Illuminate\Support\Facades\Route;


Route::get('/', ['\App\Http\Controllers\PrincialController::class, 'principal']);

Route::get('/sobre-nos', function () {
    return 'sobre';
});

Route::get('/contato', function () {
    return 'contato';
});
