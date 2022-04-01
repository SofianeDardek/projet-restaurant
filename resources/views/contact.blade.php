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
                <label class="error" for="fist_name">Ce champ est incorect</label>
                @endif
                </div>

                <div class="input-block">
                <input type="text" name="last_name" placeholder="Prénom" class="first-name">
                @if($errors->has('last_name'))
                <label class="error" for="last_name">Ce champ est incorect</label>
                @endif
                </div>

                <div class="input-block">
                <input type="text" name="email" placeholder="Email" class="email">
                @if($errors->has('email'))
                <label class="error" for="email">Ce champ est incorect</label>
                @endif
                </div>

                <div class="input-block">
                <input type="text" name="tel" placeholder="téléphone" class="tel">
                @if($errors->has('email'))
                <label class="error" for="email">Ce champ est incorect</label>
                @endif
                </div>

                <textarea rows="6" placeholder="Message" name="message"></textarea>
                <button class="cta-send">Envoyer</button>

            </form>
        </div>
    </div>
    
        
</div>

@endsection('content')