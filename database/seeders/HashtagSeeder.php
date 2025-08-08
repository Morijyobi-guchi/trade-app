<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hashtag;

class HashtagSeeder extends Seeder
{
    public function run(): void
    {
        Hashtag::create([
            'hashtag_name' => 'プログラミング',
        ]);

        Hashtag::create([
            'hashtag_name' => 'IT',
        ]);

        Hashtag::create([
            'hashtag_name' => 'ゲーム',
        ]);

        Hashtag::create([
            'hashtag_name' => '漫画',
        ]);

        Hashtag::create([
            'hashtag_name' => 'アニメ',
        ]);

        Hashtag::create([
            'hashtag_name' => 'スポーツ',
        ]);

        Hashtag::create([
            'hashtag_name' => '音楽',
        ]);

        Hashtag::create([
            'hashtag_name' => 'ファッション',
        ]);

        Hashtag::create([
            'hashtag_name' => '勉強',
        ]);

        Hashtag::create([
            'hashtag_name' => '趣味',
        ]);

        Hashtag::create([
            'hashtag_name' => '新品',
        ]);

        Hashtag::create([
            'hashtag_name' => '美品',
        ]);

        Hashtag::create([
            'hashtag_name' => '限定',
        ]);

        Hashtag::create([
            'hashtag_name' => 'レア',
        ]);

        Hashtag::create([
            'hashtag_name' => '格安',
        ]);

        Hashtag::create([
            'hashtag_name' => 'Tシャツ',
        ]);

        Hashtag::create([
            'hashtag_name' => 'メンズ',
        ]);

        Hashtag::create([
            'hashtag_name' => '教科書・参考書',
        ]);

        Hashtag::create([
            'hashtag_name' => 'おしゃれ',
        ]);

        Hashtag::create([
            'hashtag_name' => 'デニム',
        ]);

        Hashtag::create([
            'hashtag_name' => 'カード',
        ]);

        Hashtag::create([
            'hashtag_name' => '初心者向け',
        ]);

        Hashtag::create([
            'hashtag_name' => '全巻セット',
        ]);

        Hashtag::create([
            'hashtag_name' => 'Blu-ray',
        ]);

        Hashtag::create([
            'hashtag_name' => 'テニス',
        ]);
    }
}
