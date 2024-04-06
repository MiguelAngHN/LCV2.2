<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\boceto;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;

class BocetoController extends Controller
{
    // public function index() {

    //     $bocetos = boceto::with('multimedia')->get();
    //     return view('bocetos.index', compact('bocetos'));
    // }

    // public function create() {
    //     return view('bocetos.create');
    // }

    // public function store(Request $request) {

    //     $request->validate([
    //         'nombre_boceto' => 'required',
    //         'url' => 'required',
    //     ]);
    //     // $multimedia = New multimedia(['url' => $request->url]);
    //     // $multimedia->save();

    //     $boceto = new boceto([
    //         'nombre_boceto' => $request->nombre_boceto,
    //         'url' => $request->url,
    //         'multimedia_id' => $request->multimedia_id,
    //     ]);
    //     // $boceto->multimedia()->associate($multimedia);
    //     $boceto->save();

    //     return redirect()->route('bocetos.index');
    // }

    public function index(){
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::get($url.'/bocetos');
        $data = $response->json();
        return view('bocetos/listarboceto', compact('data'));
    }

     public function create(){
         return view('bocetos.create');
     }

     public function store(Request $request){
        $url = env('URL_SERVER_API', 'http://127.0.0.1');

        $response = Http::post($url.'/bocetos', [
            'nombre_boceto' => $request->nombre_boceto,
            'url' => $request->url,
        ]);
        return redirect()->route('bocetos.index');
    }

    public function delete($idBoceto){
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::delete($url.'/bocetos/'.$idBoceto);
        return redirect()->route('bocetos.index');
    }

    public function view($idBoceto){
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::get($url.'/bocetos/'.$idBoceto);
        $boceto = $response->json();
        return view('bocetos/view', compact('boceto'));
    }

    public function update(Request $request){
        $url = env('URL_SERVER_API', 'http://127.0.0.1');

        $response = Http::put($url.'/bocetos/'.$request->id, [
            'nombre_boceto' => $request->nombre_boceto,
            'url' => $request->url,
        ]);
        return redirect()->route('bocetos.index');
        
    }

}
