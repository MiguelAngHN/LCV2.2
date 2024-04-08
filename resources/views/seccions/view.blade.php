@extends('layouts.hmf')

@section('title','Learn Cartoon / Actualizar seccion')

@section('content')

<div class ="container m-2 p-3 rounded" style="font-family: Comic Sans MS; background-color: white;">
<h1>Actualizar</h1>

<form action="{{ route('seccion.update') }}" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{ $seccion['id'] }}">
    
    <label for="name">Nombre seccion</label>
    <input type="text" name="nombre_seccion" id="nombre_seccion" value="{{ $seccion ['nombre_seccion'] }}">
    <label for="email">Usuario id</label>
    <input type="text" name="user_id" id="user_id" value="{{ $seccion ['user_id'] }}"> 
    <button class="btn" style="background-color: #38B6FF;" type="submit">Guardar</button> 
</form>
</div>
@endsection