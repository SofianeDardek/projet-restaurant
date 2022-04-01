<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" 
    integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw=="
     crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Test</title>
</head>
<body>
<header>
        <nav class="navigation">
            <a href="{{ route('home') }}"><div class="logo"></div></a>
            <ul class="menu">
                <li><a href="{{ route('home') }}">Accueil</a><div class="{{ Route::is('home') ? 'decoration active' : 'decoration' }}"></div></li>
                <li><a href="{{ route('menu') }}">Menu</a><div class="{{ Route::is('menu') ? 'decoration active' : 'decoration' }}"></div></li>
                <li><a href="{{ route('reservation') }}">Reservation</a><div class="{{ Route::is('reservation') ? 'decoration active' : 'decoration' }}"></div></li>
                <li><a href="{{ route('contact') }}">Contact</a><div class="{{ Route::is('contact') ? 'decoration active' : 'decoration' }}"></div></li>
            </ul>
            <div class="toggle">
                    <!-- <i class="fa-solid fa-bars burger-menu"></i> -->
                    <button onclick="open()"class="burger-menu">&#9776</button>
                </div>
        </nav>
        
    </header>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        <div class="footer-container">
            <a href="{{ route('reservation') }}" class="btn-transparent">Réserver</a>
            <div>
                <p class="footer-contact">Accès/Contact</p>
                <div class="contact-underline"></div>
            </div>
            <div class="contact-addess">
                <p>Yaoundé, Ngoa-Ekellé Face cité universitaire</p>
                <p>653 988 066 / 698 253 094</p>
            </div>
            <div class="social">
                <img src="{{ asset('/images/social/fb.svg') }}">
            </div>
        </div>
    </footer>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>