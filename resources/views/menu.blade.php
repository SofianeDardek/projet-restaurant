@extends('templates.app')

@section('content')

@foreach($categories as $categorie)
<div class="menu-container">
    <h1>{{$categorie->name}}</h1>
    <hr class="divider"></hr>
    @foreach($categorie->items as $item)
    <div class="box">
        <div class="image">
            <img src="{{ $item->path }}" alt="">
        </div>
        <div class="text">
            <span class="item-name">{{ $item->title }}</span>
            <span class="cost">{{ $item->price }} €</span>
        </div>
    </div>
@endforeach
</div>
    @endforeach
@endsection('content')