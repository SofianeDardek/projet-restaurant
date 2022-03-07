@extends('templates/app')

@section('content')
<div class="contact-grid">

    <div id="map">
    
    </div>

    <div class="contact-box">
        <div class="contact-container">
            <h1>Contactez Nous</h1>
            <form method="POST" action="#">
                @csrf
                <div class="input-block">
                <input type="text" name="first_name" placeholder="Nom" class="name">
                @if($errors->has('first_name'))
                <label class="error" for="fist_name">Veuillez remplir ce champ</label>
                @endif
                </div>

                <div class="input-block">
                <input type="text" name="last_name" placeholder="Prénom" class="first-name">
                @if($errors->has('last_name'))
                <label class="error" for="last_name">Veuillez remplir ce champ</label>
                @endif
                </div>

                <div class="input-block">
                <input type="text" name="email" placeholder="Email" class="email">
                @if($errors->has('email'))
                <label class="error" for="email">Veuillez remplir ce champ</label>
                @endif
                </div>


                <input type="text" name="tel" placeholder="téléphone" class="tel">
                <textarea rows="6" placeholder="Message" name="message"></textarea>
                <button class="cta-send">Envoyer</button>

            </form>
        </div>
    </div>
    
        
</div>

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
@endsection('content')