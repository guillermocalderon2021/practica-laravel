<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function check(Request $request){
        $usuario=$request->input('usuario');
        $clave=$request->input('clave');
        $user=Usuario::find($usuario);
        if($user){
            if($user->password==hash('SHA256',$clave)){
                $request->session()->put('user',$user);
                return to_route('libros.index');
            }
        }

        return to_route('login')->with('message','Usuario y/o contraseña incorrecta');

    }

    public function logout(Request $request){
        $request->session()->flush();
        return to_route('login');
    }
}
