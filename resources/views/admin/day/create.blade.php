@extends('templates.admin')

@section('content')

<div class="container pt-3">
    <form method="POST" action="">
        @csrf
        @if(Session()->has('success'))
            <div class="alert alert-success">{{ Session()->get('success') }}</div>
        @endif

        @if($errors->any())
         <div class="alert alert-danger">
             @foreach($errors->all() as $error)
             <p>{{ $error }}</p>
             @endforeach
        </div>
        @endif

        <div class="mb-3">
        <label for="day" class="form-label">Jours de la semaine</label>
        <select name="day" class="form-select" id="">
            <option value="lundi">Lundi</option>
            <option value="mardi">Mardi</option>
            <option value="mercredi">Mercredi</option>
            <option value="jeudi">Jeudi</option>
            <option value="vendredi">Vendredi</option>
            <option value="samedi">Samedi</option>
            <option value="dimanche">Dimanche</option>
        </select>
        </div>

        <div class="mb-3">
        <label for="open" class="form-label">Jours de la semaine</label>
        <select name="open" class="form-select" id="">
            <option value="1">Ouvert</option>
            <option value="0">Fermé</option>
        </select>
        </div>

        <div class="mb-3">
        <label for="hour_start" class="form-label">Ouverture à</label>
        <input name="hour_start" type="time" class="form-control">
        </div>

        <div class="mb-3">
        <label for="hour_end" class="form-label">Fermeture à</label>
        <input name="hour_end" type="time" class="form-control">
        </div>


        <div class="pt-3">
            <input type="submit" class="btn btn-primary" value="Valider">
            <a href="{{ route('admin.days') }}" class="btn btn-warning">Retour</a>
        </div>
    </form>
</div>
@endsection('content')