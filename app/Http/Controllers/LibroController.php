<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use App\Models\Editorial;
use App\Models\Autor;
use App\Models\Genero;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $libros=Libro::with('Autor','Editorial','Genero')->get();
        return view('libro.index',compact('libros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $autores=Autor::get();
        $editoriales=Editorial::get();
        $generos=Genero::get();
        return view('libro.create',compact('autores','editoriales','generos'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'codigo_libro'=>['required','regex:/^LIB[0-9]{6}$/'],
            'nombre_libro'=>['required'],
            'precio'=>['required','numeric','min:0'],
            'existencias'=>['required','numeric','min:0'],
            'codigo_autor'=>['required'],
            'codigo_editorial'=>['required'],
            'genero'=>['required']

        ],[
            'codigo_libro.regex'=>'The book code should be LIB#####'
        ]);

        $libro=new Libro();
        $libro->codigo_libro=$request->input('codigo_libro');
        $libro->nombre_libro=$request->input('nombre_libro');
        $libro->precio=$request->input('precio');
        $libro->existencias=$request->input('existencias');
        $libro->codigo_autor=$request->input('codigo_autor');
        $libro->codigo_editorial=$request->input('codigo_editorial');
        $libro->id_genero=$request->input('genero');
        $libro->descripcion=$request->input('descripcion');
        if($libro->save()){
            return to_route('libros.index')->with('success','Libro creado exitosamente');
        }






    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $libro=Libro::with('Editorial','Genero','Autor')->find($id);
        return $libro;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Libro $libro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Libro $libro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Libro $libro)
    {
        //
    }
}
