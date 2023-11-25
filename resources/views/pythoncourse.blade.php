@extends('layout.contentlayout')
@section('titletitle')
    NLP
@endsection

@section('extraextracss')
    <style>
        .header-card {
            background-color: #777;
            color: white;
            padding: 20px;
        }

        .course-icon {
            font-size: 24px;
            margin-right: 10px;
        }

        .dropdown-menu a {
            text-decoration: none !important;
        }

        .dropdown-menu a:hover {
            background-color: #f8f9fa !important;
        }
    </style>
@endsection

@section('contentcontent')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <!-- Header Card -->
                <div class="card header-card">
                    <div class="card-body">
                        <h2 class="card-title">Clustering & Classification With Machine Learning In Python</h2>
                        <p class="card-text">Harness The Power Of Machine Learning For Unsupervised & Supervised Learning In
                            Python</p>
                        <p class="card-text"><strong>Instructor:</strong> John Doe</p>
                        <p class="card-text"><strong>Price:</strong> $99.99</p>
                    </div>
                </div>

                <!-- What You Will Learn -->
                <div class="card mt-4">
                    <div class="card-body">
                        <h3>What You Will Learn</h3>
                        <ul>
                            <li><span class="course-icon">&#128218;</span>Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Voluptas, asperiores.</li>
                            <li><span class="course-icon">&#128214;</span> Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Voluptas, asperiores.</li>
                            <li><span class="course-icon">&#128220;</span> Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Voluptas, asperiores.
                            </li>
                            <li><span class="course-icon">&#128172;</span> Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Voluptas, asperiores.
                            </li>
                            <li><span class="course-icon">&#128187;</span> Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Voluptas, asperiores.
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Course Includes -->
                <div class="card mt-4">
                    <div class="card-body">
                        <h3>Course Includes</h3>
                        <p><span class="course-icon">&#128249;</span> Total Videos: 20</p>
                        <p><span class="course-icon">&#127947;</span> Exercises: 15</p>
                    </div>
                </div>

                <!-- Course Content -->
                <div class="card mt-4">
                    <div class="card-body">
                        <h3>Course Content</h3>
                        <ol>
                            <li class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" id="chapter1Dropdown"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    style="text-decoration: none; color: inherit;">
                                    Chapter 1: Introduction to NLP
                                </a>
                                <div class="dropdown-menu" aria-labelledby="chapter1Dropdown">
                                    <a class="dropdown-item" href="#">Video 1</a>
                                    <a class="dropdown-item" href="#">Video 2</a>
                                    <a class="dropdown-item" href="#">Video 3</a>
                                    <a class="dropdown-item" href="#">Video 4</a>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" id="chapter2Dropdown"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    style="text-decoration: none; color: inherit;">
                                    Chapter 2: Text Preprocessing Techniques
                                </a>
                                <div class="dropdown-menu" aria-labelledby="chapter2Dropdown">
                                    <a class="dropdown-item" href="#">Video 1</a>
                                    <a class="dropdown-item" href="#">Video 2</a>
                                    <a class="dropdown-item" href="#">Video 3</a>
                                    <a class="dropdown-item" href="#">Video 4</a>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" id="chapter3Dropdown"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    style="text-decoration: none; color: inherit;">
                                    Chapter 3: Building Language Models
                                </a>
                                <div class="dropdown-menu" aria-labelledby="chapter3Dropdown">
                                    <a class="dropdown-item" href="#">Video 1</a>
                                    <a class="dropdown-item" href="#">Video 2</a>
                                    <a class="dropdown-item" href="#">Video 3</a>
                                    <a class="dropdown-item" href="#">Video 4</a>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" id="chapter4Dropdown"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    style="text-decoration: none; color: inherit;">
                                    Chapter 4: Sentiment Analysis
                                </a>
                                <div class="dropdown-menu" aria-labelledby="chapter4Dropdown">
                                    <a class="dropdown-item" href="#">Video 1</a>
                                    <a class="dropdown-item" href="#">Video 2</a>
                                    <a class="dropdown-item" href="#">Video 3</a>
                                    <a class="dropdown-item" href="#">Video 4</a>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" id="chapter5Dropdown"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    style="text-decoration: none; color: inherit;">
                                    Chapter 5: Real-world NLP Projects
                                </a>
                                <div class="dropdown-menu" aria-labelledby="chapter5Dropdown">
                                    <a class="dropdown-item" href="#">Video 1</a>
                                    <a class="dropdown-item" href="#">Video 2</a>
                                    <a class="dropdown-item" href="#">Video 3</a>
                                    <a class="dropdown-item" href="#">Video 4</a>
                                </div>
                            </li>

                        </ol>
                    </div>
                </div>
            </div>

            <!-- Placeholder for Additional Content / Features -->

        </div>
    </div>
@endsection
