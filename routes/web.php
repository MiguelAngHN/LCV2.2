<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\SesionController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\SeccionController;
use App\Http\Controllers\TemaController;
use App\Http\Controllers\TipoController;
use App\Http\Controllers\ActividadController;
use App\Http\Controllers\BocetoController;
use App\Http\Controllers\MultimediaController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisterController;
use App\Models\tema;

Route::get('/', function(){
    return view('home');
})->name('home');
// Route::get('/registro',[RegistroController::class, 'create'])->name('registro.index');
// Route::get('/login',[LoginController::class, 'create'])->name('login.index');

Route::get('usuarios', [UsuarioController::class, 'index'])->name('usuarios.index');
Route::post('usuarios', [UsuarioController::class, 'store'])->name('usuarios.store');
Route::get('usuarios/create', [UsuarioController::class, 'create'])->name('usuarios.create');
Route::delete('usuario/{usuario}', [UsuarioController::class, 'destroy'])->name('usuario.destroy');
Route::get('Listausuarios', [UsuarioController::class, 'show'])->name('usuario.show');
Route::get('/usuario/{idUser}', [UsuarioController::class, 'view'])->name('usuario.view');
Route::post('/usuario/update', [UsuarioController::class, 'update'])->name('usuario.update');
Route::get('/usuario/delete/{id}', [UsuarioController::class, 'delete'])->name('usuario.delete');

Route::get('temas', [TemaController::class, 'index'])->name('temas.index');
Route::post('temas', [TemaController::class, 'store'])->name('temas.store');
Route::get('temas/create', [TemaController::class, 'create'])->name('temas.create');
Route::delete('tema/{tema}', [TemaController::class, 'destroy'])->name('tema.destroy');
Route::get('Listatemas', [TemaController::class, 'show'])->name('tema.show');
Route::get('/tema/{idTema}', [TemaController::class, 'view'])->name('tema.view');
Route::post('/tema/update', [TemaController::class, 'update'])->name('tema.update');
Route::get('/tema/delete/{id}', [TemaController::class, 'delete'])->name('tema.delete');


Route::get('seccions', [SeccionController::class, 'index'])->name('seccions.index');
Route::post('seccions', [SeccionController::class, 'store'])->name('seccions.store');
Route::get('seccions/create', [SeccionController::class, 'create'])->name('seccions.create');
Route::delete('seccion/{seccion}', [SeccionController::class, 'destroy'])->name('seccion.destroy');
Route::get('Listaseccions', [SeccionController::class, 'show'])->name('seccion.show');
Route::get('/seccion/{idSeccion}', [SeccionController::class, 'view'])->name('seccion.view');
Route::post('/seccion/update', [SeccionController::class, 'update'])->name('seccion.update');
Route::get('/seccion/delete/{id}', [SeccionController::class, 'delete'])->name('seccion.delete');


Route::get('actividads', [ActividadController::class, 'index'])->name('actividads.index');
Route::post('actividads', [ActividadController::class, 'store'])->name('actividads.store');
Route::get('actividads/create', [ActividadController::class, 'create']);
Route::delete('actividad/{actividad}', [ActividadController::class, 'destroy'])->name('actividad.destroy');
Route::get('actividads/{actividad}', [ActividadController::class, 'show'])->name('actividad.show');

Route::get('tipos', [TipoController::class, 'index'])->name('tipos.index');
Route::post('tipos', [TipoController::class, 'store'])->name('tipos.store');
Route::get('tipos/create', [TipoController::class, 'create']);
Route::delete('tipo/{tipo}', [TipoController::class, 'destroy'])->name('tipo.destroy');
Route::get('tipos/{tipo}', [TipoController::class, 'show'])->name('tipo.show');

Route::get('multimedias', [MultimediaController::class, 'index'])->name('multimedias.index');
Route::post('multimedias', [MultimediaController::class, 'store'])->name('multimedias.store');
Route::get('multimedias/create', [MultimediaController::class, 'create'])->name('multimedias.create');
Route::delete('multimedia/{multimedia}', [MultimediaController::class, 'destroy'])->name('multimedia.destroy');
Route::get('multimedias/{multimedia}', [MultimediaController::class, 'show'])->name('multimedia.show');
Route::get('/multimedia/{idMultimedia}', [MultimediaController::class, 'view'])->name('multimedia.view');
Route::post('/multimedia/update', [MultimediaController::class, 'update'])->name('multimedia.update');
Route::get('/multimedia/delete/{id}', [MultimediaController::class, 'delete'])->name('multimedia.delete');


View::share('seccions_temas', tema::all());

Route::get('seccions-Números', function(){
    return view('seccions.numeros');
})->name('seccions.numeros');

Route::get('seccions-Letras y palabras', function(){
    return view('seccions.letrasypalabras');
})->name('seccions.lyp');

Route::get('seccions-Dibujo', function(){
    return view('seccions.dibujo');
})->name('seccions.dibujo');

Route::get('sobre nosotros', function () {
    return view('nosotros');
})->name('nosotros');

Route::get('misión y visión', function () {
    return view('misionYvision');
})->name('misionYvision');

Route::get('Contactenos', function () {
    return view('contactenos');
})->name('contactenos');

Route::get('Perfil', function (){
    return view('usuarios.home');
})->name('perfil');

Route::get('bocetos', [BocetoController::class, 'index'])->name('bocetos.index');
Route::post('bocetos', [BocetoController::class, 'store'])->name('bocetos.store');
Route::get('bocetos/create', [BocetoController::class, 'create'])->name('bocetos.create');
Route::delete('boceto/{boceto}', [BocetoController::class, 'destroy'])->name('boceto.destroy');
Route::get('Listabocetos', [BocetoController::class, 'show'])->name('boceto.show');
Route::get('/boceto/{idBoceto}', [BocetoController::class, 'view'])->name('boceto.view');
Route::post('/boceto/update', [BocetoController::class, 'update'])->name('boceto.update');
Route::get('/boceto/delete/{id}', [BocetoController::class, 'delete'])->name('boceto.delete');


Route::get('login', [SessionController::class, 'create'])->name('login.index');
Route::post('login', [SessionController::class, 'store'])->name('login.store');
Route::get('login/destroy', [SessionController::class, 'destroy'])->name('login.destroy');

Route::get('register', [RegisterController::class, 'create'])->name('register.index');
Route::post('register', [RegisterController::class, 'store'])->name('register.store');
Route::get('registers/', [RegisterController::class, 'show'])->name('register.show');
