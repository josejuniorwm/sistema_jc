<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers;
 
Route::get('/', 'PrincialController@principal');

Route::get('/sobre-nos', function () {
    return 'sobre';
});

Route::get('/contato', function () {
    return 'contato';
});
