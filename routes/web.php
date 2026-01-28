<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/client', function () {
    return view('client.client', ["name" => "Ali", "age" => "29"]);
});

Route::get('/test-data', [TestController::class, 'index']);
Route::get('/test-json', [TestController::class, 'json']);