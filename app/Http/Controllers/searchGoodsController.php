<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Situation;

class searchGoodsController extends Controller
{
    //検索画面へ遷移する関数
    public function search()
    {
        //カテゴリーを取得する
        $category = Category::where('delete_flag', 0)->get();
        //状態を取得する
        $situation = Situation::where('delete_flag', 0)->get();
        // 検索画面のビューを返す
        return view('search', compact('category', 'situation'));
    }
}
