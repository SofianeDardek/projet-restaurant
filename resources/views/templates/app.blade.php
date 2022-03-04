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
            <a class="logo"><img src="{{ asset('images/logo/logo.png') }}"></a>
            <ul class="menu">
                <li><a href="{{ route('home') }}">Accueil</a><div class="{{ Route::is('home') ? 'decoration active' : 'decoration' }}"></div></li>
                <li><a href="{{ route('menu') }}">Menu</a><div class="{{ Route::is('menu') ? 'decoration active' : 'decoration' }}"></div></li>
                <li><a href="{{ route('reservation') }}">Reservation</a><div class="{{ Route::is('reservation') ? 'decoration active' : 'decoration' }}"></div></li>
                <li><a href="{{ route('contact') }}">Contact</a><div class="{{ Route::is('contact') ? 'decoration active' : 'decoration' }}"></div></li>
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
    <script src="{{asset('js/app.js')}}"></script>
    <script>
        let map = L.map('map').setView([3.854213494326459, 11.50114188187485], 15);

    L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        minZoom: 10,
        maxZoom: 20,
        id: 'mapbox/streets-v11',
        accessToken: 'your.mapbox.access.token'
    }).addTo(map);

    let marker = L.marker([3.854213494326459, 11.50114188187485]).addTo(map);
    marker.bindPopup('<b>Oburo</b>');
    </script>
</body>
</html>