@extends('adminlte::page')

@section('title', 'Panel adminsitrador - Especies')

@section('content_header')
    <h1>Lista de especies</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success"><strong>{{session('info')}}</strong></div>    
    @endif

    <div class="card">
        <div class="card-header">
            <a href="{{route('admin.species.create')}}" class="btn btn-primary">Nueva especie</a>
        </div>    

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($species as $specie)
                        <tr>
                            <td>{{$specie->id}}</td>
                            <td>{{$specie->name}}</td>
                            
                            <td width="10px">
                                <a class="btn btn-primary btn-sm" href="{{route('admin.species.edit', $specie)}}">Editar</a></td>    
                            <td width="10px">
                                <form action="{{route('admin.species.destroy', $specie)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>                                    
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop