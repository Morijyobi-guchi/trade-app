<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Department;

class DepartmentSeeder extends Seeder
{
    public function run(): void
    {
        Department::create([
            'name' => '高度情報工学科',
            'course_years' => 4,
        ]);

        Department::create([
            'name' => '情報システム科',
            'course_years' => 2,
        ]);

        Department::create([
            'name' => 'ゲームクリエイター科',
            'course_years' => 3,
        ]);

        Department::create([
            'name' => 'AIシステム科',
            'course_years' => 2,
        ]);

        Department::create([
            'name' => 'ネットワークセキュリティ科',
            'course_years' => 2,
        ]);
    }
}
