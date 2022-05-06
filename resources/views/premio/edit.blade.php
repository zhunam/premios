@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>Editar Premio</h1>
                    <form action="{{ route('premios.update', $premio) }}" method="POST">
                        @csrf
                        @method('put')
                        <label for="nombre">
                            Nombre: 
                            <input type="text" name="nombre" id="nombre" value="{{ old('nombre', $premio->nombre) }}">
                        </label>
                        @error('nombre')
                            <br>
                            <small>*{{ $message }}</small>
                        @enderror
                        <br>
                        <label for="apellido">
                            Apellido: 
                            <input type="text" name="apellido" id="apellido" value="{{ old('apellido', $premio->apellido) }}">
                        </label>
                        @error('apellido')
                            <br>
                            <small>*{{ $message }}</small>
                        @enderror
                        <br><label for="direccion">
                            Direccion: 
                            <input type="text" name="direccion" id="direccion" value="{{ old('direccion', $premio->direccion) }}">
                        </label>
                        @error('direccion')
                            <br>
                            <small>*{{ $message }}</small>
                        @enderror
                        <br><label for="telefono">
                            Telefono: 
                            <input type="number" name="telefono" id="telefono" value="{{ old('telefono', $premio->telefono) }}">
                        </label>
                        @error('telefono')
                            <br>
                            <small>*{{ $message }}</small>
                        @enderror
                        <br><label for="email">
                            Email: 
                            <input type="email" name="email" id="email" value="{{ old('email', $premio->email) }}">
                        </label>
                        @error('email')
                            <br>
                            <small>*{{ $message }}</small>
                        @enderror
                        <input type="text" name="premio" id="premio" value="{{ $premio->premio }}" hidden>

                        <br>
                        <button type="submit">Editar Premio</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection