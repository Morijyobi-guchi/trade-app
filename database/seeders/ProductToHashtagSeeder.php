<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProductToHashtag;

class ProductToHashtagSeeder extends Seeder
{
    public function run(): void
    {
        // ITワールドのハッシュタグ (goods_id: 1)
        ProductToHashtag::create([
            'goods_id' => 1,
            'hashtag_list' => '1,2,9,11,18',
            'delete_flag' => false,
        ]);

        // 無敵キャンディのハッシュタグ (goods_id: 2)
        ProductToHashtag::create([
            'goods_id' => 2,
            'hashtag_list' => '3,14,13,8',
            'delete_flag' => false,
        ]);

        // デニムジャケットのハッシュタグ (goods_id: 3)
        ProductToHashtag::create([
            'goods_id' => 3,
            'hashtag_list' => '8,12,19,20',
            'delete_flag' => false,
        ]);

        // ポケモンカードゲームのハッシュタグ (goods_id: 4)
        ProductToHashtag::create([
            'goods_id' => 4,
            'hashtag_list' => '3,14,10,5,21',
            'delete_flag' => false,
        ]);

        // アコースティックギターのハッシュタグ (goods_id: 5)
        ProductToHashtag::create([
            'goods_id' => 5,
            'hashtag_list' => '7,10,12,22',
            'delete_flag' => false,
        ]);

        // ワンピース全巻セットのハッシュタグ (goods_id: 6)
        ProductToHashtag::create([
            'goods_id' => 6,
            'hashtag_list' => '4,5,15,12,23',
            'delete_flag' => false,
        ]);

        // アニメBlu-rayセットのハッシュタグ (goods_id: 7)
        ProductToHashtag::create([
            'goods_id' => 7,
            'hashtag_list' => '5,13,11,14,24',
            'delete_flag' => false,
        ]);

        // テニスラケットのハッシュタグ (goods_id: 8)
        ProductToHashtag::create([
            'goods_id' => 8,
            'hashtag_list' => '6,10,12,25',
            'delete_flag' => false,
        ]);

        // キャンプテントのハッシュタグ (goods_id: 9)
        ProductToHashtag::create([
            'goods_id' => 9,
            'hashtag_list' => '26,27,12,28',
            'delete_flag' => false,
        ]);

        // スキンケアセットのハッシュタグ (goods_id: 10)
        ProductToHashtag::create([
            'goods_id' => 10,
            'hashtag_list' => '29,11,30,31',
            'delete_flag' => false,
        ]);

        // 高級万年筆のハッシュタグ (goods_id: 11)
        ProductToHashtag::create([
            'goods_id' => 11,
            'hashtag_list' => '29,11,30,31',
            'delete_flag' => false,
        ]);

        // ワイヤレスマウスのハッシュタグ (goods_id: 12)
        ProductToHashtag::create([
            'goods_id' => 12,
            'hashtag_list' => '35,11,36,37',
            'delete_flag' => false,
        ]);

        // 観葉植物のハッシュタグ (goods_id: 13)
        ProductToHashtag::create([
            'goods_id' => 13,
            'hashtag_list' => '38,11,39,40',
            'delete_flag' => false,
        ]);
    }
}
