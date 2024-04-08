<?php

namespace App\Http\Controllers;

use App\Models\multimedia;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Facades\Storage;

class MultimediaController extends Controller
{
    // public function index(){
    //     // $multimedias = multimedia::orderBy('id', 'desc')->get();
    //     // return view('multimedias.listarmultimedia', compact('multimedias'));
    //     $multimedias = multimedia::all();
    //     return view('multimedias.home', compact('multimedias'));
    // }

    // public function create(){
    //     return view('multimedias.create');
    // }

    // public function store(Request $request){
    //     // $multimedia = new multimedia();
    //     // $multimedia->url = $request->url;
    //     // $multimedia->save();
    //     $request->validate([
    //         'file' => 'required|image'
    //     ]);
    //     $imagenes = $request->file('file')->store('public/imagenes');
    //     $url = Storage::url($imagenes);
    //     multimedia::create([
    //         'url' => $url     
    //     ]);
    //     return redirect()->route('multimedias.index');
    // }

    // public function show(multimedia $multimedia){
    //     return view('multimedias.show', compact('multimedia'));
    // }

    // public function destroy(multimedia $multimedia){

    // $url = $multimedia->url;

    // $rutaUrl = str_replace('/storage', 'public', $url);
    //     Storage::delete($rutaUrl);


    //     $multimedia->delete();
    //     return redirect()->route('multimedias.index');
    // }

    public function index()
    {
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::get($url . '/multimedias');
        $data = $response->json();
        return view('multimedias/listarmultimedia', compact('data'));
    }

    public function create()
    {
        return view('multimedias.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|image'
        ]);
    
        $file = $request->file('file');
    
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
    
        try {
            $response = Http::attach(
                'file',
                file_get_contents($file->getRealPath()),
                $file->getClientOriginalName()
            )->post($url.'/multimedias');
    
            if ($response->successful()) {
                return dd('Hola1');
                // return redirect()->route('multimedias.index')->with('success', 'La imagen se ha enviado correctamente.');
            } else {
                return dd('Hola2');
                // return back()->with('error', 'No se pudo enviar la imagen a la API.');
            }
        } catch (\Exception $e) {
            return dd('Hola3');
            // return back()->with('error', 'Se produjo un error al enviar la imagen: ' . $e->getMessage());
        }
    }

    //  public function store(Request $request){

    //     $url = env('URL_SERVER_API', 'http://127.0.0.1');

    //     $response = Http::post($url.'/multimedias', [
    //         'file' => $request->file,
    //     ]);
    //     return redirect()->route('multimedias.index');
    // }


    //     public function store(Request $request)
    // {
    //     $url = env('URL_SERVER_API', 'http://127.0.0.1');

    //     $response = Http::attach(
    //         'file', // Nombre del campo de archivo esperado por la API
    //         $request->file('file')->get(), // Obtén los datos binarios del archivo
    //         $request->file('file')->getClientOriginalName() // Obtén el nombre original del archivo
    //     )->post($url.'/multimedias');

    //     return redirect()->route('multimedias.index');
    // }



    public function delete($idMultimedia)
    {
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::delete($url . '/multimedias/' . $idMultimedia);
        return redirect()->route('multimedias.index');
    }

    public function view($idMultimedia)
    {
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::get($url . '/multimedias/' . $idMultimedia);
        $multimedia = $response->json();
        return view('multimedias/view', compact('multimedia'));
    }

    public function update(Request $request)
    {
        $url = env('URL_SERVER_API', 'http://127.0.0.1');

        $response = Http::put($url . '/multimedia/' . $request->id, [
            'file' => $request->file,
        ]);
        return redirect()->route('multimedias.index');
    }
}
