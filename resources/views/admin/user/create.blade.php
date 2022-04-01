@extends('templates/admin')

@section('content')
<div class="container">
    <h1>Ajouter un utilisateur</h1>
    <hr>

    <div class="row">
        <div class="col-5">
            <form method="POST">
                @csrf
                @if($errors->any())
                    <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                    </div>
                @endif

                @if(Session()->has('success'))
                    <div class="alert alert-success">
                        <p>{{ Session()->get('success') }} </p>
                    </div>
                @endif
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nom</label>
                    <input name="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Email</label>
                    <input name="email" type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Mot de passe</label>
                    <input name="password" type="text" class="form-control" id="password">
                </div>
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>
        </div>
    </div>
</div>
@endsection('content')