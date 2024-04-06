<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuario;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function create() {
        return view('auth.create');
    }

    public function store() {

        $this->validate(request(), [
            'nombre_usuario' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = usuario::create(request(['nombre_usuario', 'email', 'password', 'rol']));

        Auth::login($user);
        return redirect()->to('/');
    }

    public function show(){
        
        $usuarios =  usuario::orderBy('id', 'desc')->get();
       
        return view('usuarios.listarusuario', compact('usuarios'));
     }

    
}
