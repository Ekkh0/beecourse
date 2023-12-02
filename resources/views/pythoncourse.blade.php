@extends('layout.contentlayout')
@section('titletitle')
Clustering & Classification With Machine Learning In Python
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

    <link rel="stylesheet" href="/css/contents.css">
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
                {{-- <div class="courses-content-dropdown">
                    <label class="drop-label">Chapter 1: Introduction to NLP</label>
                    <select name="content" id="content" class="dropdown-input">
                        <option value="">Test</option>
                    </select>
                </div> --}}





                <div class="course-content">

                    @foreach ($content as $data)

                        {{-- ID name {{$data->name}} --}}
                        {{-- <br> --}}

                        @foreach ($data->content as $content)



                            {{-- {{$content->course_id}} --}}
                            {{-- {{$content->course_url}} --}}

                            <div class="testing">
                                <div class="col">
                                    <div class="card h-100">

                                        {{-- lagi coba masukin youtube video yang autoplay --}}
                                        
                                       {{-- <iframe src="{{$content->course_url}}" frameborder="0"></iframe> --}}
                                       {{-- <p><iframe width="560" height="315" src="https://www.youtube.com/embed/wpdU7ucBfqhRsVA_" title="" frameBorder="0"   allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"  allowFullScreen><br>Powered by <a href="https://youtubeembedcode.com">youtube embed code</a> and <a href="https://allabeviljas.se/lumify/">lumify lån</a></iframe></p> --}}


                                        <div class="card-body">
                                            <h5 class="card-title">{{$content->description}}</h5>
                                            <p class="card-text course-descriptor">{{$content->duration}}</p>
                                        </div>

                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="badge bg-primary"><i class="bi bi-star"></i> 4.7</span>
                                                    <span class="text-muted">Average Rating</span>
                                                </div>
                                            </li>

                                            <li class="list-group-item">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="text-muted">Price:</span>
                                                    <span class="text-success">${{$content->course_id}}</span>
                                                </div>
                                            </li>

                                            <li class="list-group-item">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="text-muted">Tutor:</span>
                                                    <span>John Doe</span>
                                                </div>
                                            </li>

                                        </ul>


                                    </div>
                                </div>
                            </div>


                        @endforeach


                    @endforeach



                </div>
            </div>


            <!-- Placeholder for Additional Content / Features -->

        </div>
    </div>
@endsection
