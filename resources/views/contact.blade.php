@extends('templates/app')

@section('content')
<div class="contact-grid">

    <div id="map">
    
    </div>

    
    <div class="contact-box">
        <div class="contact-container">
            <h1>Contactez Nous</h1>
            <form method="POST">
                @csrf
                <input type="text" name="first_name" placeholder="Nom" class="name">
                <input type="text" name="last_name" placeholder="Prénom" class="first-name">
                <input type="text" name="email" placeholder="Email" class="email">
                <input type="text" name="tel" placeholder="téléphone" class="tel">
                <textarea rows="6" placeholder="Message" name="message"></textarea>
                <button>Envoyer</button>

            </form>
        </div>
    </div>
    
        
</div>
@endsection('content')