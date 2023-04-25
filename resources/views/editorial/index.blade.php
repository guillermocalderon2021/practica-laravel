

@extends('layout.template2')

@section('title','Lista de editoriales')

@section('content')
    <h3>Lista de editoriales</h3>
    @if ($editoriales)
    <table>
        <tr>
            <th>Codigo</th>
            <th>Nombre</th>
            <th>Contacto</th>
            <th>Telefono</th>
        </tr>
        @foreach ($editoriales as $editorial)
        <tr>
            <td>{{$editorial->codigo_editorial}}</td>
            <td>{{$editorial->nombre_editorial}}</td>
            <td>{{$editorial->contacto}}</td>
            <td>{{$editorial->telefono}}</td>
        </tr>
        @endforeach
    </table>
    @endif 
@endsection

    
