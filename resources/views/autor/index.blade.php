@extends('layout.template')
@section('title','Lista de autores')
@section('content')
<a class="btn btn-success mb-3" href="{{route('autores.create')}}">Nuevo autor</a>
<br><br>    
<table class="table table-bordered">
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
                <td><a class="btn btn-primary" href="{{route('autores.edit',$autor->codigo_autor)}}">Editar</a></td>
            </tr>
        @endforeach
    </table>
@endsection
    
