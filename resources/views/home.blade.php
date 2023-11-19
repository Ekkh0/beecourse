<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="home_style.css">

    <nav class="navbar">
        <div class="logo">
            {{-- <img src="logo.png" alt="Logo"> --}}
            <a href="home"><img src="image/logo0.png" alt="IMg not found"></a>
        </div>

        <div class="menu">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Courses</a></li>
                <li><a href="#">About Us</a></li>
            </ul>
        </div>

        <div class="cart">
            <a href="/logout">Logout</a>
            {{-- link to cart page --}}
            <a href="cart"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 16 16"><path fill="currentColor" d="M16 7.992C16 3.58 12.416 0 8 0S0 3.58 0 7.992c0 2.43 1.104 4.62 2.832 6.09c.016.016.032.016.032.032c.144.112.288.224.448.336c.08.048.144.111.224.175A7.98 7.98 0 0 0 8.016 16a7.98 7.98 0 0 0 4.48-1.375c.08-.048.144-.111.224-.16c.144-.111.304-.223.448-.335c.016-.016.032-.016.032-.032c1.696-1.487 2.8-3.676 2.8-6.106zm-8 7.001c-1.504 0-2.88-.48-4.016-1.279c.016-.128.048-.255.08-.383a4.17 4.17 0 0 1 .416-.991c.176-.304.384-.576.64-.816c.24-.24.528-.463.816-.639c.304-.176.624-.304.976-.4A4.15 4.15 0 0 1 8 10.342a4.185 4.185 0 0 1 2.928 1.166c.368.368.656.8.864 1.295c.112.288.192.592.24.911A7.03 7.03 0 0 1 8 14.993zm-2.448-7.4a2.49 2.49 0 0 1-.208-1.024c0-.351.064-.703.208-1.023c.144-.32.336-.607.576-.847c.24-.24.528-.431.848-.575c.32-.144.672-.208 1.024-.208c.368 0 .704.064 1.024.208c.32.144.608.336.848.575c.24.24.432.528.576.847c.144.32.208.672.208 1.023c0 .368-.064.704-.208 1.023a2.84 2.84 0 0 1-.576.848a2.84 2.84 0 0 1-.848.575a2.715 2.715 0 0 1-2.064 0a2.84 2.84 0 0 1-.848-.575a2.526 2.526 0 0 1-.56-.848zm7.424 5.306c0-.032-.016-.048-.016-.08a5.22 5.22 0 0 0-.688-1.406a4.883 4.883 0 0 0-1.088-1.135a5.207 5.207 0 0 0-1.04-.608a2.82 2.82 0 0 0 .464-.383a4.2 4.2 0 0 0 .624-.784a3.624 3.624 0 0 0 .528-1.934a3.71 3.71 0 0 0-.288-1.47a3.799 3.799 0 0 0-.816-1.199a3.845 3.845 0 0 0-1.2-.8a3.72 3.72 0 0 0-1.472-.287a3.72 3.72 0 0 0-1.472.288a3.631 3.631 0 0 0-1.2.815a3.84 3.84 0 0 0-.8 1.199a3.71 3.71 0 0 0-.288 1.47c0 .352.048.688.144 1.007c.096.336.224.64.4.927c.16.288.384.544.624.784c.144.144.304.271.48.383a5.12 5.12 0 0 0-1.04.624c-.416.32-.784.703-1.088 1.119a4.999 4.999 0 0 0-.688 1.406c-.016.032-.016.064-.016.08C1.776 11.636.992 9.91.992 7.992C.992 4.14 4.144.991 8 .991s7.008 3.149 7.008 7.001a6.96 6.96 0 0 1-2.032 4.907z"/></svg></a>

            {{-- link to account page --}}
            <a href="account"><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 512 512"><circle cx="176" cy="416" r="16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="400" cy="416" r="16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M48 80h64l48 272h256"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M160 288h249.44a8 8 0 0 0 7.85-6.43l28.8-144a8 8 0 0 0-7.85-9.57H128"/></svg></a>
        </div>
    </nav>


</head>
<body>



    <div class="body">
        <div class="body-left">
            <h1>Unlocking Knowledge. <br> Your Path to Educational <br> Excellence
            </h1>

            <p class="p1">Discover a Wealth of Educational Resources Tailored to Your <br> Learning Journey</p>

            <p class="p2">Register youself and receive an exclusive discount !!!</p>

            <div class="registration-box">
                <div class="input-container">
                    <input type="email" placeholder="Enter your email address">
                    <button>Register</button>
                </div>
            </div>

            <div class="join-count">
                <div class="large-number">2727</div>
                <div class="small-label">
                    <div>People</div>
                    <div>Joined</div>
                </div>

                <div class="large-number" style="margin-left: 100px">1K+</div>
                <div class="small-label" >
                    <div>Available</div>
                    <div>Courses</div>
                </div>
            </div>
        </div>

        <div class="image-container">
            <img src="image/mem.png" alt="Your Image">
        </div>
    </div>

    <div class="services">

        <div class="services-content">
            <h2>Lifetime Access</h2>
            <p>Unlock lifelong learning <br>
                with lifetime access.</p>
        </div>


        <div class="services-content">
            <h2>Affordable Cost</h2>
            <p>Quality education at an <br>
                 affordable cost.</p>
        </div>

        <div class="services-content">
            <h2>Updated Material</h2>
            <p>Stay ahead with updated <br>
                material.</p>
        </div>



    </div>

</body>
</html>
