<nav class="beenav navbar navbar-expand-lg bg-body-tertiary" style="padding: 0 !important;">
    <div class="container-fluid" style="padding: 0 !important">
        <div class="navbar-brand logodiagonalbackground">
            <a class="fs-3 beelogo" href="/">
                <div class="beelogobackground"></div>
                <img src="image/logo.png" alt="" style="width: 200px">
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="height: 100%">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <div class="menudiagonalbackground {{ Request::is('/')? 'active': '' }}">
                        <a class="nav-link {{ Request::is('/')? 'active': '' }}" aria-current="page" href="/">Home</a>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="menudiagonalbackground {{ Request::is('Courses')? 'active': '' }}">
                        <a class="nav-link {{ Request::is('Courses')? 'active': '' }}" href="Courses">Courses</a>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="menudiagonalbackground {{ Request::is('About')? 'active': '' }}">
                        <a class="nav-link {{ Request::is('About')? 'active': '' }}" href="About">About</a>
                    </div>
                </li>
            </ul>
            
            <form class="d-flex" role="search" style="position: relative; align-items: center">
                <input class="beesearchbar" type="search" placeholder="Search" aria-label="Search" style="width: 500px;">
                <i class="input-icon"><iconify-icon icon="uil:search"></iconify-icon></i>
                <button class="btn btn-outline-success" type="submit" style="margin-left: 12px">Search</button>
            </form>

            <ul class="navbar-nav">
                <a class="nav-link" href="/cart" style="display: flex; align-items:center;">
                    <iconify-icon icon="uil:cart" style="font-size: 24px; margin-left: 8px"></iconify-icon>
                    Cart
                </a>
            </ul>

            <ul class="navbar-nav ms-auto" style="margin-right: 24px">
                <li class="nav-item">
                    @if(Auth::check())
                    <a class="nav-link" href="/logout" style="display: flex; align-items:center;">
                        <iconify-icon icon="tabler:logout" style="font-size: 24px; margin-right: 8px"></iconify-icon>
                        Logout
                    </a>
                    @else
                    <a class="nav-link" href="/login" style="display: flex; align-items:center;">
                        <iconify-icon icon="uil:user" style="font-size: 24px; margin-right: 8px"></iconify-icon>
                        Login
                    </a>
                    @endif
                </li>
            </ul>
        </div>
    </div>
</nav>