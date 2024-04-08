@extends('layouts.platillaSeccions')

@section('title', 'Learn Cartoon / Secciones/Dibujo')
@section('nombreSeccion', 'Dibujo')


@section('content')

<div class="ImgDibujo">
    <img src="{{{asset('assets/images/ImgSeccDibujo.gif')}}}" alt="Fondo de pintura">
</div>
<div class="InicioDibujo">
    <div class="InicioSeleccion">
        <h2> Boceto Seleccionado </h2>
        <img id="select-template" src="{{asset('assets/images/Logo.webp')}}" alt="Bocetos Seleccionado">
    </div>
    <div class="InicioInfo">
        <p>Aquí puedes empezar a divertirte dándole color en el lienzo, a tu
            personaje que seleccionaste o también cambiar tu boceto.
        </p>
        <button style="background-color: #7ED957; border-radius: 20px;" class="p-2 m-2">
            <a style="text-decoration: none; color: black;" href="{{route('bocetos.index')}}">Escojer boceto</a>
        </button>
    </div>
</div>
<hr noshade="" class="HR5">

<div class="Pizarra">
    <div class="Opciones">
        Cambiar Color:
        <input type="color" id="color-picker" value="#000000">
        Grosor del Pincel:
        <input type="range" id="line-width-slider" min="1" max="20" value="5">
        <span id="line-width-value"> 5 </span>
    </div>
    <div class="Hoja">
        <main class="main-container">
            <canvas id="main-canvas" width="500" height="500"></canvas>
        </main>
        <script src="{{asset('assets/js/pintar.js')}}"></script>
    </div>
</div>

<div class="Nota">
    <p><b>NOTA: </b> Tu dibujo puede ser guardado junto con los cambios
        realizados o si prefieres descargarlo en tu dispositivo:<BR>
        <b>Clic derecho -> Guardar Imagen</b>
    </p>

@endsection