<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        // 学科クラスのテストデータを作成
        Course::create([
            'name' => '高度情報工学科',
            'course_years' => 4,
        ]);
        Course::create([
            'name' => '総合システム工学科',
            'course_years' => 3,
        ]);
        Course::create([
            'name' => '情報システム科',
            'course_years' => 2,
        ]);
        Course::create([
            'name' => '情報ビジネス科',
            'course_years' => 2,
        ]);
        Course::create([
            'name' => 'ITクリエイター科',
            'course_years' => 2,
        ]);
        Course::create([
            'name' => '総合デザイン科',
            'course_years' => 3,
        ]);
        Course::create([
            'name' => 'デザイン科グラフィックデザインコース',
            'course_years' => 2,
        ]);
        Course::create([
            'name' => 'デザイン科アニメ・マンガコース',
            'course_years' => 2,
        ]);
        Course::create([
            'name' => 'デザイン科CGクリエイトコース',
            'course_years' => 2,
        ]);
        Course::create([
            'name' => 'デザイン科建築インテリアコース',
            'course_years' => 2,
        ]);
        Course::create([
            'name' => 'ゲームクリエイター科',
            'course_years' => 3,
        ]);

    }
}
