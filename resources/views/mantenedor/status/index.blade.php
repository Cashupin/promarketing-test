@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12 col-md-12 card p-5">
            <div class="row">
                <div class="col-12 col-md-10">
                    <h3>
                        Mantenedor de Estados
                    </h3>
                </div>
                <div class="col-12 col-md-2">
                    <a href="{{ route('status.create') }}" class="btn btn-info text-white">
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
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($statuses as $status)
                                <tr>
                                    <td scope="row">{{ $status->id }}</td>
                                    <td>{{ $status->name }}</td>
                                    <td>
                                        <form action="{{ route('status.destroy', $status->id) }}" method="POST"
                                            id="delete-{{ $status->id }}">
                                            @method('DELETE')
                                            @csrf
                                            <a href="{{ route('status.show', $status->id) }}" class="btn" title="Ver Status">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="{{ route('status.edit', $status->id) }}" class="btn text-info"
                                                title="Editar Status">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a onclick="eliminar('{{ $status->id }}')" class="btn text-danger m-1"
                                                title="Eliminar Status">
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
                title: `¿Está seguro de que desea eliminar el Estado?`,
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
