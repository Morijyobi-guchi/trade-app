<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\WantlistToHashtag;

class WantlistToHashtagSeeder extends Seeder
{
    public function run(): void
    {
        // プログラミング本のハッシュタグ (want_goods_id: 1)
        WantlistToHashtag::create([
            'want_goods_ID' => 1,
            'hashtag_list' => 'プログラミング,IT,勉強,技術書,Laravel,PHP',
            'delete_flag' => false,
        ]);

        // ゲーミングマウスのハッシュタグ (want_goods_id: 2)
        WantlistToHashtag::create([
            'want_goods_ID' => 2,
            'hashtag_list' => 'ゲーム,PC機器,高性能,FPS,マウス',
            'delete_flag' => false,
        ]);

        // デザイン系参考書のハッシュタグ (want_goods_id: 3)
        WantlistToHashtag::create([
            'want_goods_ID' => 3,
            'hashtag_list' => 'デザイン,勉強,UI/UX,参考書,クリエイティブ',
            'delete_flag' => false,
        ]);

        // アニメグッズのハッシュタグ (want_goods_id: 4)
        WantlistToHashtag::create([
            'want_goods_ID' => 4,
            'hashtag_list' => 'アニメ,グッズ,フィギュア,趣味,コレクション',
            'delete_flag' => false,
        ]);

        // スポーツ用品のハッシュタグ (want_goods_id: 5)
        WantlistToHashtag::create([
            'want_goods_ID' => 5,
            'hashtag_list' => 'スポーツ,バドミントン,趣味,ラケット,運動',
            'delete_flag' => false,
        ]);

        // ファッション小物のハッシュタグ (want_goods_id: 6)
        WantlistToHashtag::create([
            'want_goods_ID' => 6,
            'hashtag_list' => 'ファッション,アクセサリー,おしゃれ,小物,コーディネート',
            'delete_flag' => false,
        ]);
    }
}
