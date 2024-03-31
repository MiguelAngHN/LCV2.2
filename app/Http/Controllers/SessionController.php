<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuario;

class SessionController extends Controller
{
    public function create() {
        return view('auth.login');
    }
    
    public function  store() {
        if(auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'Correo o contraseña incorrectos',
            ]);
        }
        return redirect()->to('/');
    }

    public function destroy() {
        auth()->logout();

        return redirect()->to('/');
    }
}