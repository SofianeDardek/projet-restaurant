@extends('templates/admin')

@section('content')
<div class="container">
    <div class="pt-3">
        <a class="btn btn-success" href="{{ route('article.create') }}">Ajouter un article</a>
    </div>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Actualité</th>
        <th scope="col">Date</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($news as $new)
        <tr>
            <th scope="row">{{ $new->id }}</th>
            <td>{{ $new->title }}</td>
            <td>Otto</td>
            <td>
                <a class="btn btn-primary">Modifier</a>
                <a class="btn btn-danger">Supprimer</a>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>
@endsection('content')