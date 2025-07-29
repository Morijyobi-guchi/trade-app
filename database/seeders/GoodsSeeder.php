<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Goods;

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
            'transaction_type' => '0',
            'size' => 'そこそこデカい',
            'quantity' => '1',
            'explanation' => 'これ読んどきゃ基本情報は受かる',
            'listing_deadline' => '2025-8-31',
            'trading_status_id' => 1,
            'account_id' => 1,
            'delete_flag' => false,
        ]);

        Goods::create([
            'goods_name' => '無敵キャンディ',
            'category_id' => 1,
            'situation_id' => 1,
            'transaction_type' => '0',
            'size' => '30cm',
            'quantity' => '1',
            'explanation' => '触れるもの全て破壊する',
            'listing_deadline' => '2025-8-31',
            'trading_status_id' => 1,
            'account_id' => 2,
            'delete_flag' => false,
        ]);

        // ファッション
        Goods::create([
            'goods_name' => 'デニムジャケット',
            'category_id' => 1,
            'situation_id' => 2,
            'transaction_type' => '1',
            'size' => 'Mサイズ',
            'quantity' => '1',
            'explanation' => '着用回数少なめ、美品です',
            'listing_deadline' => '2025-9-15',
            'trading_status_id' => 1,
            'account_id' => 3,
            'delete_flag' => false,
        ]);

        // ゲーム・おもちゃ・グッズ
        Goods::create([
            'goods_name' => 'ポケモンカードゲーム',
            'category_id' => 2,
            'situation_id' => 1,
            'transaction_type' => '0',
            'size' => '標準サイズ',
            'quantity' => '30',
            'explanation' => 'レアカード多数含む',
            'listing_deadline' => '2025-10-01',
            'trading_status_id' => 1,
            'account_id' => 1,
            'delete_flag' => false,
        ]);

        // ホビー・楽器・アート
        Goods::create([
            'goods_name' => 'アコースティックギター',
            'category_id' => 3,
            'situation_id' => 2,
            'transaction_type' => '1',
            'size' => '約100cm',
            'quantity' => '1',
            'explanation' => '初心者向け、ケース付き',
            'listing_deadline' => '2025-9-30',
            'trading_status_id' => 1,
            'account_id' => 2,
            'delete_flag' => false,
        ]);

        // 本・漫画・雑誌
        Goods::create([
            'goods_name' => 'ワンピース全巻セット',
            'category_id' => 4,
            'situation_id' => 1,
            'transaction_type' => '0',
            'size' => '約50cm',
            'quantity' => '105',
            'explanation' => '1-105巻まで揃っています',
            'listing_deadline' => '2025-11-30',
            'trading_status_id' => 1,
            'account_id' => 3,
            'delete_flag' => false,
        ]);

        // CD・DVD・ブルーレイ
        Goods::create([
            'goods_name' => 'アニメBlu-rayセット',
            'category_id' => 5,
            'situation_id' => 1,
            'transaction_type' => '1',
            'size' => '標準ケース',
            'quantity' => '12',
            'explanation' => '人気アニメの限定版',
            'listing_deadline' => '2025-10-15',
            'trading_status_id' => 1,
            'account_id' => 1,
            'delete_flag' => false,
        ]);

        // スポーツ
        Goods::create([
            'goods_name' => 'テニスラケット',
            'category_id' => 6,
            'situation_id' => 2,
            'transaction_type' => '0',
            'size' => '27インチ',
            'quantity' => '1',
            'explanation' => 'Wilson製、中級者向け',
            'listing_deadline' => '2025-9-20',
            'trading_status_id' => 1,
            'account_id' => 2,
            'delete_flag' => false,
        ]);

        // アウトドア・釣り・旅行用品
        Goods::create([
            'goods_name' => 'キャンプテント',
            'category_id' => 7,
            'situation_id' => 2,
            'transaction_type' => '1',
            'size' => '4人用',
            'quantity' => '1',
            'explanation' => '使用回数3回、綺麗な状態',
            'listing_deadline' => '2025-8-25',
            'trading_status_id' => 1,
            'account_id' => 3,
            'delete_flag' => false,
        ]);

        // コスメ・美容
        Goods::create([
            'goods_name' => 'スキンケアセット',
            'category_id' => 8,
            'situation_id' => 1,
            'transaction_type' => '1',
            'size' => '50ml×3本',
            'quantity' => '3',
            'explanation' => '未開封、プレゼント用',
            'listing_deadline' => '2025-12-31',
            'trading_status_id' => 1,
            'account_id' => 1,
            'delete_flag' => false,
        ]);

        // 文房具
        Goods::create([
            'goods_name' => '高級万年筆',
            'category_id' => 15,
            'situation_id' => 1,
            'transaction_type' => '0',
            'size' => '約15cm',
            'quantity' => '1',
            'explanation' => 'パイロット製、ケース付き',
            'listing_deadline' => '2025-10-31',
            'trading_status_id' => 1,
            'account_id' => 2,
            'delete_flag' => false,
        ]);

        // PC機器
        Goods::create([
            'goods_name' => 'ワイヤレスマウス',
            'category_id' => 16,
            'situation_id' => 1,
            'transaction_type' => '1',
            'size' => '約10cm',
            'quantity' => '1',
            'explanation' => 'Logicool製、未使用品',
            'listing_deadline' => '2025-9-10',
            'trading_status_id' => 1,
            'account_id' => 3,
            'delete_flag' => false,
        ]);

        // その他
        Goods::create([
            'goods_name' => '観葉植物',
            'category_id' => 17,
            'situation_id' => 1,
            'transaction_type' => '1',
            'size' => '高さ30cm',
            'quantity' => '1',
            'explanation' => '手入れ簡単、鉢付き',
            'listing_deadline' => '2025-8-20',
            'trading_status_id' => 1,
            'account_id' => 1,
            'delete_flag' => false,
        ]);
    }
}
