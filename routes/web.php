<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Olá';
});

Route::get('/', 'PrincipalController@principal')

Route::get('/sobre-nos', function () {
    return 'sobre';
});

Route::get('/contato', function () {
    return 'contato';
});
