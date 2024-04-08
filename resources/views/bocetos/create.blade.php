@extends('layouts.hmf')

@section('title', 'Learn Cartoon / Crear boceto')

@section('content')


<div class="block p-3 bg-white" style="font-family: Comic Sans MS;">

<h1 class="text-3xl text-center font-bold">Crear Boceto</h1>
<form action="{{route('bocetos.store')}}" method="POST" enctype="multipart/form-data" class="mt-4">

    @csrf
    <label>
        Nombre boceto:
        <br>
        <input type="text" name="nombre_boceto" class=" border border-gray-200 rounded-md bg-gray-200 w-full tex-lg placeholder-gray-900 p-2 my-2 focus:bg-white">
    </label>
    <br>
    <label>
        url:
        <br>
        <input type="text" name="url" class=" border border-gray-200 rounded-md bg-gray-200 w-full tex-lg placeholder-gray-900 p-2 my-2 focus:bg-white">
    </label><br>
    {{-- <label>
        Id multimedia:
        <br>
        <input type="text" name="multimedia_id" class=" border border-gray-200 rounded-md bg-gray-200 w-full tex-lg placeholder-gray-900 p-2 my-2 focus:bg-white">
    </label> --}}
    <br><br>

    <button type="submit" class="btn" style="background-color: #38b6ff;">Enviar Formulario:</button>
</form>
</div>
@endsection