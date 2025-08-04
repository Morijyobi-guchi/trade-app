<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProductToWantgoodsToHashtag;

class ProductToWantgoodsToHashtagSeeder extends Seeder
{
    public function run(): void
    {
        // ITワールド（goods_id=1）とプログラミング本（want_goods_id=1）の関連ハッシュタグ
        ProductToWantgoodsToHashtag::create([
            'goods_ID' => 1,
            'want_goods_ID' => 1,
            'hashtag_list' => 'プログラミング,IT,勉強,技術書',
            'delete_flag' => false,
        ]);

        // ワイヤレスマウス（goods_id=12）とゲーミングマウス（want_goods_id=2）の関連ハッシュタグ
        ProductToWantgoodsToHashtag::create([
            'goods_ID' => 12,
            'want_goods_ID' => 2,
            'hashtag_list' => 'PC機器,ゲーム,マウス,高性能',
            'delete_flag' => false,
        ]);

        // ポケモンカード（goods_id=4）とアニメグッズ（want_goods_id=4）の関連ハッシュタグ
        ProductToWantgoodsToHashtag::create([
            'goods_ID' => 4,
            'want_goods_ID' => 4,
            'hashtag_list' => 'ゲーム,アニメ,カード,コレクション',
            'delete_flag' => false,
        ]);

        // テニスラケット（goods_id=8）とスポーツ用品（want_goods_id=5）の関連ハッシュタグ
        ProductToWantgoodsToHashtag::create([
            'goods_ID' => 8,
            'want_goods_ID' => 5,
            'hashtag_list' => 'スポーツ,ラケット,運動,趣味',
            'delete_flag' => false,
        ]);

        // デニムジャケット（goods_id=3）とファッション小物（want_goods_id=6）の関連ハッシュタグ
        ProductToWantgoodsToHashtag::create([
            'goods_ID' => 3,
            'want_goods_ID' => 6,
            'hashtag_list' => 'ファッション,おしゃれ,アクセサリー,コーディネート',
            'delete_flag' => false,
        ]);

        // アニメBlu-ray（goods_id=7）とアニメグッズ（want_goods_id=4）の関連ハッシュタグ
        ProductToWantgoodsToHashtag::create([
            'goods_ID' => 7,
            'want_goods_ID' => 4,
            'hashtag_list' => 'アニメ,Blu-ray,限定版,コレクション',
            'delete_flag' => false,
        ]);

        // アコースティックギター（goods_id=5）とデザイン系参考書（want_goods_id=3）の関連ハッシュタグ
        ProductToWantgoodsToHashtag::create([
            'goods_ID' => 5,
            'want_goods_ID' => 3,
            'hashtag_list' => '音楽,デザイン,クリエイティブ,趣味',
            'delete_flag' => false,
        ]);

        // ワンピース全巻（goods_id=6）とプログラミング本（want_goods_id=1）の関連ハッシュタグ
        ProductToWantgoodsToHashtag::create([
            'goods_ID' => 6,
            'want_goods_ID' => 1,
            'hashtag_list' => '漫画,勉強,読書,知識',
            'delete_flag' => false,
        ]);

        // キャンプテント（goods_id=9）とスポーツ用品（want_goods_id=5）の関連ハッシュタグ
        ProductToWantgoodsToHashtag::create([
            'goods_ID' => 9,
            'want_goods_ID' => 5,
            'hashtag_list' => 'アウトドア,キャンプ,スポーツ,自然',
            'delete_flag' => false,
        ]);

        // スキンケアセット（goods_id=10）とファッション小物（want_goods_id=6）の関連ハッシュタグ
        ProductToWantgoodsToHashtag::create([
            'goods_ID' => 10,
            'want_goods_ID' => 6,
            'hashtag_list' => '美容,ファッション,スキンケア,おしゃれ',
            'delete_flag' => false,
        ]);
    }
}
