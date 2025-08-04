<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\WantGoodsImg;

class WantGoodsImgSeeder extends Seeder
{
    public function run(): void
    {
        // プログラミング本の参考画像
        WantGoodsImg::create([
            'image_path' => '/images/want_goods/programming-book-1.jpg',
            'want_goods_id' => 1,
            'displayorder_number' => 1,
            'delete_flag' => false,
        ]);

        // ゲーミングマウスの参考画像
        WantGoodsImg::create([
            'image_path' => '/images/want_goods/gaming-mouse-1.jpg',
            'want_goods_id' => 2,
            'displayorder_number' => 1,
            'delete_flag' => false,
        ]);

        WantGoodsImg::create([
            'image_path' => '/images/want_goods/gaming-mouse-2.jpg',
            'want_goods_id' => 2,
            'displayorder_number' => 2,
            'delete_flag' => false,
        ]);

        // デザイン系参考書の画像
        WantGoodsImg::create([
            'image_path' => '/images/want_goods/design-book-1.jpg',
            'want_goods_id' => 3,
            'displayorder_number' => 1,
            'delete_flag' => false,
        ]);

        // アニメグッズの参考画像
        WantGoodsImg::create([
            'image_path' => '/images/want_goods/anime-goods-1.jpg',
            'want_goods_id' => 4,
            'displayorder_number' => 1,
            'delete_flag' => false,
        ]);

        // スポーツ用品の参考画像
        WantGoodsImg::create([
            'image_path' => '/images/want_goods/badminton-racket-1.jpg',
            'want_goods_id' => 5,
            'displayorder_number' => 1,
            'delete_flag' => false,
        ]);
    }
}
