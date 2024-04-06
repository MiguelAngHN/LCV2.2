@extends('layouts.app')

@section('content')
<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg">

<h1 class="text-3xl text-center font-bold">Crear seccion</h1>
<form action="{{route('seccions.store')}}" method="POST" enctype="multipart/form-data" class="mt-4">

    @csrf
    <label>
        Nombre sección:
        <br>
        <input type="text" name="nombre_seccion" class=" border border-gray-200 rounded-md bg-gray-200 w-full tex-lg placeholder-gray-900 p-2 my-2 focus:bg-white">
    </label>
    <label>
        Usuario id:
        <br>
        <input type="text" name="user_id" class=" border border-gray-200 rounded-md bg-gray-200 w-full tex-lg placeholder-gray-900 p-2 my-2 focus:bg-white">
    </label>  
        
    <br><br>
    
    <br><br>
    <button type="submit" class="font-semibold hover:bg-indigo-700 py-3 px-4 rounded-md border-2 hover:bg-white">Enviar Formulario:</button>

</form>

@endsection