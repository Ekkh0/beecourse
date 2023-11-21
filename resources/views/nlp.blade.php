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

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <!-- Header Card -->
                <div class="card header-card">
                    <div class="card-body">
                        <h2 class="card-title">Natural Language Processing Fundamentals</h2>
                        <p class="card-text">Master the art of language understanding and processing with
                            cutting-edge techniques in Natural Language Processing (NLP). This comprehensive
                            course covers the fundamentals of NLP and equips you with the skills to work on
                            exciting projects in the field.</p>
                        <p class="card-text"><strong>Instructor:</strong> John Doe</p>
                        <p class="card-text"><strong>Price:</strong> $99.99</p>
                    </div>
                </div>

                <!-- What You Will Learn -->
                <div class="card mt-4">
                    <div class="card-body">
                        <h3>What You Will Learn</h3>
                        <ul>
                            <li><span class="course-icon">&#128218;</span> Understand the basics of Natural Language
                                Processing.</li>
                            <li><span class="course-icon">&#128214;</span> Implement text preprocessing techniques.</li>
                            <li><span class="course-icon">&#128220;</span> Build and train your own language models.
                            </li>
                            <li><span class="course-icon">&#128172;</span> Explore sentiment analysis and text
                                classification.</li>
                            <li><span class="course-icon">&#128187;</span> Work on real-world NLP projects and
                                applications.</li>
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
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
