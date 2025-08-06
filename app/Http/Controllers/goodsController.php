<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WantGoods;
use App\Models\Category;
use App\Models\Situation;

class goodsController extends Controller
{
    public function getWantGoods()
    {
        // account_IDが1でdelete_flagが0のwant_goods_nameを取得
        $wantGoodsNames = WantGoods::where('account_ID', 1)
                                  ->where('delete_flag', 0)
                                  ->get(['id','want_goods_name', 'category_id', 'exposition']);
        
        // カテゴリも取得
        $category = Category::where('delete_flag', 0)->get();
        $situation = Situation::where('delete_flag', 0)->get();
        
        // 両方のデータをビューに渡す
        return view('regster', [
            'wantGoods' => $wantGoodsNames,
            'category' => $category,
            'situation' => $situation,
        ]);
    }

    public function store(Request $request)
    {

        $category_name = Category::where('id',$request->input('category_id'))->value('category');
        $situation_name = Situation::where('id',$request->input('situation_id'))->value('goods_situation');
        // セッションにデータを保存
        $request->session()->put('form_data', [
            'goods_name' => $request->input('goods_name'),
            'category_id' => $request->input('category_id'),
            'category_name' => $category_name,
            'situation_name' => $situation_name,
            'situation_id' => $request->input('situation_id'),
            'explanation' => $request->input('explanation'),
            'listing_deadline' => $request->input('listing_deadline'),
            'transaction_type' => $request->input('transaction_type'),
            'hashtags' => array_filter($request->input('hashtags', [])),
            'want_goods_ids' => $request->input('want_goods_ids', []),
            // 'image_paths' => $imagePaths
        ]);

        return redirect()->route('goods.confirm');
    }

    public function confirm(Request $request)
    {
        $formData = $request->session()->get('form_data');
        
        if (!$formData) {
            return redirect()->route('register')->with('error', 'フォームデータが見つかりません');
        }

        // ほしいものの詳細情報を取得
        $wantGoodsDetails = [];
        if (!empty($formData['want_goods_ids'])) {
            $wantGoodsDetails = WantGoods::whereIn('id', $formData['want_goods_ids'])
                                        ->get(['id', 'want_goods_name'])
                                        ->toArray();
        }

        return view('confirm', [
            'formData' => $formData,
            'wantGoodsDetails' => $wantGoodsDetails
        ]);
    }
}
