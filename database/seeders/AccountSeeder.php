<?php

namespace Database\Seeders;

use App\Models\Account;
use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    public function run(): void
    {

        // 一般ユーザーのテストデータを作成
        Account::create([
            'user_name' => '田中太郎',
            'mail_address' => 'tanaka@example.com',
            'department' => 1,
            'entry_year' => 2022,
            'password' => bcrypt('password'),
            'account_expiration_date' => '2026-03-31',
            'delete_flag' => false,
        ]);

        Account::create([
            'user_name' => '佐藤花子',
            'mail_address' => 'sato@example.com',
            'department' => 2,
            'entry_year' => 2024,
            'password' => bcrypt('password'),
            'account_expiration_date' => '2027-03-31',
            'delete_flag' => false,
        ]);
        Account::create([
            'user_name' => '山田タコ朗',
            'mail_address' => 'tako@example.com',
            'department' => 3,
            'entry_year' => 2024,
            'password' => bcrypt('password'),
            'account_expiration_date' => '2026-03-31',
            'delete_flag' => false,
        ]);
    }
}

