@extends('templates/admin')

@section('content')
<div class="container pt-3">
   
    @if(Session()->has('success'))
            <div class="alert alert-success">{{ Session()->get('success') }}</div>
    @endif
    
    <a class="btn btn-success" href="{{ route('admin.plat.create') }}">Ajouter un plat</a>
   
    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Plat</th>
        <th scope="col">Catégorie</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($plats as $plat)
        <tr>
            <th scope="row">{{ $plat->id }}</th>
            <td>{{ $plat->title }}</td>
            <td>{{ $plat->categorie->name }}</td>
            <td>
                <a href="{{ route('admin.plat.edit', ['plat' => $plat->id]) }}" class="btn btn-primary">Modifier</a>
                <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmDelete">Supprimer</a>
            </td>
        </tr>

              <!-- Modal -->
      <div class="modal fade" id="confirmDelete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Message important</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Êtes vous sûr de vouloir supprimer cette actualité?
            </div>
            <div class="modal-footer">
              <form method="POST" action="{{ route('admin.plat.delete', ['plat' => $plat->id]) }}">
                @csrf
              <input type="hidden" name="_method" value="delete">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
              <button type="submit" class="btn btn-warning">Confirmer</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
        @endforeach
    </tbody>
    </table>

</div>
@endsection('content')