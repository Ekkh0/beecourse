<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $publishDate1 = Carbon::create(2023, 1, 1, 12, 0, 0);
        $publishDate2 = Carbon::create(2021, 7, 3, 12, 0, 0);
        $publishDate3 = Carbon::create(2022, 10, 10, 11, 0, 0);

        DB::table('courses')->insert([
            [
                'name' => 'Clustering & Classification With Machine Learning In Python',
                'description' => 'Harness The Power Of Machine Learning For Unsupervised & Supervised Learning In Python',
                'publish_date' => $publishDate1->format('Y-m-d H:i:s'),
                'price' => 199.900,
            ],
            [
                'name' => 'Introduction to AI, Machine Learning and Python basics',
                'description' => 'Learn to understand Artificial Intelligence and Machine Learning algorithms, and learn the basics of Python Programming',
                'publish_date' => $publishDate2->format('Y-m-d H:i:s'),
                'price' => 99.900,
            ],
            [
                'name' => 'The Ultimate Guide to Game Development with Unity (Official)',
                'description' => 'Created in partnership with Unity Technologies: learn C# by developing 2D & 3D games with this comprehensive guide',
                'publish_date' => $publishDate3->format('Y-m-d H:i:s'),
                'price' => 159.900,
            ],
        ]);
    }
}
