<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\matchController;
use App\Http\Controllers\topController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/top', function () {
    return view('top');
});

Route::get('/match-tags', [matchController::class, 'matchTags']);

Route::get('/top', [topController::class, 'goods']);

