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

                    
                    <h1>Registrar Premio</h1>
                    <form action="{{ route('premios.store') }}" method="POST">
                        @csrf
                        <label for="nombre">
                            Nombre: 
                            <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}">
                        </label>
                        @error('nombre')
                            <br>
                            <small>*{{ $message }}</small>
                        @enderror
                        <br>
                        <label for="apellido">
                            Apellido: 
                            <input type="text" name="apellido" id="apellido" value="{{ old('apellido') }}">
                        </label>
                        @error('apellido')
                            <br>
                            <small>*{{ $message }}</small>
                        @enderror
                        <br><label for="direccion">
                            Direccion: 
                            <input type="text" name="direccion" id="direccion" value="{{ old('direccion') }}">
                        </label>
                        @error('direccion')
                            <br>
                            <small>*{{ $message }}</small>
                        @enderror
                        <br><label for="telefono">
                            Telefono: 
                            <input type="number" name="telefono" id="telefono" value="{{ old('telefono') }}">
                        </label>
                        @error('telefono')
                            <br>
                            <small>*{{ $message }}</small>
                        @enderror
                        <br><label for="email">
                            Email: 
                            <input type="email" name="email" id="email" value="{{ old('email') }}">
                        </label>
                        @error('email')
                            <br>
                            <small>*{{ $message }}</small>
                        @enderror
                        <input type="text" name="premio" id="premio" value="{{ $request->premio }}" hidden>
                        <br>
                        <button type="submit">Registrar Premio</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection