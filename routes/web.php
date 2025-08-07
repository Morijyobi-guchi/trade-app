<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\goodsController;
use App\Http\Controllers\matchController;
use App\Http\Controllers\detailGoodsController;
use App\Http\Controllers\topController;
use App\Http\Controllers\searchGoodsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/top', function () {
    return view('top');
});

Route::get('/match-tags', [matchController::class, 'matchTags']);

Route::get('/register', [goodsController::class, 'getWantGoods'])->name('register');;
Route::post('/goods/store', [goodsController::class, 'store'])->name('goods.store');
Route::get('/goods/confirm', [goodsController::class, 'confirm'])->name('goods.confirm');
Route::get('/goods-detail', [detailGoodsController::class, 'detail']);

Route::get('/top', [topController::class, 'goods']);
Route::get('/search', [searchGoodsController::class, 'search']);

