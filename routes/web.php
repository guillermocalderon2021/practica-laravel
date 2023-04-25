<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EditorialController;
use App\Http\Controllers\AutorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
/*
Route::get('/hello', function(){
    return view('hello');
});*/

Route::view('/hello', 'hello');

Route::get('/hello/{nombre}', function($nombre){
    return "Hola $nombre";
});

Route::get('/editoriales',
    [EditorialController::class,'index']);
Route::get('/editoriales/create',
    [EditorialController::class,'create']);    
Route::get('/editoriales/details/{id}',
    [EditorialController::class,'details']);

Route::resource('autores', AutorController::class);