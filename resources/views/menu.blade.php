@extends('templates.app')

@section('content')

<div class="menu-container">
    <h1>{{ $categorie1->name }}</h1>
    <hr class="divider"></hr>
    @foreach($categorie1->items as $item)
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

<div class="menu-container">
    <h1>{{ $categorie2->name }}</h1>
    <hr class="divider"></hr>
    @foreach($categorie2->items as $item)
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
@endsection('content')