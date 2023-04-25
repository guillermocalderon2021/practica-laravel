@extends('layout.template')
@section('title','Detalles de un editorial')
@section('content')
    <h3>Detalles del editorial con id {{$id}}</h3>
    @if ($id>0)
    <h5>El id es mayor que cero</h5>
    @else
    <h5>El id NO es mayor que cero</h5>
    @endif
@endsection
