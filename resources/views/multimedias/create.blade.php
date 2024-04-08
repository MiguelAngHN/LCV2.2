@extends('layouts.hmf')

@section('title', 'Crear / Multimedias')

@section('content')

<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg">

<h1 class="m-3" style="font-family: Comic Sans MS">Crear multimedia</h1>
<form action="{{route('multimedias.store')}}" method="POST" enctype="multipart/form-data" class="mt-4">

    @csrf
    <br>
   <div class="mb-4 m-3">
    <label class="form-label">Archivo Imagen</label><br>
    <input type="file" name="file" class="form-control w-50" accept="image/*">
  </div>

   {{-- @error('file')
       <span class="text-danger">Problema con el archivo</span>
   @enderror --}}
        
    <br><br><br>
    <button type="submit" class="btn m-3" style="background-color: #38b6ff;">Enviar Archivo</button>
</form>
@endsection