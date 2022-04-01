@extends('templates/admin')

@section('content')
<div class="container">
    <h1>Configuration de base</h1>
    <hr>

    <div class="row">
        <div class="col-md-5">
            <form method="POST">
                @csrf
                @method('PUT')
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
                    <label for="exampleInputEmail1" class="form-label">Adresse email</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $info->email }}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Adresse</label>
                    <input name="adress" type="text" class="form-control" id="exampleInputPassword1" value="{{ $info->adress }}">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Télephone</label>
                    <input name="phone" type="text" class="form-control" id="phone" value="{{ $info->phone_number }}">
                </div>
                <button type="submit" class="btn btn-primary">Valider</button>
            </form>
     </div>
   </div>
</div>
@endsection('content')