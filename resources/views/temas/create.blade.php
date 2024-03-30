@extends('layouts.app')

@section('content')
<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg">

<h1 class="text-3xl text-center font-bold">Crear tema</h1>
<form action="{{route('temas.store')}}" method="POST" enctype="multipart/form-data" class="mt-4">

    @csrf
    <label>
        Nombre del tema:
        <br>
        <input type="text" name="nombre_tema" class=" border border-gray-200 rounded-md bg-gray-200 w-full tex-lg placeholder-gray-900 p-2 my-2 focus:bg-white">
    </label>
    <label>
        Descripción:
        <br>
        <input type="text" name="descripcion" class=" border border-gray-200 rounded-md bg-gray-200 w-full tex-lg placeholder-gray-900 p-2 my-2 focus:bg-white">
    </label><br>
    <label>
        Url de la imagen:
        <br>
        <input type="text" name="url_imagen" class=" border border-gray-200 rounded-md bg-gray-200 w-full tex-lg placeholder-gray-900 p-2 my-2 focus:bg-white">
    </label><br>
    <label>
        Seccion_id:
        <br>
        <input type="text" name="seccion_id" class=" border border-gray-200 rounded-md bg-gray-200 w-full tex-lg placeholder-gray-900 p-2 my-2 focus:bg-white">
    </label><br>
    <label>
        Multimedia_id:
        <br>
        <input type="text" name="multimedia_id" class=" border border-gray-200 rounded-md bg-gray-200 w-full tex-lg placeholder-gray-900 p-2 my-2 focus:bg-white">
    </label>
        
    <br><br>
    <button type="submit" class="font-semibold hover:bg-indigo-700 py-3 px-4 rounded-md border-2 hover:bg-white">Enviar Formulario:</button>





</form>

@endsection