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
            'hashtag_list' => 'プログラミング,IT,勉強,新品,教科書・参考書',
            'delete_flag' => false,
        ]);

        // 無敵キャンディのハッシュタグ (goods_id: 2)
        ProductToHashtag::create([
            'goods_id' => 2,
            'hashtag_list' => 'ゲーム,レア,限定,ファッション',
            'delete_flag' => false,
        ]);

        // デニムジャケットのハッシュタグ (goods_id: 3)
        ProductToHashtag::create([
            'goods_id' => 3,
            'hashtag_list' => 'ファッション,美品,おしゃれ,デニム',
            'delete_flag' => false,
        ]);

        // ポケモンカードゲームのハッシュタグ (goods_id: 4)
        ProductToHashtag::create([
            'goods_id' => 4,
            'hashtag_list' => 'ゲーム,レア,趣味,アニメ,カード',
            'delete_flag' => false,
        ]);

        // アコースティックギターのハッシュタグ (goods_id: 5)
        ProductToHashtag::create([
            'goods_id' => 5,
            'hashtag_list' => '音楽,趣味,美品,初心者向け',
            'delete_flag' => false,
        ]);

        // ワンピース全巻セットのハッシュタグ (goods_id: 6)
        ProductToHashtag::create([
            'goods_id' => 6,
            'hashtag_list' => '漫画,アニメ,格安,美品,全巻セット',
            'delete_flag' => false,
        ]);

        // アニメBlu-rayセットのハッシュタグ (goods_id: 7)
        ProductToHashtag::create([
            'goods_id' => 7,
            'hashtag_list' => 'アニメ,限定,新品,レア,Blu-ray',
            'delete_flag' => false,
        ]);

        // テニスラケットのハッシュタグ (goods_id: 8)
        ProductToHashtag::create([
            'goods_id' => 8,
            'hashtag_list' => 'スポーツ,趣味,美品,テニス',
            'delete_flag' => false,
        ]);

        // キャンプテントのハッシュタグ (goods_id: 9)
        ProductToHashtag::create([
            'goods_id' => 9,
            'hashtag_list' => 'アウトドア,キャンプ,美品,4人用',
            'delete_flag' => false,
        ]);

        // スキンケアセットのハッシュタグ (goods_id: 10)
        ProductToHashtag::create([
            'goods_id' => 10,
            'hashtag_list' => '美容,新品,プレゼント,スキンケア',
            'delete_flag' => false,
        ]);

        // 高級万年筆のハッシュタグ (goods_id: 11)
        ProductToHashtag::create([
            'goods_id' => 11,
            'hashtag_list' => '文房具,新品,高級,パイロット',
            'delete_flag' => false,
        ]);

        // ワイヤレスマウスのハッシュタグ (goods_id: 12)
        ProductToHashtag::create([
            'goods_id' => 12,
            'hashtag_list' => 'PC機器,新品,Logicool,ワイヤレス',
            'delete_flag' => false,
        ]);

        // 観葉植物のハッシュタグ (goods_id: 13)
        ProductToHashtag::create([
            'goods_id' => 13,
            'hashtag_list' => '植物,新品,インテリア,癒し',
            'delete_flag' => false,
        ]);
    }
}
