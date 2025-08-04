<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\GoodsImg;

class GoodsImgSeeder extends Seeder
{
    public function run(): void
    {
        // ITワールドの画像 (goods_id: 1)
        GoodsImg::create([
            'img_pass' => '/images/goods/it-world-1.jpg',
            'goods_id' => 1,
            'displayorder_number' => 1,
            'delete_flag' => false,
        ]);

        GoodsImg::create([
            'img_pass' => '/images/goods/it-world-2.jpg',
            'goods_id' => 1,
            'displayorder_number' => 2,
            'delete_flag' => false,
        ]);

        // 無敵キャンディの画像 (goods_id: 2)
        GoodsImg::create([
            'img_pass' => '/images/goods/candy-1.jpg',
            'goods_id' => 2,
            'displayorder_number' => 1,
            'delete_flag' => false,
        ]);

        // デニムジャケットの画像 (goods_id: 3)
        GoodsImg::create([
            'img_pass' => '/images/goods/denim-jacket-1.jpg',
            'goods_id' => 3,
            'displayorder_number' => 1,
            'delete_flag' => false,
        ]);

        GoodsImg::create([
            'img_pass' => '/images/goods/denim-jacket-2.jpg',
            'goods_id' => 3,
            'displayorder_number' => 2,
            'delete_flag' => false,
        ]);

        // ポケモンカードの画像 (goods_id: 4)
        GoodsImg::create([
            'img_pass' => '/images/goods/pokemon-cards-1.jpg',
            'goods_id' => 4,
            'displayorder_number' => 1,
            'delete_flag' => false,
        ]);

        GoodsImg::create([
            'img_pass' => '/images/goods/pokemon-cards-2.jpg',
            'goods_id' => 4,
            'displayorder_number' => 2,
            'delete_flag' => false,
        ]);

        // アコースティックギターの画像 (goods_id: 5)
        GoodsImg::create([
            'img_pass' => '/images/goods/acoustic-guitar-1.jpg',
            'goods_id' => 5,
            'displayorder_number' => 1,
            'delete_flag' => false,
        ]);

        GoodsImg::create([
            'img_pass' => '/images/goods/acoustic-guitar-2.jpg',
            'goods_id' => 5,
            'displayorder_number' => 2,
            'delete_flag' => false,
        ]);

        // ワンピース全巻セットの画像 (goods_id: 6)
        GoodsImg::create([
            'img_pass' => '/images/goods/onepiece-manga-1.jpg',
            'goods_id' => 6,
            'displayorder_number' => 1,
            'delete_flag' => false,
        ]);

        GoodsImg::create([
            'img_pass' => '/images/goods/onepiece-manga-2.jpg',
            'goods_id' => 6,
            'displayorder_number' => 2,
            'delete_flag' => false,
        ]);

        // アニメBlu-rayセットの画像 (goods_id: 7)
        GoodsImg::create([
            'img_pass' => '/images/goods/anime-bluray-1.jpg',
            'goods_id' => 7,
            'displayorder_number' => 1,
            'delete_flag' => false,
        ]);

        // テニスラケットの画像 (goods_id: 8)
        GoodsImg::create([
            'img_pass' => '/images/goods/tennis-racket-1.jpg',
            'goods_id' => 8,
            'displayorder_number' => 1,
            'delete_flag' => false,
        ]);

        GoodsImg::create([
            'img_pass' => '/images/goods/tennis-racket-2.jpg',
            'goods_id' => 8,
            'displayorder_number' => 2,
            'delete_flag' => false,
        ]);

        // キャンプテントの画像 (goods_id: 9)
        GoodsImg::create([
            'img_pass' => '/images/goods/camp-tent-1.jpg',
            'goods_id' => 9,
            'displayorder_number' => 1,
            'delete_flag' => false,
        ]);

        GoodsImg::create([
            'img_pass' => '/images/goods/camp-tent-2.jpg',
            'goods_id' => 9,
            'displayorder_number' => 2,
            'delete_flag' => false,
        ]);

        GoodsImg::create([
            'img_pass' => '/images/goods/camp-tent-3.jpg',
            'goods_id' => 9,
            'displayorder_number' => 3,
            'delete_flag' => false,
        ]);

        // スキンケアセットの画像 (goods_id: 10)
        GoodsImg::create([
            'img_pass' => '/images/goods/skincare-set-1.jpg',
            'goods_id' => 10,
            'displayorder_number' => 1,
            'delete_flag' => false,
        ]);

        // 高級万年筆の画像 (goods_id: 11)
        GoodsImg::create([
            'img_pass' => '/images/goods/fountain-pen-1.jpg',
            'goods_id' => 11,
            'displayorder_number' => 1,
            'delete_flag' => false,
        ]);

        GoodsImg::create([
            'img_pass' => '/images/goods/fountain-pen-2.jpg',
            'goods_id' => 11,
            'displayorder_number' => 2,
            'delete_flag' => false,
        ]);

        // ワイヤレスマウスの画像 (goods_id: 12)
        GoodsImg::create([
            'img_pass' => '/images/goods/wireless-mouse-1.jpg',
            'goods_id' => 12,
            'displayorder_number' => 1,
            'delete_flag' => false,
        ]);

        // 観葉植物の画像 (goods_id: 13)
        GoodsImg::create([
            'img_pass' => '/images/goods/plant-1.jpg',
            'goods_id' => 13,
            'displayorder_number' => 1,
            'delete_flag' => false,
        ]);

        GoodsImg::create([
            'img_pass' => '/images/goods/plant-2.jpg',
            'goods_id' => 13,
            'displayorder_number' => 2,
            'delete_flag' => false,
        ]);
    }
}
