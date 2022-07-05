@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12 col-md-10 mx-auto card p-5">
            <div class="row">
                <div class="col-12 col-md-12">
                    <h3>Editar Estado</h3>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nombre del Juego</label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ $game->name }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Descripcion</label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ $game->description }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Estado</label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ $game->status->name }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">URL del Juego</label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ $game->url_game }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">URL de la Imagen</label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ $game->url_image }}" disabled>
                            <img src="{{ $game->url_image }}" class="thumbnail mt-2" alt="">
                        </div>
                        <a href="{{ route('game.index') }}" class="btn btn-secondary">Volver</a>
                    </form>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-12 col-12">
                    <h3>Vista previa del Juego</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <iframe src="{{ $game->url_game }}" width="100%" height="500px" frameborder="0"></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection
