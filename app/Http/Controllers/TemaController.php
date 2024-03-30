<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tema;

class TemaController extends Controller
{
    public function index(){
        $temas =  tema::orderBy('id', 'desc')->get();
       
        return view('temas.listartema', compact('temas'));
    }

    public function create(){
        return view('temas.create');
    }

    public function store(Request $request){
        $tema = new tema();
        $tema->nombre_tema= $request->nombre_tema;
        
        // $file=$request->file("urlPdf");
        // $nombreArchivo = "pdf_".time().".".$file->guessExtension();
        // $request->file('urlPdf')->storeAs('public/imagenes', $nombreArchivo );
        // $usuario->urlPdf = $nombreArchivo;
        $tema->save();
        $temas = tema::all();
        
        return redirect()->route('temas.index', compact('temas'));
        // return view('usuarios.show', compact('usuario'));
    }
    public function show(tema $tema){
        //$temp=Curso::find($curso);
       return view('temas.show',compact('tema'));
     }

     public function destroy (tema $tema){
      $tema->delete();
      return redirect()->route('temas.index');
       
     }


    // public function show(){
    //     return view('usuarios.show');
    // }
}
