<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <ul class="top-nav">
        <li class="bg-white">
            <a href="#">
                <img src="https://www.dccomics.com/sites/all/themes/dc_comics_bp/images/DC_desktop_blue.svg">
            </a>
        </li>
        <li>
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/admin') }}">ADMIN</a>
                @else
                    <a href="{{ route('login') }}">LOGIN</a>
                @endauth
            @endif
            {{-- <a href="#">
                    Admin
                </a> --}}
        </li>
    </ul>

    <nav>
        <div class="container">
            <div class="row">
                <div class="col-md-12 mx-auto px-2 d-flex justify-content-between align-items-center">
                    <img src="https://www.dccomics.com/sites/all/themes/dc_comics_bp/logo.png" height="81">
                    <ul class="text-dark d-flex font-weight-bold align-items-center justify-content-between">
                        <li><a href="#">CHARACTERS</a></li>
                        <li><a href="#">COMICS</a>
                            <div class="active"></div>
                        </li>
                        <li><a href="#">MOVIES</a></li>
                        <li><a href="#">TV</a></li>
                        <li><a href="#">GAMES</a></li>
                        <li><a href="#">VIDEOS</a></li>
                        <li><a href="#">NEWS</a></li>
                        <li><a href="#">SHOP</a></li>
                    </ul>
                    <div class="input">
                        <input type="search" name="" id="" placeholder="Search">
                        <span><i class="fas fa-search"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <main>
        @yield('main')
    </main>

    <footer style="background-image: url({{ asset('img/footer-bg.jpg') }}); background-size: cover">
        <div class="top-footer text-light">
            <div class="container">
                <div class="wrap p-4">
                    <a href="#">
                        <img src="https://www.dccomics.com/sites/all/themes/dc_comics_bp/images/buy-bar-DCUI.svg"
                            height="55">
                        DIGITAL COMICS
                    </a>
                    <a href="#">
                        <img src="https://www.dccomics.com/sites/all/themes/dc_comics_bp/images/buy-bar-DCshop.svg"
                            height="55">
                        DC MERCHANDISE
                    </a>
                    <a href="#">
                        <img src="https://www.dccomics.com/sites/all/themes/dc_comics_bp/images/buy-bar-subscription.svg"
                            height="55">
                        PRINT SUBSCRIPTIONS
                    </a>
                    <a href="#">
                        <img src="https://www.dccomics.com/sites/all/themes/dc_comics_bp/images/buy-bar-locator.svg"
                            height="55">
                        COMIC SHOP LOCATOR
                    </a>
                </div>
            </div>
        </div>
        <div class="central-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 py-4">
                        <div class="menus d-flex justify-content-start">
                            <ul class="p-0">
                                <li class="title">DC COMICS</li>
                                <li><a href="#">Characters</a></li>
                                <li><a href="#">Comics</a></li>
                                <li><a href="#">Movies</a></li>
                                <li><a href="#">TV</a></li>
                                <li><a href="#">Games</a></li>
                                <li><a href="#">Videos</a></li>
                                <li><a href="#">News</a></li>
                                {{-- menu shop --}}
                                <li class="title shop"><a href="#">SHOP</a></li>
                                <li><a href="#">Shop DC</a></li>
                                <li><a href="#">Shop DC Collectibles</a></li>
                            </ul>
                            <ul>
                                <li class="title">DC</li>
                                <li><a href="#">Terms Of Use</a></li>
                                <li><a href="#">Privacy Policy (New)</a></li>
                                <li><a href="#">Advertising</a></li>
                                <li><a href="#">Jobs</a></li>
                                <li><a href="#">Subscriptions</a></li>
                                <li><a href="#">CPSC Certificates</a></li>
                                <li><a href="#">Ratings</a></li>
                                <li><a href="#">Shop Help</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                            <ul>
                                <li class="title">SITES</li>
                                <li><a href="#">DC</a></li>
                                <li><a href="#">DC UNIVERSE INFINITE</a></li>
                                <li><a href="#">DC Kids</a></li>
                                <li><a href="#">DC Shop</a></li>
                                <li><a href="#">MAD Magazine</a></li>
                            </ul>
                        </div>
                        <p class="mb-0">
                            All Site Content TM and © 2020 DC Entertainment, unless otherwise <a href="#">noted
                                here</a>. All rights
                            reserved. <a href="#">Cookie Settings</a>
                        </p>
                    </div>
                    <div class="col-md-6"
                        style="background-image: url({{ asset('img/logo-background-v2.png') }}); background-position: center; background-repeat: no-repeat; background-size: 80%">
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer py-4">
            <div class="container">
                <div class="d-flex justify-content-between">
                    <a href="#" class="sign-up">SIGN-UP NOW!</a>
                    <div class="d-flex align-items-center">
                        <span class="follow mr-2">FOLLOW US</span>
                        <div class="social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            <a href="#"><i class="fab fa-periscope"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
