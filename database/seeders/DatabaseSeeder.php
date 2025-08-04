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
            DepartmentSeeder::class,    // 部門を先に作成（外部キー参照される側）
            CategorySeeder::class,      // カテゴリを作成
            SituationSeeder::class,     // 状況を作成
            HashtagSeeder::class,       // ハッシュタグを作成
            AccountSeeder::class,       // アカウントを作成
            GoodsSeeder::class,         // 商品データを作成（外部キーを持つ側）
        ]);
    }
}
