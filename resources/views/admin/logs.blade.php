@extends('templates/admin')

@section('content')
<div class="container">
    <div class="pt-3">
    @if(Session()->has('success'))
            <div class="alert alert-success">{{ Session()->get('success') }}</div>
        @endif
        <a class="btn btn-success" href="{{ route('admin.user.create') }}">Ajouter un article</a>
    </div>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Utilisateur</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($logs as $log)
        <tr>
            <th scope="row">{{ $log->id }}</th>
            <td>{{ $log->user->name }}</td>
            <td>{{ $log->action }}</td>
        </tr>
    @endforeach
    </tbody>
    </table>

</div>
@endsection('content')