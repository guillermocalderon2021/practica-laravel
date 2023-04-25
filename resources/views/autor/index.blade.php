

@extends('layout.template')

@section('title','Lista de autores')

@section('content')
    @if ($autores)
    <table class="table table-condensed table-bordered">
        <tr>
            <th>Codigo</th>
            <th>Nombre</th>
            <th>Nacionalidad</th>
            <th>Operaciones</th>
        </tr>
        @foreach ($autores as $autor)
        <tr>
            <td>{{$autor->codigo_autor}}</td>
            <td>{{$autor->nombre_autor}}</td>
            <td>{{$autor->nacionalidad}}</td>
            <td><a class="btn btn-success" href="/autores/{{$autor->codigo_autor}}/edit">Modificar</a></td>
        </tr>
        @endforeach
    </table>
    @endif 
@endsection
