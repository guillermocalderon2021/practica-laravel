@extends('layout.template')
@section('content')
<div class="row">
    <div class="col-sm-4 col-sm-offset-4">
        <h2>Inicio de sesión</h2>
        
        

        <form method="post" action="{{route('login.check')}}">
           @csrf
            <div class="form-group">
                <label for="usuario">Usuario</label>
                <input type="text" class="form-control"  id="usuario" placeholder="Usuario" name="usuario" >
            </div>

            <div class="form-group">
                <label for="clave">Password:</label>
                <input type="password" class="form-control"  id="clave" placeholder="Password" name="clave" >
            </div>
            <div class="form-group">
                <button class="btn btn-lg btn-primary btn-block" name="enviar" type="submit">Iniciar sesión</button>
            </div>
        </form>
    </div>
</div>
@endsection