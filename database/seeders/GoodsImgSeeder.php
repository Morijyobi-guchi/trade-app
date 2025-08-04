<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\GoodsImg;

class GoodsImgSeeder extends Seeder
{
    public function run(): void
    {
        // ITワールドの画像
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

        // 無敵キャンディの画像
        GoodsImg::create([
            'img_pass' => '/images/goods/candy-1.jpg',
            'goods_id' => 2,
            'displayorder_number' => 1,
            'delete_flag' => false,
        ]);

        // デニムジャケットの画像
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

        // ポケモンカードの画像
        GoodsImg::create([
            'img_pass' => '/images/goods/pokemon-cards-1.jpg',
            'goods_id' => 4,
            'displayorder_number' => 1,
            'delete_flag' => false,
        ]);

        // ギターの画像
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
    }
}
