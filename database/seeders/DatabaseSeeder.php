<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 個別のシーダーを実行順序に注意して呼び出し
        $this->call([
            AccountSeeder::class,   // アカウントを先に作成
            GoodsSeeder::class,     // 商品データを作成
        ]);
    }
}
