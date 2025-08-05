<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Goods;
use App\Models\Category;
use App\Models\Situation;
use App\Models\GoodsImg;
use App\Models\Hashtag;
use App\Models\ProductToHashtag;
use App\Models\WantGoods;
use App\Models\WantGoodsImg;
use App\Models\WantlistToHashtag;
use App\Models\GoodsToWantgoods;
use Illuminate\Http\Request;

class detailGoodsController extends Controller
{
    //物品の詳細を表示する関数
    public function detail(){
        $goodsId = request('goods_id');
        
        // 物品の基本情報を取得
        $goods = Goods::where('id', $goodsId)->first();
        
        if (!$goods) {
            return response()->json(['error' => '物品が見つかりません'], 404);
        }
        
        // カテゴリー情報を取得
        $category = Category::find($goods->category_id);
        
        // 物品の状態情報を取得
        $situation = Situation::find($goods->situation_id);
        
        // 物品の画像を取得
        $goodsImages = GoodsImg::where('goods_id', $goodsId)
                              ->where('delete_flag', 0)
                              ->orderBy('displayorder_number')
                              ->pluck('img_pass');
        
        // 物品のハッシュタグを取得
        $goodsHashtagsData = ProductToHashtag::where('goods_id', $goodsId)
                                            ->where('delete_flag', 0)
                                            ->get();
        
        $goodsHashtags = [];
        foreach ($goodsHashtagsData as $hashtagData) {
            // hashtag_listをカンマ区切りで分割（または適切な区切り文字で分割）
            $hashtagNames = explode(',', $hashtagData->hashtag_list);
            foreach ($hashtagNames as $tagName) {
                $goodsHashtags[] = trim($tagName);
            }
        }
        
        // 欲しい物の情報を取得
        $wantGoodsIds = GoodsToWantgoods::where('goods_ID', $goodsId)
                                       ->where('delete_flag', 0)
                                       ->pluck('want_goods_ID');
        
        $wantGoodsList = [];
        foreach ($wantGoodsIds as $wantGoodsId) {
            $wantGoods = WantGoods::find($wantGoodsId);
            if ($wantGoods && !$wantGoods->delete_flag) {
                // 欲しい物の画像を取得
                $wantGoodsImages = WantGoodsImg::where('want_goods_id', $wantGoodsId)
                                              ->where('delete_flag', 0)
                                              ->pluck('image_path');
                
                // 欲しい物のハッシュタグを取得
                $wantGoodsHashtagsData = WantlistToHashtag::where('want_goods_ID', $wantGoodsId)
                                                         ->where('delete_flag', 0)
                                                         ->get();
                
                $wantGoodsHashtags = [];
                foreach ($wantGoodsHashtagsData as $hashtagData) {
                    // hashtag_listをカンマ区切りで分割（または適切な区切り文字で分割）
                    $hashtagNames = explode(',', $hashtagData->hashtag_list);
                    foreach ($hashtagNames as $tagName) {
                        $wantGoodsHashtags[] = trim($tagName);
                    }
                }
                
                $wantGoodsList[] = [
                    'name' => $wantGoods->want_goods_name,
                    'description' => $wantGoods->exposition,
                    'images' => $wantGoodsImages,
                    'hashtags' => $wantGoodsHashtags
                ];
            }
        }
        
        // レスポンスデータを構築
        $response = [
            'goods_name' => $goods->goods_name,
            'category' => $category ? $category->category : null,
            'images' => $goodsImages,
            'description' => $goods->explanation,
            'hashtags' => $goodsHashtags,
            'situation' => $situation ? $situation->goods_situation : null,
            'size' => $goods->size,
            'quantity' => $goods->quantity,
            'transaction_type' => $situation ? $situation->goods_situation : null,
            'want_goods' => $wantGoodsList
        ];
        
        // Accept ヘッダーをチェックしてJSONが要求された場合はJSONを返す
        if (request()->wantsJson() || request()->ajax()) {
            return response()->json($response);
        }
        
        // そうでなければビューにデータを渡す
        return view('detail_goods', ['data' => $response]);
    }
}
