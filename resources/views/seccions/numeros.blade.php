@extends('layouts.platillaSeccions')

@section('title', 'Learn Cartoon / Secciones/Números')
@section('nombreSeccion', 'Números')
@section('ImgSeccion')
<img src="{{asset('/storage/imagenes/1AStnmTWJ9nXluAEwVl114etipDYJPEYyisgNJ27.gif')}}">
@endsection

@section('prsSeccion')
<img src="{{asset('/storage/imagenes/XAhsSCpbxdAxO0IFErMee7GkEXCJAYL2IucZaTPd.gif')}}">
@endsection

@section('content')

<div class="Escuchar">
  <div class="contenidoEsc">
    <h2>Escuchar</h2>
      <p>En este nivel puedes aprenderte el sonido y recordar los números, para
        familiarizarte con ellos.</p>
    </div>
    <img src="{{asset('/storage/imagenes/bepDI9I37w7OfXMg7tyJ7chvDQr9FnWTBCrruOEB.gif')}}">
    <button class="boton"><a href=""> Empieza aquí </a></button>
  </div>
  <hr noshade="" class="HR5">
  <div class="Escuchar">
    <div class="contenidoEsc">
      <h2>Contar</h2>
      <p>Aprendete los números de manera ordenada, mejora su entendimiento, que puedan relacionar
        los números y las cantidades de manera cotidiana.</p>
    </div>
    <img src="{{asset('/storage/imagenes/2VJIiWMxh2qmFYZkBBTtdMabWG3LuYxTqEUm6RII.gif	')}}">
    <button class="boton"><a href=""> Empieza aquí </a></button>
  </div>
  <hr noshade="" class="HR5">
  <div class="Escuchar">
    <div class="contenidoEsc">
      <h2>Matematicas</h2>
      <p>El desarrollo intelectual, logico y numerico es importante para tu vida.
      <br>Matematica basica para niños de 5 a 10 años.</p>
    </div>
    <img src="{{asset('/storage/imagenes/H5kxQAEN3FVmirwEdmUDBuGbvY32VkcniDnVQDVw.gif')}}">
    <button class="boton"><a href=""> Empieza aquí </a></button>
  </div>
  <hr noshade="" class="HR5">
  @foreach($seccions_temas as $tema)
  <div class="Escuchar">
    <div class="contenidoEsc">
      <h2>{{$tema->nombre_tema}}</h2>
      <p>{{$tema->descripcion}}</p>
    </div>
    <img src="{{asset($tema->url_imagen)}}">
    <button class="boton"><a href=""> Empieza aquí </a></button>
  </div>
  <hr noshade="" class="HR5">
  @endforeach

  <div class="imagen" style="margin: 20px 0 0 0;">
    <h3>Crear tema</h3>
    <a href="{{ route('temas.create') }}" style="text-decoration: none;">
        <div style="width: 160px; height: 160px; background-color: #F5F5F5; border-radius: 10px; display: flex; justify-content: center; align-items: center;">
            <div style="font-size: 150px; color: #A9A9A9;">+</div><br>
        </div>
    </a>  
</div>
@endsection