<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand fs-3" href="#">FreeCourse</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-2">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="course">Course</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                        style="width: 500px;">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>

                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-cart" viewBox="0 0 16 16">
                                <path
                                    d="M0 0h1v1H0V0zm4 1.828a1 1 0 0 1 1 0L6 1l2 10.1a1 1 0 1 1-1.98.2L4 2.828 3.667 1.2a1 1 0 0 1 1.054-.372L8 2l.58 2.828a1 1 0 0 1-1.053 1.172L3 5.636l-.553.553A1 1 0 1 1 1.553 5.11L3 4.364 2 2 0 0h5a1 1 0 0 1 .995.883L6.1 10H14a1 1 0 1 1 0 2H6.41l-.64 3.198a1 1 0 0 1-1.976.204L1.244 3H0V1h1.244zM14 11a2 2 0 1 1-4 0 2 2 0 0 1 4 0z" />
                            </svg>
                            Cart
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-person" viewBox="0 0 16 16">
                                <path
                                    d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 2a5 5 0 0 1 5 5v1H3v-1a5 5 0 0 1 5-5zm5 1v2a4 4 0 0 1-8 0v-2a4 4 0 0 1 8 0zM1 14a6 6 0 0 1 12 0H1z" />
                            </svg>
                            Profile
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- End Navbar --}}
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
    </style>

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

                <!-- Featured Course 1: Natural Language Processing -->
                <div class="col">
                    <div class="card h-100">
                        <img src="image/nlp.jpg" class="card-img-top" alt="..."
                            style="width: 100%; height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">Natural Language Processing</h5>
                            <p class="card-text">Master the art of language understanding and processing with
                                cutting-edge techniques in NLP.</p>
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
                                    <span class="text-success">$99.99</span>
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
                            <a href="nlp" class="btn btn-primary">Add to Cart</a>
                        </div>
                    </div>
                </div>

                <!-- Featured Course 2: Machine Learning Algorithms -->
                <div class="col">
                    <div class="card h-100">
                        <img src="image/ml.jpg" class="card-img-top" alt="..."
                            style="width: 100%; height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">Machine Learning Algorithms</h5>
                            <p class="card-text">Explore and implement powerful machine learning algorithms to solve
                                complex problems.</p>
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
                                    <span class="text-success">$99.99</span>
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
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                        </div>
                    </div>
                </div>

                <!-- Featured Course 3: Deep Learning Fundamentals -->
                <div class="col">
                    <div class="card h-100">
                        <img src="image/dl.jpg" class="card-img-top" alt="..."
                            style="width: 100%; height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">Deep Learning Fundamentals</h5>
                            <p class="card-text">Dive deep into neural networks, backpropagation, and convolutional
                                neural networks.</p>
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
                                    <span class="text-success">$99.99</span>
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
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                        </div>
                    </div>
                </div>

                <!-- Featured Course 4: Computer Vision -->
                <div class="col">
                    <div class="card h-100">
                        <img src="image/cv.jpg" class="card-img-top" alt="..."
                            style="width: 100%; height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">Computer Vision</h5>
                            <p class="card-text">See Beyond the Pixels: Unleashing the Power of Computer Vision for a
                                Visual Revolution.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="badge bg-primary"><i class="bi bi-star"></i> 4.5</span>
                                    <span class="text-muted">Average Rating</span>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="text-muted">Price:</span>
                                    <span class="text-success">$89.99</span>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="text-muted">Tutor:</span>
                                    <span>Jane Doe</span>
                                </div>
                            </li>
                        </ul>
                        <div class="card-body">
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                        </div>
                    </div>
                </div>

                <!-- Featured Course 5: Web Programming -->
                <div class="col">
                    <div class="card h-100">
                        <img src="image/wp.jpg" class="card-img-top" alt="..."
                            style="width: 100%; height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">Web Progamming</h5>
                            <p class="card-text">"Coding the Web: Transforming Ideas into Interactive Experiences with
                                Web Programming Mastery.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="badge bg-primary"><i class="bi bi-star"></i> 4.8</span>
                                    <span class="text-muted">Average Rating</span>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="text-muted">Price:</span>
                                    <span class="text-success">$109.99</span>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="text-muted">Tutor:</span>
                                    <span>Bob Smith</span>
                                </div>
                            </li>
                        </ul>
                        <div class="card-body">
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                        </div>
                    </div>
                </div>
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
        <a href="#" class="btn btn-primary btn-lg">Get Started</a>
    </section>
    {{-- End Benefit --}}


    <footer class="bg-dark py-5 mt-5">
        <div class="containerr text-light text-center">
            <p class="display-5 mb-3">FreeCourse</p>
            <small class="text-white-50">&copy; Copyright by CodeStation. All rights reserved.</small>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
