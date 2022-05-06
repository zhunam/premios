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

                    
                        <a href="{{ route('premios.create') }}">agregar premio</a>
                        
                        @foreach ($lista as $li)
                            <ul>
                                <li><a href="{{ route('premios.create', $li->id) }}">{{ $li->premio }}</a></li>
                            </ul>
                        @endforeach
                        <a href="{{ route('premios.index') }}">Ver premios registrados</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection