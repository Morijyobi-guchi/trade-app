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
            DepartmentSeeder::class,                    // 部門を先に作成（外部キー参照される側）
            CategorySeeder::class,                      // カテゴリを作成
            SituationSeeder::class,                     // 状況を作成
            HashtagSeeder::class,                       // ハッシュタグを作成
            AccountSeeder::class,                       // アカウントを作成
            GoodsSeeder::class,                         // 商品データを作成
            WantGoodsSeeder::class,                     // 欲しい商品データを作成
            GoodsImgSeeder::class,                      // 商品画像を作成
            WantGoodsImgSeeder::class,                  // 欲しい商品画像を作成
            ProductToHashtagSeeder::class,              // 商品とハッシュタグの関連
            WantlistToHashtagSeeder::class,             // 欲しい商品とハッシュタグの関連
            GoodsToWantgoodsSeeder::class,              // 商品と欲しい商品のマッチング
            ProductToWantgoodsToHashtagSeeder::class,   // 商品-欲しい商品-ハッシュタグの関連
        ]);
    }
}
