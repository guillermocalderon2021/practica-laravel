<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EditorialController;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\LoginController;
use App\Http\Middleware\AuthCheck;
use App\Http\Middleware\OnlyAdmin;

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

Route::resource('autores', AutorController::class)->middleware(AuthCheck::class);
Route::resource('libros', LibroController::class)->middleware(AuthCheck::class);

Route::get('/editoriales',[EditorialController::class,'index'])->name('editoriales.index')->middleware(OnlyAdmin::class);
Route::get('/editoriales/create',[EditorialController::class,'create'])->name('editoriales.create')->middleware(OnlyAdmin::class);    
Route::get('/editoriales/details/{id}', [EditorialController::class,'details'])->name('editoriales.details')->middleware(OnlyAdmin::class);


Route::get('/login',[LoginController::class,'index'])->name('login');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');
Route::post('/login',[LoginController::class,'check'])->name('login.check');