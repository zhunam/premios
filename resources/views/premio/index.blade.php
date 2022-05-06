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

                    
                        
                          
                        <table>
                            <thead>
                                <tr>
                                    <th>premio</th>
                                    <th>nombre</th>
                                    <th>apellido</th>
                                    <th>direccion</th>
                                    <th>telefono</th>
                                    <th>email</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($premios as $premio)
                                <tr>
                                    <td>{{ $premio->premio }}</td>
                                    <td>{{ $premio->nombre }}</td>
                                    <td>{{ $premio->apellido }}</td>
                                    <td>{{ $premio->direccion }}</td>
                                    <td>{{ $premio->telefono }}</td>
                                    <td>{{ $premio->email }}</td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        
                        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection