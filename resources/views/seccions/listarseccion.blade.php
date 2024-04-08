@extends('layouts.hmf')

@section('title','Learn Cartoon / Listar seccion')

@section('content')

<div class ="container">
    <table id="idPqrsd" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                {{-- <th>Id seccion</th> --}}
                <th>Nombre de la sección</th>
                <th>Usuario id</th>
                <th>Detalle</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
          @foreach ($data  as $seccion)
              <tr>
                  <td>{{$seccion ['nombre_seccion']}}</td>
                  <td>{{$seccion ['user_id']}}</td>
                  {{-- @foreach($seccion['usuario'] as $usuario)
                  <td>{{$usuario ['nombre_usuario']}}</td>
                  <td>{{$usuario ['email']}}</td>
                  @endforeach --}}
                  
                  <td><button class="btn btn-primary">
                    <a class="nav-link" href="{{ route('seccion.view', $seccion['id']) }}">Ver</a></button></td>
                 <td><button class="btn btn-danger">
                <a class="nav-link" href="{{ route('seccion.delete', $seccion['id']) }}">Eliminar</a></button></td>
                 
              </tr>
          @endforeach
        </tbody>

    </table>
    
    </div>
@endsection

