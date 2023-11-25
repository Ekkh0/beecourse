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
        $publishDate4 = Carbon::create(2020, 9, 2, 13, 0, 0);
        $publishDate5 = Carbon::create(2021, 3, 2, 16, 0, 0);
        $publishDate6 = Carbon::create(2020, 12, 7, 14, 0, 0);

        DB::table('courses')->insert([
            [
                'name' => 'Clustering & Classification With Machine Learning In Python',
                'description' => 'Harness The Power Of Machine Learning For Unsupervised & Supervised Learning In Python',
                'publish_date' => $publishDate1->format('Y-m-d H:i:s'),
                'price' => 199.900,
                'rating' => 4.8,
                'tutor' => 'Emily Johnson'
            ],
            [
                'name' => 'Introduction to AI, Machine Learning and Python basics',
                'description' => 'Learn to understand Artificial Intelligence and Machine Learning algorithms, and learn the basics of Python Programming',
                'publish_date' => $publishDate2->format('Y-m-d H:i:s'),
                'price' => 99.900,
                'rating' => 4.8,
                'tutor' => 'John Ash'
            ],
            [
                'name' => 'The Ultimate Guide to Game Development with Unity (Official)',
                'description' => 'Created in partnership with Unity Technologies: learn C# by developing 2D & 3D games with this comprehensive guide',
                'publish_date' => $publishDate3->format('Y-m-d H:i:s'),
                'price' => 159.900,
                'rating' => 4.4,
                'tutor' => 'Ryan Matthews'
            ],
            [
                'name' => 'Python for Deep Learning: Build Neural Networks in Python',
                'description' => 'Learn the fundamentals of Deep Learning theory, how to build artificial neural networks with Tensorflow and Keras, and making predictions using the models created',
                'publish_date' => $publishDate4->format('Y-m-d H:i:s'),
                'price' => 100.400,
                'rating' => 4.6,
                'tutor' => 'Zoe Mitchell'
            ],
            [
                'name' => 'Machine Learning & Generative AI',
                'description' => "Explore the future of technology in our Machine Learning & Generative AI course. Master the principles of machine learning and delve into creative AI solutions.",
                'publish_date' => $publishDate5->format('Y-m-d H:i:s'),
                'price' => 80.700,
                'rating' => 4.4,
                'tutor' => 'Liam Donovan'
            ],
            [
                'name' => 'Python for Data Science',
                'description' => "Unlock the power of Python for Data Science in our comprehensive course. Dive into the world of data analysis, visualization, and manipulation using Python.",
                'publish_date' => $publishDate6->format('Y-m-d H:i:s'),
                'price' => 100.900,
                'rating' => 4.7,
                'tutor' => 'Maya Rodriguez'
            ],
        ]);
    }
}
