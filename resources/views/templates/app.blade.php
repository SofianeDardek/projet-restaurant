<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Test</title>
</head>
<body>
<header>
        <nav class="navigation">
            <a class="logo">Oburo</a>
            <ul class="menu">
                <li><a href="{{ route('home') }}">Accueil</a><div class="decoration"></div></li>
                <li><a href="{{ route('menu') }}">Menu</a><div class="decoration"></div></li>
                <li><a href="#Reservation">Reservation</a><div class="decoration"></div></li>
                <li><a href="#Contact">Contact</a><div class="decoration"></div></li>
            </ul>
        </nav>
        <button class="burger-menu">&#9776</button>
    </header>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        <div class="footer-container">
            <a href="Reserver" class="cta-set-aside">Réserver</a>
            <div>
                <p class="footer-contact">Accès/Contact</p>
                <div class="contact-underline"></div>
            </div>
            <div class="contact-addess">
                <p>Yaoundé, Ngoa-Ekellé Face cité universitaire</p>
                <p>653 988 066 / 698 253 094</p>
            </div>
        </div>
    </footer>
</body>
</html>