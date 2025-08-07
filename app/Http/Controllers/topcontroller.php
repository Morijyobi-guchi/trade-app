<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Goods;

class TopController extends Controller
{
    /**
     * 商品一覧データを取得し、ビューに渡します。
     */
    public function index()
    {
        // with('image') で、Goodsモデルに定義した関係を使い
        // 商品と画像をセットで取得します。
        $goods = Goods::with('image')
            ->where('delete_flag', 0)
            ->orderBy('created_at', 'desc')
            ->get();
        
        // セットになったデータをビューに渡します。
        return view('top', ['goods' => $goods]);
    }
}