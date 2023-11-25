<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('contents')->insert([
            [
                'course_id' => 1,
                'course_url' => 'https://youtu.be/ukzFI9rgwfU?si=wpdU7ucBfqhRsVA_',
                'duration' => 8,
                'description' => 'Machine learning is a transformative field within artificial intelligence that empowers computers to learn from data and improve their performance over time without explicit programming. By leveraging algorithms and statistical models, machine learning enables systems to make predictions, classify information, and uncover hidden patterns within datasets. This dynamic discipline finds applications across various industries, from predicting consumer behavior to enhancing medical diagnoses, marking a paradigm shift in how we approach complex problem-solving.'
            ],
            [
                'course_id' => 1,
                'course_url' => 'https://youtu.be/wk2ylI1qgU0?si=ddIGqZOp1SdUM3je',
                'duration' => 6,
                'description' => 'In this video, we will take a look at clustering, one of the techniques used in unsupervised learning.By the end, you will be able to describe how clustering algorithms are able to find data points containing common attributes and thus create logical groupings of data.Following this, there will be other algorithm or improvements to the algorithms that you could use.'
            ],
            [
                'course_id' => 1,
                'course_url' => 'https://youtu.be/4b5d3muPQmA?si=bYEFyqRlHL9Qiitk',
                'duration' => 8,
                'description' => 'Machine learning, particularly K-means clustering, is an impactful algorithm for categorizing unlabeled data by identifying similarities. Through an iterative process, K-means assigns data points to clusters based on their proximity to centroid points, fostering a nuanced exploration of underlying patterns. This technique offers valuable insights into the inherent structures and relationships among data points, enhancing our understanding of complex datasets.'
            ],

            [
                'course_id' => 2,
                'course_url' => 'https://youtu.be/ad79nYk2keg?si=6Bc6MM1fFgL45kYs',
                'duration' => 5,
                'description' => 'In this video, we unravel the intricate world of Artificial Intelligence in our series. Discover the inner workings of neural networks, delve into the nuances of natural language processing, and explore the fascinating realm of computer vision. Join us as we demystify AI, offering valuable insights and practical knowledge that will empower you on your journey into the exciting field of Artificial Intelligence.'
            ],

            [
                'course_id' => 2,
                'course_url' => 'https://youtu.be/jekwHBI1ySU?si=c-Mt3CBSvPPZmLzf',
                'duration' => 15,
                'description' => 'In this course, we embark on a captivating exploration of the History of AI.Delving into its conceptual beginnings, we navigate through pivotal moments that have defined the evolution of Artificial Intelligence. Join us on a compelling journey through time as we unravel the intricate narratives, challenges, and transformative breakthroughs that have sculpted AI into the technological marvel it is today.'
            ],

            [
                'course_id' => 2,
                'course_url' => 'https://youtu.be/olFxW7kdtP8?si=OcmXr1U6PyhEfbMh',
                'duration' => 20,
                'description' => 'Dive into the dynamic world of machine learning with our comprehensive course video on Types of Machine Learning. Explore the foundations of supervised learning, where algorithms make predictions based on labeled data, and unravel the mysteries of unsupervised learning, where insights emerge from unlabeled datasets. Lastly, venture into the realm of reinforcement learning, where machines learn through trial and error, paving the way for intelligent decision-making in diverse applications.'
            ],

            [
                'course_id' => 3,
                'course_url' => 'https://youtu.be/TXqJUufquns?si=NaL7y5RZx7f9mt9N',
                'duration' => 5,
                'description' => 'What is Unity? Unity is a real-time 3d and 2d cross-platform game engine and in this video, we break down exactly what that means. This video also explains why you would use Unity and who specifically should use it. Unity is a very powerful tool for game development as well as business applications, and if youre in the interactive 3d space you need to know about this tool.'
            ],

            [
                'course_id' => 3,
                'course_url' => 'https://youtu.be/nVieP57TD20?si=YqmoGA0S9IKr-MJs',
                'duration' => 16,
                'description' => 'Explore Unity development in this comprehensive video tutorial covering key topics such as computer configuration, folder structure, document directory, and creating a new Unity project. Gain insights into efficient tools like the Everything Indexer, learn to build custom editor tools, and optimize your workflow by creating default folders. The course concludes with a tutorial on creating Unity packages, offering a thorough understanding from start to finish.'
            ],

            [
                'course_id' => 3,
                'course_url' => 'https://youtu.be/GfS72wqKQ_g?si=v1M_MSa1tOEuKVqw',
                'duration' => 18,
                'description' => 'In this instructional video series, we kick off with a comprehensive introduction, guiding you through the process of downloading Unity software and creating a new project right from the start. Dive into the intricacies of project setup, asset importation, and application development, ensuring a seamless workflow. Finally, witness the culmination of your efforts with a detailed demonstration of the app and concluding insights for a well-rounded learning experience.'
            ],

            [
                'course_id' => 4,
                'course_url' => 'https://www.youtube.com/watch?v=6M5VXKLf4D4',
                'duration' => 6,
                'description' => "In this tutorial video, we will learn that Deep learning is a branch of machine learning that uses artificial neural networks to learn and make predictions without explicit programming. It mimics the human brain's learning process, extracting complex patterns from data. Key applications include image and speech recognition, natural language processing, and advancements in areas like computer vision and healthcare."
            ],

            [
                'course_id' => 4,
                'course_url' => 'https://www.youtube.com/watch?v=oJNHXPs0XDk',
                'duration' => 9,
                'description' => "What is neural network? Why are there many variety of neural network architectures? Learn about neural network architectures and when each variety of architecture is best used on a specific problem in this video!"
            ],

            [
                'course_id' => 4,
                'course_url' => 'https://www.youtube.com/watch?v=6_2hzRopPbQ',
                'duration' => 12,
                'description' => "In this video, we will learn how to create a artificial neural network using tensorflow and keras library. Learn how to use each library to later be able to create your veery own tensorflow model by the end of this tutorial video."
            ],

            [
                'course_id' => 5,
                'course_url' => 'https://www.youtube.com/watch?v=4RixMPF4xis&t=8s',
                'duration' => 6,
                'description' => "Demystify the distinctions between Artificial Intelligence (AI) and Machine Learning (ML) in our latest video. Are they truly synonymous? Join us as we unravel the intricacies of their relationship and explore related topics such as Deep Learning (DL). Gain clarity on the various types and properties of AI and ML. Watch now for a comprehensive understanding of these transformative technologies!"
            ],

            [
                'course_id' => 5,
                'course_url' => 'https://www.youtube.com/watch?v=pWNAtUwnBS8',
                'duration' => 2,
                'description' => "What is generative AI? What impacts does it leaves in our world? Learn all about generative AI in this short video to help enhances your understanding about generative AI!"
            ],

            [
                'course_id' => 5,
                'course_url' => 'https://www.youtube.com/watch?v=hfIUstzHs9A',
                'duration' => 9,
                'description' => "Dive into the fascinating realm of Generative AI! Uncover the magic behind realistic image, code, and dialogue creation. In this video, we demystify the workings of large language models, showcasing their potential to revolutionize enterprise operations. Discover the incredible capabilities of generative AI and its transformative impact on various industries. Watch now to unravel the secrets and possibilities within this cutting-edge technology"
            ],

            [
                'course_id' => 6,
                'course_url' => 'https://www.youtube.com/watch?v=xC-c7E5PK0Y',
                'duration' => 11,
                'description' => "What is data science? What kind of impacts does it makes? In this educational video, we will find out about the fundamental principles, methodologies, and real-life application of data science."
            ],

            [
                'course_id' => 6,
                'course_url' => 'https://www.youtube.com/watch?v=SUsfmh2BSbg',
                'duration' => 8,
                'description' => "The Data Science with Python course is meticulously crafted to provide participants with a profound understanding of the diverse libraries and packages essential for executing tasks such as data analysis, data visualization, web scraping, machine learning, and natural language processing using Python. Engage in real-life projects, assignments, demos, and case studies, ensuring a hands-on and practical learning experience throughout the course."
            ],

            [
                'course_id' => 6,
                'course_url' => 'https://www.youtube.com/watch?v=jNeUBWrrRsQ',
                'duration' => 44,
                'description' => "In this video, we will dive into the world of a data scientists, learning the skills needed to be a data scientist. By the end of this video, you will be able to create a model that will be able to deal with datas and learning the insights of the datas."
            ],

        ]);
    }
}
