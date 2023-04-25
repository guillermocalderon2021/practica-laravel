<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EditorialController extends Controller
{
    public function index(){
        $viewBag=array();
        $viewBag['editoriales']=DB::table('editoriales')->get();
        return view('editorial.index',$viewBag);
    }

    public function indexApi(){
        
        $editoriales=DB::table('editoriales')->get();
        return $editoriales;
    }


    public function create(){
        return view('editorial.create');
    }

    public function details($id){
        $viewBag=array();
        $viewBag['id']=$id;
        return view('editorial.details',$viewBag);
    }
}
