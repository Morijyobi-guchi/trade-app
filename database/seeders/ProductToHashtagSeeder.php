<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProductToHashtag;

class ProductToHashtagSeeder extends Seeder
{
    public function run(): void
    {
        // ITワールドのハッシュタグ
        ProductToHashtag::create([
            'goods_id' => 1,
            'hashtag_list' => 'プログラミング,IT,勉強,新品',
            'delete_flag' => false,
        ]);

        // 無敵キャンディのハッシュタグ
        ProductToHashtag::create([
            'goods_id' => 2,
            'hashtag_list' => 'ゲーム,レア,限定',
            'delete_flag' => false,
        ]);

        // デニムジャケットのハッシュタグ
        ProductToHashtag::create([
            'goods_id' => 3,
            'hashtag_list' => 'ファッション,美品,おしゃれ',
            'delete_flag' => false,
        ]);

        // ポケモンカードのハッシュタグ
        ProductToHashtag::create([
            'goods_id' => 4,
            'hashtag_list' => 'ゲーム,レア,趣味,アニメ',
            'delete_flag' => false,
        ]);

        // ギターのハッシュタグ
        ProductToHashtag::create([
            'goods_id' => 5,
            'hashtag_list' => '音楽,趣味,美品',
            'delete_flag' => false,
        ]);

        // ワンピース全巻のハッシュタグ
        ProductToHashtag::create([
            'goods_id' => 6,
            'hashtag_list' => '漫画,アニメ,格安,美品',
            'delete_flag' => false,
        ]);

        // アニメBlu-rayのハッシュタグ
        ProductToHashtag::create([
            'goods_id' => 7,
            'hashtag_list' => 'アニメ,限定,新品,レア',
            'delete_flag' => false,
        ]);

        // テニスラケットのハッシュタグ
        ProductToHashtag::create([
            'goods_id' => 8,
            'hashtag_list' => 'スポーツ,趣味,美品',
            'delete_flag' => false,
        ]);
    }
}
