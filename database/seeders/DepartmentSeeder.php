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
            'name' => '総合システム工学科',
            'course_years' => 3,
        ]);
        Department::create([
            'name' => '情報システム科',
            'course_years' => 2,
        ]);
        Department::create([
            'name' => '情報ビジネス科',
            'course_years' => 2,
        ]);
        Department::create([
            'name' => 'ITクリエイター科',
            'course_years' => 2,
        ]);
        Department::create([
            'name' => '総合デザイン科',
            'course_years' => 3,
        ]);
        Department::create([
            'name' => 'デザイン科グラフィックデザインコース',
            'course_years' => 2,
        ]);
        Department::create([
            'name' => 'デザイン科アニメ・マンガコース',
            'course_years' => 2,
        ]);
        Department::create([
            'name' => 'デザイン科CGクリエイトコース',
            'course_years' => 2,
        ]);
        Department::create([
            'name' => 'デザイン科建築インテリアコース',
            'course_years' => 2,
        ]);
        Department::create([
            'name' => 'ゲームクリエイター科',
            'course_years' => 3,
        ]);
    }
}
