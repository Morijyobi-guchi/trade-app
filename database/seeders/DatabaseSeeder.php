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
        // 複数のテストユーザーを作成
        User::factory(10)->create();

        // 一般ユーザーのテストデータを作成
        User::factory()->create([
            'user_name' => '田中太郎',
            'mail_address' => 'tanaka@example.com',
            'department' => 1,
            'entry_year' => 2022,
            'password' => bcrypt('password'),
            'account_expiration_date' => '2026-03-31',
            'delete_flag' => false,
        ]);

        User::factory()->create([
            'user_name' => '佐藤花子',
            'mail_address' => 'sato@example.com',
            'department' => 2,
            'entry_year' => 2024,
            'password' => bcrypt('password'),
            'account_expiration_date' => '2027-03-31',
            'delete_flag' => false,
        ]);
        User::factory()->create([
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
