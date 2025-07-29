<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GoodsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Goods::create([
            'goods_name' => 'ITワールド',
            'category_id' => 14,
            'situation_id' => 1,
            'transaction_type' => 0,
            'size' => 'そこそこデカい',
            'quantity' => 1,
            'explanation' => 'これ読んどきゃ基本情報は受かる',
            'listing_deadline' => '2025-8-31',
            'trading_status_id' => 1,
            'account_id' => 1,
            'show_flag' => 0,
        ]);
    }
}
