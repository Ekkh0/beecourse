@extends('layout.contentlayout')
@section('titletitle')
    Home
@endsection

@section('extraextracss')
    <style>
        .container {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding-bottom: 50px;
        }

        .carousel-item img {
            object-fit:fill;
            width: 1440px;
            height: 700px;
        }
    </style>
@endsection

@section('contentcontent')
    {{-- Carousel --}}
    <div id="myCarousel" class="carousel slide" style="height:700px">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" style="height: 700px">
                <img src="/Banner/2.png" class="d-block w-100" alt="Image 1">
            </div>
            <div class="carousel-item" style="height: 700px">
                <img src="/Banner/3.png" class="d-block w-100" alt="Image 2">
            </div>
            <div class="carousel-item" style="height: 700px">
                <img src="/Banner/4.png" class="d-block w-100" alt="Image 3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    {{-- End Carousel --}}

    {{-- Featured Course --}}
    <section class="scroller__wrapper" style="position: relative; margin-left: 40px; margin-right: 40px;">
        <h2 class="mb-4" style="margin-left: 32px">Featured Courses</h2>
        <div class="scroller-vignette-left"></div>
        <div class="scroller-vignette-right"></div>
        <div class="scroller__container">
            <div class="scroller">
                @foreach ($courses as $course)
                    <div class="scroller__item">
                        <div class="card h-100 course-card">
                            <img src="{{ $course->image_url }}" class="card-img-top" alt="..."
                                style="width: 100%; height: 200px; object-fit: cover;">
                            <div class="card-body course-title-card">
                                <div class="title_desc"
                                    style="width: 65%; display: flex; flex-direction: column; justify-content: center; margin: 10px 0 10px 24px;">
                                    <h5 class="card-title shortened">{{ $course->name }}</h5>
                                    <p class="card-text course-descriptor">{{ $course->description }}</p>
                                </div>
                                <div class="rating" style="width: 35%;">
                                    <span class="badge bg-primary rating-container">
                                        <iconify-icon icon="solar:star-bold" style="font-size: 22px;"></iconify-icon>
                                        {{ $course->rating }}
                                    </span>
                                </div>
                            </div>
                            <ul class="list-group list-group-flush"">
                                <li class="list-group-item"
                                    style="background-color: rgba(248, 249, 250, 0.65); color: #152039; border-color: #102770;">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="text-muted" style="color: #102770 !important">Price:</span>
                                        <span class="text-success">${{ $course->price }}</span>
                                    </div>
                                </li>
                                <li class="list-group-item"
                                    style="background-color: rgba(248, 249, 250, 0.65); color: #152039">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="text-muted" style="color: #102770 !important">Tutor:</span>
                                        <span>{{ $course->tutor }}</span>
                                    </div>
                                </li>
                            </ul>
                            <div class="card-body" style="background-color: rgba(248, 249, 250, 0.65);">
                                <a href="{{route('courses.getDetail', $course->id)}}" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                @foreach ($courses as $course)
                    <div class="scroller__item">
                        <div class="card h-100 course-card">
                            <img src="image/nlp.jpg" class="card-img-top" alt="..."
                                style="width: 100%; height: 200px; object-fit: cover;">
                            <div class="card-body course-title-card">
                                <div class="title_desc"
                                    style="width: 75%; display: flex; flex-direction: column; justify-content: center; margin: 10px 0 10px 24px;">
                                    <h5 class="card-title course-title">{{ $course->name }}</h5>
                                    <p class="card-text course-descriptor">{{ $course->description }}</p>
                                </div>
                                <div class="rating" style="width: 25%;">
                                    <span class="badge bg-primary rating-container">
                                        <iconify-icon icon="solar:star-bold" style="font-size: 22px;"></iconify-icon>
                                        {{ $course->rating }}
                                    </span>
                                </div>
                            </div>
                            <ul class="list-group list-group-flush"">
                                <li class="list-group-item"
                                    style="background-color: rgba(248, 249, 250, 0.65); color: #152039; border-color: #102770;">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="text-muted" style="color: #102770 !important">Price:</span>
                                        <span class="text-success">${{ $course->price }}</span>
                                    </div>
                                </li>
                                <li class="list-group-item"
                                    style="background-color: rgba(248, 249, 250, 0.65); color: #152039">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="text-muted" style="color: #102770 !important">Tutor:</span>
                                        <span>{{ $course->tutor }}</span>
                                    </div>
                                </li>
                            </ul>
                            <div class="card-body" style="background-color: rgba(248, 249, 250, 0.65);">
                                <a href="{{route('courses.getDetail', $course->id)}}" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- End Feature Course --}}

    {{-- Benefit --}}
    <section class="containerBenefit mt-5 ms-5 me-5">
        <h2>Why Choose Us?</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Expert Instructors</h5>
                        <p class="card-text">Learn from industry experts with real-world experience.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Wide Range of Courses</h5>
                        <p class="card-text">Explore a diverse selection of courses covering various topics.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Flexible Learning</h5>
                        <p class="card-text">Learn at your own pace, anytime, anywhere.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="containerJoin mt-5 text-center">
        <h2>Ready to Start Learning?</h2>
        <p>Join thousands of learners and enhance your skills today.</p>
        <a href="
        @if (Auth::check()) /Courses
        @else
        /register @endif
        "
            class="btn btn-primary btn-lg">Get Started</a>
    </section>
    {{-- End Benefit --}}
@endsection
