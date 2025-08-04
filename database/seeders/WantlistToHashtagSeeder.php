<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\WantlistToHashtag;

class WantlistToHashtagSeeder extends Seeder
{
    public function run(): void
    {
        // プログラミング本のハッシュタグ
        WantlistToHashtag::create([
            'want_goods_ID' => 1,
            'hashtag_list' => 'プログラミング,IT,勉強,技術書',
            'delete_flag' => false,
        ]);

        // ゲーミングマウスのハッシュタグ
        WantlistToHashtag::create([
            'want_goods_ID' => 2,
            'hashtag_list' => 'ゲーム,PC機器,高性能',
            'delete_flag' => false,
        ]);

        // デザイン系参考書のハッシュタグ
        WantlistToHashtag::create([
            'want_goods_ID' => 3,
            'hashtag_list' => 'デザイン,勉強,UI/UX',
            'delete_flag' => false,
        ]);

        // アニメグッズのハッシュタグ
        WantlistToHashtag::create([
            'want_goods_ID' => 4,
            'hashtag_list' => 'アニメ,グッズ,フィギュア,趣味',
            'delete_flag' => false,
        ]);

        // スポーツ用品のハッシュタグ
        WantlistToHashtag::create([
            'want_goods_ID' => 5,
            'hashtag_list' => 'スポーツ,バドミントン,趣味',
            'delete_flag' => false,
        ]);

        // ファッション小物のハッシュタグ
        WantlistToHashtag::create([
            'want_goods_ID' => 6,
            'hashtag_list' => 'ファッション,アクセサリー,おしゃれ',
            'delete_flag' => false,
        ]);
    }
}
