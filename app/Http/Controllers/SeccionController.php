<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\seccion;
use App\Models\multimedia;
use App\Models\tema;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;


class SeccionController extends Controller
{
   
        // public function index(){

        //     // $url = env('URL_SERVER_API', 'http://127.0.0.1');
        //     // $response = Http::get($url.'/users');
        //     // $data = $response->json();


        //     // $usuarios = Http::get('https://jsonplaceholder.typicode.com/users');
        //     // $usuariosArray = $usuarios->json();

        //     // // $multimedia = multimedia::all();
        //     return view('seccions.home');
        // }
    
        // public function create(){
        //     return view('seccions.create');
        // }
    
        // public function store(Request $request){
        //     $seccion = new seccion();
        //     $seccion->nombre_seccion= $request->nombre_seccion;
            
        //     // $file=$request->file("urlPdf");
        //     // $nombreArchivo = "pdf_".time().".".$file->guessExtension();
        //     // $request->file('urlPdf')->storeAs('public/imagenes', $nombreArchivo );
        //     // $usuario->urlPdf = $nombreArchivo;
        //     $seccion->save();
            
        //     return redirect()->route('seccions.index');
        //     // return view('usuarios.show', compact('usuario'));
        // }
        // public function show(seccion $seccion){
        //     $seccions =  seccion::orderBy('id', 'desc')->get();
           
        //     return view('seccions.listarseccion', compact('seccions'));
        //  }
    
        //  public function destroy (seccion $seccion){
        //   $seccion->delete();
        //   return redirect()->route('seccions.index');
           
        //  }
    
    
        // // public function show(){
        // //     return view('usuarios.show');
        // // }

        public function index(){
            $url = env('URL_SERVER_API', 'http://127.0.0.1');
            $response = Http::get($url.'/seccions');
            $seccion = $response->json();
            return view('seccions/home', compact('seccion'));
        }
    
         public function create(){
             return view('seccions.create');
         }
    
         public function store(Request $request){
            $url = env('URL_SERVER_API', 'http://127.0.0.1');
    
            $response = Http::post($url.'/seccions', [
                'nombre_seccion' => $request->nombre_seccion,
                'user_id' => $request->user_id,
            ]);
            return redirect()->route('seccions.index');
        }
    
        public function delete($idSeccion){
            $url = env('URL_SERVER_API', 'http://127.0.0.1');
            $response = Http::delete($url.'/seccions/'.$idSeccion);
            return redirect()->route('seccion.show');
        }
    
        public function view($idSeccion){
            $url = env('URL_SERVER_API', 'http://127.0.0.1');
            $response = Http::get($url.'/seccions/'.$idSeccion);
            $seccion = $response->json();
            return view('seccions/view', compact('seccion'));
        }

        public function show(){
            $url = env('URL_SERVER_API', 'http://127.0.0.1');
            $response = Http::get($url.'/seccions');
            $data = $response->json();
            return view('seccions/listarseccion', compact('data'));
        }

    
        public function update(Request $request){
            $url = env('URL_SERVER_API', 'http://127.0.0.1');
    
            $response = Http::put($url.'/seccions/'.$request->id, [
                'nombre_seccion' => $request->nombre_seccion,
                'user_id' => $request->user_id,
            ]);
            return redirect()->route('seccion.show');
            
        }
    }

