@extends('layout.template')
@section('title','Nuevo libro')
@section('content')
<div class="row">
    <div class=" col-md-7">
        @if ($errors->all())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $err)
                        <li>{{$err}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
       <form role="form" action="{{route('libros.store')}}" method="POST">
       @csrf
        <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Campos requeridos</strong></div>
            <div class="form-group col-md-6">
                <label for="codigo">Codigo del libro:</label>
                <div class="input-group">
                    <input type="text" class="form-control" name="codigo_libro" value="{{old('codigo_libro')}}" id="codigo_libro" placeholder="Ingresa el codigo del libro" >
                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="nombre">Nombre del libro:</label>
                <div class="input-group">
                    <input type="text" class="form-control" name="nombre_libro" value="{{old('nombre_libro')}}" id="nombre_libro"  placeholder="Ingresa el nombre del libro"  >
                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="existencias">Existencias:</label>
                <div class="input-group">
                    <input type="number" class="form-control" id="existencias" value="{{old('existencias')}}" name="existencias"  placeholder="Ingresa las existencias del libro" >
                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="precio">Precio:</label>
                <div class="input-group">
                    <input type="number" step="0.01" class="form-control" id="precio" value="{{old('precio')}}" name="precio"  placeholder="Ingresa el precio del libro" >
                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="autor">Autor:</label>
                <div class="input-group">
                    <select id="codigo_autor" name="codigo_autor" class="form-control">
                        @foreach($autores as $autor)
                        <option value="{{$autor->codigo_autor}}" {{old('codigo_autor')==$autor->codigo_autor?'selected':''}}>{{$autor->nombre_autor}}</option>
                        @endforeach
                    </select>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="editorial">Editorial:</label>
                <div class="input-group">
                    <select id="codigo_editorial" name="codigo_editorial"  class="form-control">
                        @foreach($editoriales as $editorial)
                        <option value="{{$editorial->codigo_editorial}}" {{old('codigo_editorial')==$editorial->codigo_editorial?'selected':''}}>{{$editorial->nombre_editorial}}</option>
                        @endforeach
                    </select>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="genero">Genero:</label>
                <div class="input-group">
                    <select id="genero" name="genero" class="form-control">
                        @foreach($generos as $genero)
                        <option value="{{$genero->id_genero}}" {{old('genero')==$genero->id_genero?'selected':''}}>{{$genero->nombre_genero}}</option>
                        @endforeach
                    </select>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="descripcion">Descripcion:</label>
                <div class="input-group col-md-12">
                    <textarea class="form-control" name="descripcion">{{old('descripcion')}}</textarea>
                </div>
            </div>

            <input type="submit" class="btn btn-info" value="Guardar" name="Guardar">
            <a class="btn btn-danger" href="/Libros/index">Cancelar</a>
        </form>
    </div>
</div>  
 @endsection