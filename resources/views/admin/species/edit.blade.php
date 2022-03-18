@extends('adminlte::page')

@section('title', 'Mi blog')

@section('content_header')
    <h1>Editar especie</h1>
@stop

@section('content')   
    <div class="card">
        <div class="card-body">
            {!! Form::model($specie, ['route' => ['admin.species.update', $specie], 'method' => 'PUT']) !!}

                <div class="form-group">
                    {!! Form::label('name', 'Nombre') !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la especie']) !!}
                </div>
                @error('name')
                    <span class="text-danger">{{$message}}</span><br>
                @enderror

                {!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop