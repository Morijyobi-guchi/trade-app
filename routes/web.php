<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\matchController;
use App\Http\Controllers\detailGoodsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/match-tags', [matchController::class, 'matchTags']);
Route::get('/goods-detail', [detailGoodsController::class, 'detail']);
