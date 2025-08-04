<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\GoodsToWantgoods;

class GoodsToWantgoodsSeeder extends Seeder
{
    public function run(): void
    {
        // ITワールド（goods_id=1）とプログラミング本（want_goods_id=1）のマッチング
        GoodsToWantgoods::create([
            'goods_ID' => 1,
            'want_goods_ID' => 1,
            'delete_flag' => false,
        ]);

        // ワイヤレスマウス（goods_id=12）とゲーミングマウス（want_goods_id=2）のマッチング
        GoodsToWantgoods::create([
            'goods_ID' => 12,
            'want_goods_ID' => 2,
            'delete_flag' => false,
        ]);

        // ポケモンカード（goods_id=4）とアニメグッズ（want_goods_id=4）のマッチング
        GoodsToWantgoods::create([
            'goods_ID' => 4,
            'want_goods_ID' => 4,
            'delete_flag' => false,
        ]);

        // テニスラケット（goods_id=8）とスポーツ用品（want_goods_id=5）のマッチング
        GoodsToWantgoods::create([
            'goods_ID' => 8,
            'want_goods_ID' => 5,
            'delete_flag' => false,
        ]);

        // デニムジャケット（goods_id=3）とファッション小物（want_goods_id=6）のマッチング
        GoodsToWantgoods::create([
            'goods_ID' => 3,
            'want_goods_ID' => 6,
            'delete_flag' => false,
        ]);

        // アニメBlu-ray（goods_id=7）とアニメグッズ（want_goods_id=4）のマッチング
        GoodsToWantgoods::create([
            'goods_ID' => 7,
            'want_goods_ID' => 4,
            'delete_flag' => false,
        ]);
    }
}
