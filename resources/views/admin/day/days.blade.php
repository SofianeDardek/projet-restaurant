@extends('templates.admin')

@section('content')
<div class="container">

    <div class="row mt-5">
           <div class="col-md-12">
                <h1>Les horaires</h1>
                        <hr>
    
                        <a class="btn btn-success" href="{{ route('admin.day.create') }}">Ajouter une horraire</a>
            
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Jours</th>
                    <th scope="col">Heure de départ</th>
                    <th scope="col">Heure de fin</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($days as $day)
                    <tr>
                        <th scope="row">{{ $day->id }}</th>
                        <td>{{ $day->day }}</td>
                        <td>{{ str_replace(':', 'h', date("H:i", strtotime($day->hour_first))) }}</td>
                        <td>{{ str_replace(':', 'h', date("H:i", strtotime($day->hour_end))) }}</td>
                        <td>
                            <a href="{{ route('admin.day.edit', ['day' => $day->id]) }}" class="btn btn-primary">Modifier</a>
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
                            Êtes vous sûr de vouloir supprimer cette horraire?
                        </div>
                        <div class="modal-footer">
                            <form method="POST" action="{{ route('admin.day.delete', ['day' => $day->id]) }}">
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
       </div>
</div>
   @endsection('content')