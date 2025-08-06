<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\goodsController;
use App\Http\Controllers\matchController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/match-tags', [matchController::class, 'matchTags']);

Route::get('/register', [goodsController::class, 'getWantGoods'])->name('register');;
Route::post('/goods/store', [goodsController::class, 'store'])->name('goods.store');
Route::get('/goods/confirm', [goodsController::class, 'confirm'])->name('goods.confirm');
