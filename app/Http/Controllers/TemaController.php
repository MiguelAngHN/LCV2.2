<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tema;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;

class TemaController extends Controller
{
    // public function index(){
    //     $temas =  tema::orderBy('id', 'desc')->get();
       
    //     return view('temas.listartema', compact('temas'));
    // }

    // public function create(){
    //     return view('temas.create');
    // }

    // public function store(Request $request){
    //     $tema = new tema();
    //     $tema->nombre_tema= $request->nombre_tema;
        
    //     // $file=$request->file("urlPdf");
    //     // $nombreArchivo = "pdf_".time().".".$file->guessExtension();
    //     // $request->file('urlPdf')->storeAs('public/imagenes', $nombreArchivo );
    //     // $usuario->urlPdf = $nombreArchivo;
    //     $tema->save();
    //     $temas = tema::all();
        
    //     return redirect()->route('temas.index', compact('temas'));
    //     // return view('usuarios.show', compact('usuario'));
    // }
    // public function show(tema $tema){
    //     //$temp=Curso::find($curso);
    //    return view('temas.show',compact('tema'));
    //  }

    //  public function destroy (tema $tema){
    //   $tema->delete();
    //   return redirect()->route('temas.index');
       
    //  }


    // // public function show(){
    // //     return view('usuarios.show');
    // // }

    public function index(){
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::get($url.'/temas');
        $tema = $response->json();
        
        return view('seccions.numeros', compact('tema'));
    }


     public function create(){
         return view('temas.create');
     }

     public function store(Request $request){
        $url = env('URL_SERVER_API', 'http://127.0.0.1');

        $response = Http::post($url.'/temas', [
            'nombre_tema' => $request->nombre_tema,
            'descripcion' => $request->descripcion,
            'url_imagen' => $request->url_imagen,
            'seccion_id' => $request->seccion_id,
        ]);
        return redirect()->route('temas.index');
    }

    public function delete($idTema){
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::delete($url.'/temas/'.$idTema);
        return redirect()->route('tema.show');
    }

    public function view($idTema){
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::get($url.'/temas/'.$idTema);
        $tema = $response->json();
        return view('temas/view', compact('tema'));
    }

    public function show(){
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::get($url.'/temas');
        $data = $response->json();
        return view('temas/listartema', compact('data'));
    }

    public function update(Request $request){
        $url = env('URL_SERVER_API', 'http://127.0.0.1');

        $response = Http::put($url.'/temas/'.$request->id, [
            'nombre_tema' => $request->nombre_tema,
            'descripcion' => $request->descripcion,
            'url_imagen' => $request->url_imagen,
            'seccion_id' => $request->seccion_id,
        ]);
        return redirect()->route('tema.show');
        
    }
}
