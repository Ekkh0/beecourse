@extends('layout.contentlayout')
@section('titletitle')Home @endsection

@section('extraextracss')
<style>
    .carousel-item {
        height: 32rem;
        background-color: #777;
        color: white;
        position: relative;
    }

    .container {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        padding-bottom: 50px;
    }

    .course-descriptor{
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
    }
</style>
@endsection

@section('contentcontent')
    {{-- Carousel --}}
    <div id="myCarousel" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <h1>Example Headline</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium assumenda quae
                        necessitatibus unde laudantium quam vel officia. Non cumque voluptatum, assumenda blanditiis ea
                        numquam exercitationem quo hic perspiciatis quaerat quia amet dolorem et itaque doloribus
                        placeat fuga. Earum consectetur sapiente obcaecati, similique porro delectus. Eveniet
                        consequatur animi saepe quibusdam voluptatem.</p>
                    <a href="#" class="btn btn-lg btn-primary">
                        Sign up today
                    </a>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <h1>Example Headline 2</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium assumenda quae
                        necessitatibus unde laudantium quam vel officia. Non cumque voluptatum, assumenda blanditiis ea
                        numquam exercitationem quo hic perspiciatis quaerat quia amet dolorem et itaque doloribus
                        placeat fuga. Earum consectetur sapiente obcaecati, similique porro delectus. Eveniet
                        consequatur animi saepe quibusdam voluptatem.</p>
                    <a href="#" class="btn btn-lg btn-primary">
                        Sign up today
                    </a>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <h1>Example Headline 3</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium assumenda quae
                        necessitatibus unde laudantium quam vel officia. Non cumque voluptatum, assumenda blanditiis ea
                        numquam exercitationem quo hic perspiciatis quaerat quia amet dolorem et itaque doloribus
                        placeat fuga. Earum consectetur sapiente obcaecati, similique porro delectus. Eveniet
                        consequatur animi saepe quibusdam voluptatem.</p>
                    <a href="#" class="btn btn-lg btn-primary">
                        Sign up today
                    </a>
                </div>
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
    <section class="containerCourse mt-5 ms-5 me-5">
        <div class="containerF mt-5">
            <h2 class="mb-4">Featured Courses</h2>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">

                @foreach($courses as $course)
                <div class="col">
                    <div class="card h-100">
                        <img src="image/nlp.jpg" class="card-img-top" alt="..."
                            style="width: 100%; height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">{{$course->name}}</h5>
                            <p class="card-text course-descriptor">{{$course->description}}</p>
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
                                    <span class="text-success">${{$course->price}}</span>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="text-muted">Tutor:</span>
                                    <span>John Doe</span>
                                </div>
                            </li>
                        </ul>
                        <div class="card-body">
                            <a href="nlp" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <span class="pt-3" style="display: flex; justify-content: center">
            {{ $courses->links('pagination::bootstrap-4') }}
        </span>

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
        <a href="#" class="btn btn-primary btn-lg">Get Started</a>
    </section>
    {{-- End Benefit --}}
@endsection