@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12 col-md-12 card p-5">
            <div class="row">
                <div class="col-12 col-md-10">
                    <h3>
                        Mantenedor de Juegos
                    </h3>
                </div>
                <div class="col-12 col-md-2">
                    <a href="{{ route('game.create') }}" class="btn btn-info text-white">
                        Nuevo
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Status</th>
                                <th scope="col">URL Game</th>
                                <th scope="col">Image</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($games as $game)
                                <tr class="align-middle">
                                    <td scope="row">{{ $game->id }}</td>
                                    <td>{{ $game->name }}</td>
                                    <td>{{ $game->description }}</td>
                                    <td>{{ $game->status->name }}</td>
                                    <td><a href="{{ $game->url_game }}" target="_blank">{{ $game->name }}</a></td>
                                    <td><img src="{{ $game->url_image }}" alt="" class="thumbnail"></td>
                                    <td>
                                        <form action="{{ route('game.destroy', $game->id) }}" method="POST"
                                            id="delete-{{ $game->id }}">
                                            @method('DELETE')
                                            @csrf
                                            <a href="{{ route('game.show', $game->id) }}" class="btn" title="Ver game">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="{{ route('game.edit', $game->id) }}" class="btn text-info"
                                                title="Editar game">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a onclick="eliminar('{{ $game->id }}')" class="btn text-danger m-1"
                                                title="Eliminar game">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        function eliminar(id) {
            Swal.fire({
                title: `¿Está seguro de que desea eliminar el Juego?`,
                text: `¡No podrás revertir esto!`,
                icon: `warning`,
                showCancelButton: true,
                confirmButtonColor: `#3085d6`,
                cancelButtonColor: `#d33`,
                confirmButtonText: `¡Si, eliminar!`,
                cancelButtonText: `Cancelar`
            }).then((result) => {
                if (result.isConfirmed) {
                    let form = document.getElementById('delete-' + id);
                    form.submit();
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    Swal.fire(
                        'Cancelado',
                        'No se han realizado cambios.',
                        'error'
                    )
                }
            })
        }
    </script>
@endsection
