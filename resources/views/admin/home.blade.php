@extends('templates/admin')

@section('content')
<div class="container">
    <h1>Configuration de base</h1>
    <hr>

    <div class="row">
        <div class="col-5">
            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Adresse email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Adresse</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Télephone</label>
                    <input type="password" class="form-control" id="phone">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
  
    </div>
</div>
@endsection('content')