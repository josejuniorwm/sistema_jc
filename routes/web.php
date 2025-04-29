<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'PrincialController@principal');

Route::get('/sobre-nos', function () {
    return 'sobre';
});

Route::get('/contato', function () {
    return 'contato';
});
