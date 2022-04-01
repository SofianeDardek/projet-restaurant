@extends('templates.admin')

@section('content')

<div class="container pt-3">
    <form method="POST" action="">
        @csrf
        @if(Session()->has('success'))
            <div class="alert alert-success">{{ Session()->get('success') }}</div>
        @endif
        @error('name')
         <div class="alert alert-danger">{{ $message }}</div>
         @enderror

        <div class="mb-3 col-md-4">
        <label for="exampleFormControlInput1" class="form-label">Nom de la catégorie</label>
        <input name="name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
        </div>


        <div class="pt-0">
        <input type="submit" class="btn btn-primary" value="Valider">
         <a href="{{ route('admin.categorie') }}" class="btn btn-warning">Retour</a>
        </div>

    </form>
</div>
@endsection('content')