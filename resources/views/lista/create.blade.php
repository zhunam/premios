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

                    
                    <h1>Agregar Premio</h1>
                    <form action="{{ route('lista.store') }}" method="POST">
                        @csrf
                        <label for="premio">
                            Nombre: 
                            <input type="text" name="premio" id="premio" value="{{ old('premio') }}">
                        </label>
                        @error('premio')
                            <br>
                            <small>*{{ $message }}</small>
                        @enderror
                        
                        <br>
                        <button type="submit">agregar Premio</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection