<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Situation;
use App\Models\Goods;
use App\Models\GoodsImg;
use App\Models\ProductToHashtag;
use Carbon\Carbon;

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

    //検索結果を表示する関数
    public function searchResults(Request $request)
    {
        // 検索条件を取得
        $query = $request->input('query');
        $condition = $request->input('condition');
        $tradeTypes = $request->input('trade_type', []);
        $categories = $request->input('category', []);
        $status = $request->input('status');
        $deadline = $request->input('deadline');

        // 物品の基本クエリを構築
        $goodsQuery = Goods::where('show_flag', 0);

        // 取引形態による絞り込み
        if (!empty($tradeTypes)) {
            $goodsQuery->where(function($q) use ($tradeTypes) {
                foreach ($tradeTypes as $type) {
                    if ($type === 'trade') {
                        $q->orWhere('transaction_type', 0);
                    } elseif ($type === 'transfer') {
                        $q->orWhere('transaction_type', 1);
                    }
                }
            });
        }

        // カテゴリーによる絞り込み
        if (!empty($categories)) {
            $goodsQuery->whereIn('category_id', $categories);
        }

        // 状態による絞り込み
        if ($status && $status != 0) {
            $goodsQuery->where('situation_id', $status);
        }

        // 期限による絞り込み
        if ($deadline && $deadline != 0) {
            $limitDate = Carbon::now()->addDays((int)$deadline)->toDateString();
            $goodsQuery->whereDate('listing_deadline', '<=', $limitDate);
        }
        // ハッシュタグによる絞り込み
        if ($query) {
            // ハッシュタグからgoods_idを取得
            $hashtagGoodsIds = ProductToHashtag::where('delete_flag', 0)
                ->where('hashtag_list', 'LIKE', '%' . $query . '%')
                ->pluck('goods_id');
            
            if ($hashtagGoodsIds->isNotEmpty()) {
                $goodsQuery->whereIn('id', $hashtagGoodsIds);
            } else {
                // ハッシュタグが見つからない場合は結果を空にする
                $goodsQuery->where('id', 0);
            }
        }

        // 物品を取得
        $goods = $goodsQuery->get();

        // condition=used の場合、仮のアカウントID(1)の出品物のハッシュタグと
        // 共通ハッシュタグが2つ以上ある物品に絞り込む
        if ($condition === 'used') {
            $accountId = 1; // TODO: 実装時は認証情報から取得

            // ユーザーの出品物ID
            $userGoodsIds = Goods::where('account_id', $accountId)->pluck('id');

            // ユーザーのハッシュタグ集合を作成
            $userHashtagLists = ProductToHashtag::whereIn('goods_id', $userGoodsIds)
                ->where('delete_flag', 0)
                ->pluck('hashtag_list');

            $userHashtags = collect();
            foreach ($userHashtagLists as $list) {
                foreach (explode(',', (string)$list) as $tag) {
                    $t = trim($tag);
                    if ($t !== '') {
                        $userHashtags->push($t);
                    }
                }
            }
            $userHashtags = $userHashtags->unique()->values();

            // ユーザーにハッシュタグがなければ結果は空
            if ($userHashtags->isNotEmpty()) {
                // 取得済み物品のハッシュタグを一括取得してグルーピング（N+1回避）
                $allGoodsIds = $goods->pluck('id');
                $goodsTagRows = ProductToHashtag::whereIn('goods_id', $allGoodsIds)
                    ->where('delete_flag', 0)
                    ->get()
                    ->groupBy('goods_id');

                // 共通タグが2つ以上のものだけ残す
                $goods = $goods->filter(function ($good) use ($goodsTagRows, $userHashtags) {
                    $rows = $goodsTagRows->get($good->id, collect());
                    $tags = collect();
                    foreach ($rows as $row) {
                        foreach (explode(',', (string)$row->hashtag_list) as $tag) {
                            $t = trim($tag);
                            if ($t !== '') {
                                $tags->push($t);
                            }
                        }
                    }
                    $tags = $tags->unique();
                    $intersectionCount = $tags->intersect($userHashtags)->count();
                    return $intersectionCount >= 2;
                })->values();
            } else {
                // ユーザー側に参照ハッシュタグがなければ何も表示しない
                $goods = collect();
            }
        }

        // 各物品に画像情報を追加
    foreach ($goods as $good) {
            $firstImage = GoodsImg::where('goods_id', $good->id)
                                 ->where('delete_flag', 0)
                                 ->orderBy('displayorder_number')
                                 ->first();
            
            $good->imageUrl = $firstImage ? asset('images/goods/' . basename($firstImage->img_pass)) : null;
        }

        // 検索条件も一緒にビューに渡す
        return view('search_results', compact('goods', 'query', 'condition', 'tradeTypes', 'categories', 'status'));
    }
}
