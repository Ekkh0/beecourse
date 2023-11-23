<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand fs-3" href="/"><img src="image/logo.png" alt="" style="width: 200px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-2">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/')? 'active': '' }}" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('Courses')? 'active': '' }}" href="Courses">Courses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('About')? 'active': '' }}" href="About">About</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                    style="width: 500px;">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>

            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    @if(Auth::check())
                    <a class="nav-link" href="/logout">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-person" viewBox="0 0 16 16">
                            <path
                                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 2a5 5 0 0 1 5 5v1H3v-1a5 5 0 0 1 5-5zm5 1v2a4 4 0 0 1-8 0v-2a4 4 0 0 1 8 0zM1 14a6 6 0 0 1 12 0H1z" />
                        </svg>
                        Logout
                    </a>
                    @else
                    <a class="nav-link" href="/login">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-person" viewBox="0 0 16 16">
                            <path
                                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 2a5 5 0 0 1 5 5v1H3v-1a5 5 0 0 1 5-5zm5 1v2a4 4 0 0 1-8 0v-2a4 4 0 0 1 8 0zM1 14a6 6 0 0 1 12 0H1z" />
                        </svg>
                        Login
                    </a>
                    @endif
                </li>
            </ul>
        </div>
    </div>
</nav>