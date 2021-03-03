<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <ul class="top-nav bg-primary">
        <li class="bg-white">
            <a href="#">
                <img src="https://www.dccomics.com/sites/all/themes/dc_comics_bp/images/DC_desktop_blue.svg">
            </a>
        </li>
        <li>
            <a href="#">
                Admin
            </a>
        </li>
    </ul>

    <nav>
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto px-2 d-flex justify-content-between align-items-center">
                    <img src="https://www.dccomics.com/sites/all/themes/dc_comics_bp/logo.png" height="81">
                    <ul class="text-dark d-flex font-weight-bold align-items-center justify-content-between">
                        <li><a href="#">CHARACTERS</a></li>
                        <li><a href="#">COMICS</a></li>
                        <li><a href="#">MOVIES</a></li>
                        <li><a href="#">TV</a></li>
                        <li><a href="#">GAMES</a></li>
                        <li><a href="#">VIDEOS</a></li>
                        <li><a href="#">NEWS</a></li>
                        <li><a href="#">SHOP</a></li>
                    </ul>
                    <input type="search" name="" id="" value="Search">
                </div>
            </div>
        </div>
    </nav>

    <main>
        @yield('main')
    </main>

    <footer>
        <div class="top-footer">
            top
        </div>
        <div class="central-footer">
            central with bgs
        </div>
        <div class="bottom-footer">
            parte bottom
        </div>
    </footer>
</body>

</html>
