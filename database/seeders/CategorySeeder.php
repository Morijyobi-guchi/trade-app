<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'category' => 'ファッション',
            "delete_flag" => '0',
        ]);
        Category::create([
            'category' => 'ゲーム・おもちゃ・グッズ',
            "delete_flag" => '0',
        ]);
        Category::create([
            'category' => 'ホビー・楽器・アート',
            "delete_flag" => '0',
        ]);
        Category::create([
            'category' => '本・漫画・雑誌',
            "delete_flag" => '0',
        ]);
        Category::create([
            'category' => 'CD・DVD・ブルーレイ',
            "delete_flag" => '0',
        ]);
        Category::create([
            'category' => 'スポーツ',
            "delete_flag" => '0',
        ]);
        Category::create([
            'category' => 'アウトドア・釣り・旅行用品',
            "delete_flag" => '0',
        ]);
        Category::create([
            'category' => 'コスメ・美容',
            "delete_flag" => '0',
        ]);
        Category::create([
            'category' => 'ダイエット・健康',
            "delete_flag" => '0',
        ]);
        Category::create([
            'category' => 'ペット用品',
            "delete_flag" => '0',
        ]);
        Category::create([
            'category' => 'DIY・工具',
            "delete_flag" => '0',
        ]);
        Category::create([
            'category' => 'フラワー・ガーデニング',
            "delete_flag" => '0',
        ]);
        Category::create([
            'category' => 'ハンドメイド・手芸',
            "delete_flag" => '0',
        ]);
        Category::create([
            'category' => '教科書・参考書',
            "delete_flag" => '0',
        ]);
        Category::create([
            'category' => '文房具',
            "delete_flag" => '0',
        ]);
        Category::create([
            'category' => 'PC機器',
            "delete_flag" => '0',
        ]);
        Category::create([
            'category' => 'その他',
            "delete_flag" => '0',
        ]);
    }
}
