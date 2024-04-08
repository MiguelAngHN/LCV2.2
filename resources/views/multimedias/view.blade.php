@extends('layouts.hmf')

@section('title','Learn Cartoon / Actualizar seccion')

@section('content')

<div class ="container m-2 p-3 rounded" style="font-family: Comic Sans MS; background-color: white;">
<h1>Actualizar</h1>

<form action="{{ route('multimedia.update') }}" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{ $multimedia['id'] }}">
    
     <label for="name">Url multimedia</label>
    <input type="file" name="file" id="file" value="{{ $multimedia ['url'] }}" accept="image/*"><br><br>
    @error('file')
    <span class="text-danger">Problema con el archivo</span>
    @enderror
    <button class="btn" style="background-color: #38B6FF;" type="submit">Guardar</button> 
</form>
</div>
@endsection