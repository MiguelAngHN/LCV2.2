@extends('layouts.platillaSeccions')

@section('title', 'Learn Cartoon / Secciones/Bocetos')
@section('nombreSeccion', 'Bocetos')
@section('prsSeccion')
    <img src="{{asset('assets/images/ImgSeccDibujo.gif')}}" alt="">
@endsection

@section('content')

<div class="inicioBocetos">
    <img src="{{asset('assets/images/Koro.gif')}}" alt="Koro">
    <p><b>Bienvenido a la sección de bocetos.</b><br><br>
        Usa tu imaginación y siente libre
        de decorarlos como tú quieras en la sección dibujo, escoje el que más te guste
        y pinta. 🎨</p>
</div><hr noshade="" class="HR1">
<div class="contenedor-imagenes">
    @foreach ($boceto as $item)
     <div class="imagen" onclick="seleccionarPlantilla('{{asset($item ['url'])}}')">
        <img src="{{asset($item ['url'])}}" alt="{{$item ['nombre_boceto']}}">
        <button class="Pintar">Pintar</button>
    </div>       
    @endforeach

    <div class="imagen">
        <h3>Crear boceto</h3>
        <a href="{{ route('bocetos.create') }}" style="text-decoration: none;">
            <div style="width: 160px; height: 160px; background-color: #F5F5F5; border-radius: 10px; display: flex; justify-content: center; align-items: center;">
                <div style="font-size: 150px; color: #A9A9A9;">+</div><br>
            </div>
        </a>
        
    </div>
</div>
<script>
    function seleccionarPlantilla(rutaPlantilla){
        window.location.href = '{{route('seccions.dibujo')}}?plantilla=' + encodeURIComponent(rutaPlantilla);
    }
</script>

@endsection