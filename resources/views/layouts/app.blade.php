<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Comics</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <header>
        <div>
            <div class="d-flex container justify-content-between align-items-center py-4">
              <img src="../../public/img/dc-logo.png" alt="">
              <ul class="d-flex gap-4 w-75 text-uppercase fw-bold">
                <li>Characters</li>
                <li class="active">Comics</li>
                <li>Movies</li>
                <li>Tv</li>
                <li>Games</li>
                <li>Collectibles</li>
                <li>Videos</li>
                <li>Fans</li>
                <li>News</li>
                <li>Shop</li>
              </ul>
            </div>
      </div>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <div class="footer-up">
            <div class="container py-5 text-white d-flex gap-4">
                <div>
                    <ul>
                        <li class="text-uppercase fw-bold fs-5">Dc comics</li>
                        <li>Characters</li>
                        <li>Comics</li>
                        <li>Movies</li>
                        <li>TV</li>
                        <li>Games</li>
                        <li>Videos</li>
                        <li>News</li>
                    </ul>
                    <ul>
                        <li class="text-uppercase fw-bold fs-5">Shop</li>
                        <li>Shop DC</li>
                        <li>Shop DC Collectibles</li>
                    </ul>
                </div>
                <ul>
                    <li class="text-uppercase fw-bold fs-5">Dc</li>
                    <li>Terms Of Use</li>
                    <li>Privacy policy (New)</li>
                    <li>Ad Choices</li>
                    <li>Advertising</li>
                    <li>Jobs</li>
                    <li>Subscriptions</li>
                    <li>Talent Workshops</li>
                    <li>CPSC Certificates</li>
                    <li>Ratings</li>
                    <li>Shop Help</li>
                    <li>Contact Us</li>
                </ul>
                <ul>
                    <li class="text-uppercase fw-bold fs-5">Sites</li>
                    <li>DC</li>
                    <li>MAD Magazine</li>
                    <li>DC Kids</li>
                    <li>DC Universe</li>
                    <li>DC Power Visa</li>
                </ul>
                <div class="logo"></div>
            </div>
        </div>
        <div class="footer-down">
            <div class="container">
                <div><span>Sign-up now!</span></div>
                <div class="">
                    <span>Follow us</span>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
