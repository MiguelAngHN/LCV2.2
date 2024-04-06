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

    public function index(){
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::get($url.'/multimedias');
        $data = $response->json();
        return view('multimedias/listarmultimedia', compact('data'));
    }

     public function create(){
         return view('multimedias.create');
     }

    //  public function store(Request $request){
        
    //     $url = env('URL_SERVER_API', 'http://127.0.0.1');

    //     $response = Http::post($url.'/multimedias', [
    //         'file' => $request->file,
    //     ]);
    //     return redirect()->route('multimedias.index');
    // }

    public function store(Request $request) {
        $request->validate([
            'file' => 'required|image', // ajusta las reglas según sea necesario
        ]);
    
        $file = $request->file('file');
    
        // Asegúrate de que el archivo sea válido antes de enviarlo a la API
    
        // Obtener la URL de la API desde las variables de entorno
        $apiUrl = env('URL_SERVER_API', 'http://127.0.0.1') . '/multimedias';
    
        try {
            $response = Http::attach(
                'file',  // nombre del campo del archivo
                file_get_contents($file->getRealPath()),  // contenido del archivo
                $file->getClientOriginalName()  // nombre del archivo original
            )->post($apiUrl);
    
            // Verificar si la solicitud fue exitosa
            if ($response->status() == 200) {
                return redirect()->route('multimedias.index');
            } else {
                return back()->with('error', 'No se pudo enviar el archivo multimedia a la API.');
            }
        } catch (\Exception $e) {
            return back()->with('error', 'Se produjo un error al enviar el archivo multimedia: ' . $e->getMessage());
        }
    } 
    



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

    

    public function delete($idMultimedia){
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::delete($url.'/multimedias/'.$idMultimedia);
        return redirect()->route('multimedias.index');
    }

    public function view($idMultimedia){
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::get($url.'/multimedias/'.$idMultimedia);
        $multimedia = $response->json();
        return view('multimedias/view', compact('multimedia'));
    }

    public function update(Request $request){
        $url = env('URL_SERVER_API', 'http://127.0.0.1');

        $response = Http::put($url.'/multimedia/'.$request->id, [
            'file' => $request->file,
        ]);
        return redirect()->route('multimedias.index');   
    }
}
