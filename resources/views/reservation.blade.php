@extends('templates/app')

@section('content')
<div class="grid-p-reservation">
    <div class="reservation-box">
            <div class="reservation-container">
                <h1>Reservation</h1>
                <form method="POST" action="#">
                    @csrf
                    <div class="input-block">
                    <input type="text" name="last_name" placeholder="Nom" class="name">
                    @if($errors->has('last_name'))
                    <label class="error" for="last_name">Ce champ est incorect</label>
                    @endif
                    </div>

                    <div class="input-block" id="couvert">
                    <select name="person" class="couvert">
                        <option value="1">1 couvert</option>
                        <option value="2">2 couvert</option>
                        <option value="3">3 couvert</option>
                    </select>
                    @if($errors->has('person'))
                    <label class="error" for="person">Ce champ est incorect</label>
                    @endif
                    </div>

                    
                    <div class="input-block" id="date">
                    <input type="date" min="2022-03-18" name="date" id="date" class=" form-control" value="2022-04-01">
                    @if($errors->has('date'))
                    <label class="error" for="date">Ce champ est incorect</label>
                    @endif
                    </div>
                    

                    <div class="input-block" id="hour">
                    <input type="time" name="hour" id="heure" class=" form-control" value="18:00:00">
                    @if($errors->has('hour'))
                    <label class="error" for="hour">Ce champ est incorect</label>
                    @endif
                    </div>


                    <div class="input-block" id="phone">
                    <input type="text" name="phone" placeholder="Téléphone" class="tel">
                    @if($errors->has('phone'))
                    <label class="error" for="phone">Ce champ est incorect</label>
                    @endif
                    </div>
                    
                    <button class="cta-send">Envoyer</button>

                </form>
            </div>
        </div>

        <div class="hours-box">
            <div class="hours-container">
                <h1>Horraires</h1>

                @foreach($days as $day)
                <div class="days-container">
                    <div class="days">
                        <h2>{{ $day->day }}</h2>
                        @if($day->open == 1)
                        <div class="flex">
                            <p style="text-transform: lowercase;">{{ str_replace(":", "h", date('H:i', strtotime($day->hour_first))) }}</p>
                            <p>-</p>
                            <p style="text-transform: lowercase;">{{ str_replace(":", "h", date('H:i', strtotime($day->hour_end))) }}</p>
                        </div>
                        @else
                        <p class="close">Fermé</p>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        </div>
</div>
@endsection('content')