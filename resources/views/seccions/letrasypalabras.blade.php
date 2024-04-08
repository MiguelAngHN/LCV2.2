@extends('layouts.platillaSeccions')

@section('title', 'Learn Cartoon / Secciones/Letras y Palabras')
@section('nombreSeccion', 'Letras y Palabras')
@section('ImgSeccion')
    <img src="{{asset('assets/images/DadosABC.gif')}}">
@endsection

@section('prsSeccion')
    <img src="{{asset('assets/images/ImgSeccLYP.gif')}}">
@endsection

@section('content')

<p class="StarSec">"¡Hola amiguitos! Sabías que la comunicación es muy importante para todos?
 ¡Sí, para todos! Esto significa que hablar y compartir tus ideas y sentimientos es algo
  muy valioso. Las palabras son como pequeñas herramientas que te ayudarán a comunicarte
  con los demás y a expresar todo lo que sientes. Así que, nunca tengas miedo de hablar
   y usar tus palabras.</p>
   <hr noshade="" class="HR5">
   <div class="Vocales">
    <div class="contenidoVoc">
        <h2>Vocales</h2>
        <p>Empezemos por la facil escritura y lectura, la
            contrucción de palabras como también familiarizarse con ellas.</p>
    </div>
    <img src="{{asset('assets/images/Vocales.gif')}}">
    <button class="boton"><a href=""> Empieza aquí </a></button>
</div>
<hr noshade="" class="HR5">
<div class="Vocales">
    <div class="contenidoVoc">
        <h2>Abecedario</h2>
        <p>Aumenta el nivel guerrrero y tu aprendizaje tambien por eso agregamos nuevas
            letras para expandir tu memoria, vocabulario, comprensión.</p>
    </div>
    <img src="{{asset('assets/images/Palbras.gif')}}">
    <button class="boton"><a href=""> Empieza aquí </a></button>
</div>
<hr noshade="" class="HR5">
<div class="Vocales">
    <div class="contenidoVoc">
        <h2>Oraciones Completas</h2>
        <p>Finalmente las oraciones te sirvira para comunicarte de manera mas efectiva
            desarrollaras habilidades que siempre te serviran en tu vida.
        </p>
    </div>
    <img src="{{asset('assets/images/Silabas y trisilabas.gif')}}">
    <button class="boton"><a href=""> Empieza aquí </a></button>
</div>
<hr noshade="" class="HR5">
{{-- @foreach($tema as $item)
<div class="Escuchar">
  <div class="contenidoEsc">
    <h2>{{$item ['nombre_tema']}}</h2>
    <p>{{$item ['descripcion']}}</p>
  </div>
  <img src="{{asset($item ['url_imagen'])}}">
  <button class="boton"><a href=""> Empieza aquí </a></button>
</div>
<hr noshade="" class="HR5">
@endforeach --}}

<div class="imagen" style="margin: 20px 0 0 0;">
  <h3>Crear tema</h3>
  <a href="{{ route('temas.create') }}" style="text-decoration: none;">
      <div style="width: 160px; height: 160px; background-color: #F5F5F5; border-radius: 10px; display: flex; justify-content: center; align-items: center;">
          <div style="font-size: 150px; color: #A9A9A9;">+</div><br>
      </div>
  </a>
</div>
@endsection