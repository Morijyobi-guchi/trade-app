// routes/web.php

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\matchController;
use App\Http\Controllers\detailGoodsController;
use App\Http\Controllers\TopController; // ← 大文字のTに変更

Route::get('/', function () {
    return view('welcome');
});

// 重複していた/topルートを削除し、こちらに一本化します。
// [TopController::class, 'index'] で、indexメソッドを呼び出します。
Route::get('/top', [TopController::class, 'index']);

Route::get('/match-tags', [matchController::class, 'matchTags']);
Route::get('/goods-detail', [detailGoodsController::class, 'detail']);