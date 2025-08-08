<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\goodsController;
use App\Http\Controllers\matchController;
use App\Http\Controllers\detailGoodsController;
use App\Http\Controllers\searchGoodsController;
use App\Http\Controllers\TopController; // ← 大文字のTに変更

Route::get('/', function () {
    return view('welcome');
});

// 重複していた/topルートを削除し、こちらに一本化します。
// [TopController::class, 'index'] で、indexメソッドを呼び出します。
Route::get('/top', [TopController::class, 'index']);

Route::get('/match-tags', [matchController::class, 'matchTags']);

Route::get('/register', [goodsController::class, 'getWantGoods'])->name('register');;
Route::post('/goods/store', [goodsController::class, 'store'])->name('goods.store');
Route::get('/goods/confirm', [goodsController::class, 'confirm'])->name('goods.confirm');
Route::post('/goods/create', [goodsController::class, 'create'])->name('goods.create');
Route::get('/goods-detail', [detailGoodsController::class, 'detail']);
Route::get('/top', [topController::class, 'goods']);
Route::get('/search', [searchGoodsController::class, 'search']);
Route::post('/search/result', [searchGoodsController::class, 'searchResults']);
