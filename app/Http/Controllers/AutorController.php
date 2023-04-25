<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use Illuminate\Http\Request;

class AutorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $autores=Autor::get();
        return view('autor.index',compact('autores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('autor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'codigo_autor'=>['required'],
            'nombre_autor'=>['required'],
            'nacionalidad'=>['required']
        ]);
        $autor=new Autor();
        $autor->codigo_autor=$request->input('codigo_autor');
        $autor->nombre_autor=$request->input('nombre_autor');
        $autor->nacionalidad=$request->input('nacionalidad');
        $autor->save();
        return to_route('autores.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Autor $autor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Autor $autore)
    {
        
        return view('autor.edit',compact('autore'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Autor $autore)
    {
        $request->validate([
            'nombre_autor'=>['required'],
            'nacionalidad'=>['required']
        ]);

        $autore->nombre_autor=$request->input('nombre_autor');
        $autore->nacionalidad=$request->input('nacionalidad');
        $autore->save();
        return to_route('autores.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Autor $autor)
    {
        //
    }
}
