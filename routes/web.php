<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\matchController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/match-tags', [matchController::class, 'matchTags']);
