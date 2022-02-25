@extends('templates/app')

@section('content')
        <div class="home-grid">
                <div class="home-banner">
                    <img src="images/home.jpg">
                </div>

                @foreach($news as $new)
                <div class="news">
                    <div class="image-news">
                        <img src="{{ $new->image->path }}">
                    </div>
                    <div class="desc">
                        <h1>{{ $new->title }}</h1>
                        <span>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit, amet consectetur adipisicing elit.</span>
                    </div>
                </div>

                <!-- <div class="news">
                    <div class="image-news">
                        <img src="images/actu2.jpg">
                    </div>
                    <div class="desc">
                        <h1>Actu 2</h1>
                        <span>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit, amet consectetur adipisicing elit.</span>
                    </div>
                </div>

                <div class="news">
                    <div class="image-news">
                        <img src="images/actu1.jpg">
                    </div>
                    <div class="desc">
                        <h1>Actu 1</h1>
                        <span>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit, amet consectetur adipisicing elit.</span>
                    </div>
                </div> -->
                @endforeach

        </div>
@endsection('content')