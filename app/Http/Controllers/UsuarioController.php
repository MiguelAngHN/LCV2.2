<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuario;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;

class UsuarioController extends Controller
{
    
    // public function index(){
    //     $usuarios =  usuario::orderBy('id', 'desc')->get();
       
    //     return view('usuarios.listarusuario', compact('usuarios'));
    // }

    // public function create(){
    //     return view('usuarios.create');
    // }

    // public function store(Request $request){
    //     $usuario = new usuario();
    //     $usuario->nombre_usuario = $request->nombre_usuario;
    //     $usuario->correo = $request->correo;
    //     $usuario->contraseña = $request->contraseña;
    //     $usuario->rol = $request->rol;
        // $file=$request->file("urlPdf");
        // $nombreArchivo = "pdf_".time().".".$file->guessExtension();
        // $request->file('urlPdf')->storeAs('public/imagenes', $nombreArchivo );
        // $usuario->urlPdf = $nombreArchivo;
    //     $usuario->save();
        
    //     return redirect()->route('usuarios.index');
    //     // return view('usuarios.show', compact('usuario'));
    // }
    // public function show(usuario $usuario){
    //     //$temp=Curso::find($curso);
    //    return view('usuarios.show',compact('usuario'));
    //  }

    //  public function destroy (usuario $usuario){
    //   $usuario->delete();
    //   return redirect()->route('usuarios.index');
       
    //  }


    // public function show(){
    //     return view('usuarios.show');
    // }

    
    public function index(){
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::get($url.'/users');
        $user = $response->json();
        return view('usuarios/home', compact('user'));
    }

     public function create(){
         return view('usuarios.create');
     }

     public function store(Request $request){
        $url = env('URL_SERVER_API', 'http://127.0.0.1');

        $response = Http::post($url.'/users', [
            'nombre_usuario' => $request->nombre_usuario,
            'email' => $request->email,
            'password' => $request->password,
        ]);
        return redirect()->route('usuarios.index');
    }

    public function delete($idUser){
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::delete($url.'/users/'.$idUser);
        return redirect()->route('usuario.show');
    }

    public function view($idUser){
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::get($url.'/users/'.$idUser);
        $user = $response->json();
        return view('usuarios/view', compact('user'));
    }

    public function show(){
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::get($url.'/users');
        $data = $response->json();
        return view('usuarios/listarusuario', compact('data'));
    }

    public function update(Request $request){
        $url = env('URL_SERVER_API', 'http://127.0.0.1');

        $response = Http::put($url.'/users/'.$request->id, [
            'nombre_usuario' => $request->nombre_usuario,
            'email' => $request->email,
            'password' => $request->password,
        ]);
        return redirect()->route('usuarios.index');
        
    }
}
