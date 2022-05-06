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
                    <a href="{{ route('premios.edit', $premio) }}">Editar premio</a>
                    <h1>Premio :  {{ $premio->premio }} </h1>
                    <p><strong>nombre: </strong>{{ $premio->nombre }}</p>
                    <p><strong>apellido: </strong>{{ $premio->apellido }}</p>
                    <p><strong>direccion: </strong>{{ $premio->direccion }}</p>
                    <p><strong>telefono: </strong>{{ $premio->telefono }}</p>
                    <p><strong>email: </strong>{{ $premio->email }}</p>

                    <form action="{{ route('premios.destroy', $premio) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit">Eleminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection