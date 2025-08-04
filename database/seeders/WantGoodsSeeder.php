<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\WantGoods;

class WantGoodsSeeder extends Seeder
{
    public function run(): void
    {
        WantGoods::create([
            'want_goods_name' => 'プログラミング本',
            'account_ID' => 1,
            'category_id' => 14,
            'exposition' => 'Laravel、PHP関連の技術書を探しています',
            'delete_flag' => false,
        ]);

        WantGoods::create([
            'want_goods_name' => 'ゲーミングマウス',
            'account_ID' => 2,
            'category_id' => 16,
            'exposition' => 'FPSゲーム用の高性能マウスが欲しいです',
            'delete_flag' => false,
        ]);

        WantGoods::create([
            'want_goods_name' => 'デザイン系参考書',
            'account_ID' => 3,
            'category_id' => 14,
            'exposition' => 'UI/UXデザインの参考書を探しています',
            'delete_flag' => false,
        ]);

        WantGoods::create([
            'want_goods_name' => 'アニメグッズ',
            'account_ID' => 1,
            'category_id' => 2,
            'exposition' => '人気アニメのフィギュアやグッズ',
            'delete_flag' => false,
        ]);

        WantGoods::create([
            'want_goods_name' => 'スポーツ用品',
            'account_ID' => 2,
            'category_id' => 6,
            'exposition' => 'バドミントンラケットを探しています',
            'delete_flag' => false,
        ]);

        WantGoods::create([
            'want_goods_name' => 'ファッション小物',
            'account_ID' => 3,
            'category_id' => 1,
            'exposition' => 'おしゃれなアクセサリーが欲しいです',
            'delete_flag' => false,
        ]);
    }
}
