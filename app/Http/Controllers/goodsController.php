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

    public function store(Request $request)
    {
        // フォームデータを取得
        $formData = $request->all();
        
        // 入力値を表示
        echo "<h2>フォームに入力された値:</h2>";
        echo "<strong>物品名:</strong> " . $request->input('goods_name') . "<br>";
        echo "<strong>カテゴリID:</strong> " . $request->input('category_id') . "<br>";
        echo "<strong>状態ID:</strong> " . $request->input('situation_id') . "<br>";
        echo "<strong>説明:</strong> " . $request->input('explanation') . "<br>";
        echo "<strong>期限:</strong> " . $request->input('listing_deadline') . "<br>";
        echo "<strong>取引形態:</strong> " . $request->input('transaction_type') . "<br>";
        
        // ハッシュタグを表示
        $hashtags = $request->input('hashtags', []);
        echo "<strong>ハッシュタグ:</strong> " .  implode(', ', array_filter($hashtags)) . "<br>";
        
        // 選択されたほしいものを表示
        $wantGoodsIds = $request->input('want_goods_ids', []);
        echo "<strong>選択されたほしいもの:</strong> " . implode(', ', $wantGoodsIds) . "<br>";
        
        // 画像ファイル情報を表示
        if ($request->hasFile('images')) {
            echo "<strong>アップロードされた画像:</strong><br>";
            foreach ($request->file('images') as $index => $image) {
                if ($image) {
                    echo "画像" . ($index + 1) . ": " . $image->getClientOriginalName() . "<br>";
                }
            }
        }
        
        // 全データをダンプ表示
        echo "<h3>全データ:</h3>";
        echo "<pre>";
        var_dump($formData);
        echo "</pre>";
        
        return response("データを受信しました");
    }
}
