@extends('templates/admin')

@section('content')

<div class="container pt-3">
    <form method="POST" action="">
        @csrf
        @if(Session()->has('success'))
            <div class="alert alert-success">{{ Session()->get('success') }}</div>
        @endif

        @if ($errors->any())
        <div class="alert alert-danger">
     @foreach ($errors->all() as $error)
         <p>{{$error}}</p>
     @endforeach
     </div>
 @endif

        <div class="mb-3">
        <label for="title" class="form-label">Titre</label>
        <input name="title" type="text" class="form-control" id="title" placeholder="Titre">
        </div>

        <div class="mb-3">
        <label for="categorie" class="form-label">Categorie</label>
        <select name="cate" class="form-control" id="categorie">
            <option value=""></option>
                @foreach($categories as $categorie)
            <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                @endforeach
        </select>
        </div>       

        <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <input name="image" type="text" class="form-control" id="image" placeholder="image">
        </div>

        <div class="mb-3">
        <label for="price" class="form-label">Prix</label>
        <input name="price" type="text" class="form-control" id="price" placeholder="prix">
        </div>


        <input type="submit" class="btn btn-primary" value="Valider">
         <a href="{{ route('admin.plat') }}" class="btn btn-warning">Retour</a>
        </div>
        </div>
    </form>
</div>
@endsection('content')