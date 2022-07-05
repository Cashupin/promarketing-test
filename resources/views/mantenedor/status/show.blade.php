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
                            <label for="name" class="form-label">Nombre del Estado</label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ $status->name }}" disabled>
                            @error('name')
                                <small class="text-danger"> {{ $message }}</small>
                            @enderror
                        </div>
                        <a href="{{ route('status.index') }}" class="btn btn-secondary">Volver</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
