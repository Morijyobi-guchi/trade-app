<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Situation;

class SituationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Situation::create([
            'goods_situation' => '新品、未使用',
            "delete_flag" => '0',
        ]);
        Situation::create([
            'goods_situation' => '未使用に近い',
            "delete_flag" => '0',
        ]);
        Situation::create([
            'goods_situation' => '目立った傷や汚れなし',
            "delete_flag" => '0',
        ]);
        Situation::create([
            'goods_situation' => 'やや傷や汚れあり',
            "delete_flag" => '0',
        ]);
        Situation::create([
            'goods_situation' => '傷や汚れあり',
            "delete_flag" => '0',
        ]);
        Situation::create([
            'goods_situation' => '全体的に状態が悪い',
            "delete_flag" => '0',
        ]);
    }
}
