@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12 col-md-10 mx-auto card p-5">
            <div class="row">
                <div class="col-12 col-md-12">
                    <h3>Nuevo Juego</h3>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <form method="POST" action="{{ route('game.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nombre del Juego</label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ old('name') }}">
                            @error('name')
                                <small class="text-danger"> {{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="status_id">Estado del Juego</label>
                            <select name="status_id" id="status_id" class="form-control">
                                @foreach ($statuses as $status)
                                    <option value="{{ $status->id }}">{{ $status->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Descripción</label>
                            <input type="text" class="form-control" id="description" name="description"
                                value="{{ old('description') }}">
                            @error('description')
                                <small class="text-danger"> {{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">URL del Juego</label>
                            <input type="text" class="form-control" id="url_game" name="url_game"
                                value="{{ old('url_game') }}">
                            @error('url_game')
                                <small class="text-danger"> {{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Imagen</label>
                            <input type="text" class="form-control" id="url_image" name="url_image"
                                value="{{ old('url_image') }}">
                            <input type="file" name="file" id="file" class="form-control mt-1">
                            @error('url_image')
                                <small class="text-danger"> {{ $message }}</small>
                            @enderror
                        </div>
                        <a href="{{ route('game.index') }}" class="btn btn-secondary">Volver</a>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
