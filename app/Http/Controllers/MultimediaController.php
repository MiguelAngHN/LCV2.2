<?php

namespace App\Http\Controllers;

use App\Models\multimedia;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class MultimediaController extends Controller
{
    public function index(){
        // $multimedias = multimedia::orderBy('id', 'desc')->get();
        // return view('multimedias.listarmultimedia', compact('multimedias'));
        $multimedias = multimedia::all();
        return view('multimedias.home', compact('multimedias'));
        // $multimedias = multimedia::all();
        // return view('multimedias.home', compact('multimedias'));
    }

    public function create(){
        return view('multimedias.create');
    }

    public function store(Request $request){
        // $multimedia = new multimedia();
        // $multimedia->url = $request->url;
        // $multimedia->save();
        $request->validate([
            'file' => 'required|image'
        ]);
        $imagenes = $request->file('file')->store('public/imagenes');
        $url = Storage::url($imagenes);
        multimedia::create([
            'url' => $url     
        ]);
        return redirect()->route('multimedias.index');
    }

    public function show(multimedia $multimedia){
        return view('multimedias.show', compact('multimedia'));
    }

    public function destroy(multimedia $multimedia){

    $url = $multimedia->url;

    $rutaUrl = str_replace('/storage', 'public', $url);
        Storage::delete($rutaUrl);


        $multimedia->delete();
        return redirect()->route('multimedias.index');
    }
}
