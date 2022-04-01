@extends('templates/admin')

@section('content')

<div class="container pt-3">
    <form method="POST" action="{{ route('admin.article.update', $article->id) }} ">
                                
        @csrf
        <input type="hidden" name="_method" value="put">
        @if(Session()->has('success'))
            <div class="alert alert-error">{{ Session()->get('success') }}</div>
        @endif

        @if(Session()->has('error'))
            <div class="alert alert-error">{{ Session()->get('error') }}</div>
        @endif

        @if($errors->any())
            @foreach($errors->all() as $error)
                <div class="alert alert-danger"><p>{{ error }} </p></div>
            @endforeach
        @endif

        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Titre</label>
        <input name="title" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Titre" value="{{ $article->title }}">
        </div>

        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Image</label>
        <input name="image" type="text" class="form-control" id="exampleFormControlInput1" placeholder="image" value="{{ $article->image->path }}">
        </div>

        <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
        <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $article->description }}</textarea>
        <div class="pt-3">
        <input type="submit" class="btn btn-primary" value="Valider">
        </div>
        </div>
    </form>
</div>
@endsection('content')