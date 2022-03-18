@extends('adminlte::page')

@section('title', 'Protectora - Crear especie')

@section('content_header')
    <h1>Crear nueva especie</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.species.store']) !!}

                <div class="form-group">
                    {!! Form::label('name', 'Nombre') !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la especie']) !!}
                </div>
                @error('name')
                    <span class="text-danger">{{$message}}</span><br>
                @enderror
                
                {!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop