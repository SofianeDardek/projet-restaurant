@extends('templates.admin')

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
        <label for="exampleFormControlInput1" class="form-label">Titre</label>
        <input name="title" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Titre">
        </div>

        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Image</label>
        <input name="image" type="text" class="form-control" id="exampleFormControlInput1" placeholder="image">
        </div>

        <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
        <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        <div class="pt-3">
        <input type="submit" class="btn btn-primary" value="Valider">
         <a href="{{ route('admin.articles') }}" class="btn btn-warning">Retour</a>
        </div>
        </div>
    </form>
</div>
@endsection('content')