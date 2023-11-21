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
                        <a class="nav-link " href="home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="course">Course</a>
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

    <div class="container mt-5">
        <h2 class="mb-4">Popular Topics</h2>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">

            <!-- Topic 1: Natural Language Processing -->
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

            <!-- Topic 2: Machine Learning Algorithms -->
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

            <!-- Topic 3: Deep Learning Fundamentals -->
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
        </div>
    </div>

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
