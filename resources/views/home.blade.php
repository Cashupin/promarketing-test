@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12 col-md-8 mx-auto text-center">
            <h1 class="text-white">
                Juegos Disponibles
            </h1>
        </div>

    </div>
    <div class="row">
        @foreach ($games as $game)
            <div class="col-12 col-md-4 p-1">
                <div class="card">
                    <div class="card-header">
                        {{ $game->name }}
                    </div>
                    <img src="{{ $game->url_image }}" alt="{{ $game->name }}" class="thumbnail">
                    <a href="{{ $game->url_game }}" target="_blank" class="btn btn-primary btn-block">Ir al Juego</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
