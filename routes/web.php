<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\goodsController;
use App\Http\Controllers\matchController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/match-tags', [matchController::class, 'matchTags']);

Route::get('/register', [goodsController::class, 'getWantGoods']);
Route::post('/goods/store', [goodsController::class, 'store'])->name('goods.store');

