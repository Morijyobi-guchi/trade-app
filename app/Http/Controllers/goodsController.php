<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WantGoods;

class goodsController extends Controller
{
    public function getWantGoods()
    {
        // account_IDが1でdelete_flagが0のwant_goods_nameを取得
        $wantGoodsNames = WantGoods::where('account_ID', 1)
                                  ->where('delete_flag', 0)
                                  ->get(['id','want_goods_name', 'category_id', 'exposition']);
        
        // 配列として取得
        $wantGoodsArray = $wantGoodsNames->toArray();
        // または配列を返す
        return view('regster', ['wantGoods' => $wantGoodsNames]);
    }
}
