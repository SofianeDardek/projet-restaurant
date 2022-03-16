@extends('templates/app')

@section('content')
<div class="contact-box">
        <div class="contact-container">
            <h1>Reservationd</h1>
            <form method="POST" action="#">
                @csrf
                <div class="input-block">
                <input type="text" name="first_name" placeholder="Nom" class="name">
                <!-- @if($errors->has('first_name'))
                <label class="error" for="fist_name">Veuillez remplir ce champ</label>
                @endif -->
                </div>

                <div class="input-block">
                <input type="text" name="last_name" placeholder="Prénom" class="first-name">
                <!-- @if($errors->has('last_name'))
                <label class="error" for="last_name">Veuillez remplir ce champ</label>
                @endif -->
                </div>

                <div class="input-block">
                <input type="text" name="email" placeholder="Email" class="email">
           
    
     
                </div>


                <input type="text" name="tel" placeholder="téléphone" class="tel">
                <textarea rows="6" placeholder="Message" name="message"></textarea>
                <button class="cta-send">Envoyer</button>

            </form>
        </div>
    </div>
@endsection('content')