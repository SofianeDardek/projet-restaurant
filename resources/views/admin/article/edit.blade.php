@extends('templates/admin')

@section('content')

<div class="container pt-3">
    <form method="POST" action="">
        @csrf
        @if(Session()->has('success'))
            <div class="alert alert-success">{{ Session()->get('success') }}</div>
        @endif

        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Titre</label>
        <input name="title" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Titre" value="fff">
        </div>

        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Image</label>
        <input name="image" type="text" class="form-control" id="exampleFormControlInput1" placeholder="image" value="{{ $articleImage }}">
        </div>

        <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
        <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $articleDesc }}</textarea>
        <div class="pt-3">
        <input type="submit" class="btn btn-primary" value="Valider">
        </div>
        </div>
    </form>
</div>
@endsection('content')