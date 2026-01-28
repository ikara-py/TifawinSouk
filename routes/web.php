<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/client', function () {
    return view('client.client', ["name" => "Ali", "age" => "29"]);
});
