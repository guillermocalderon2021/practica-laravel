<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EditorialControllerApi;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/hola', function () {
    return "Hola";
});

Route::get('/editoriales',
    [EditorialControllerApi::class,'index']);

Route::get('/editoriales/{id}',
    [EditorialControllerApi::class,'show']);

Route::post('/editoriales',
    [EditorialControllerApi::class,'store']);

Route::put('/editoriales/{id}',
    [EditorialControllerApi::class,'update']);

Route::delete('/editoriales/{id}',
    [EditorialControllerApi::class,'destroy']);


