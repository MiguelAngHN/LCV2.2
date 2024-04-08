@extends('layouts.hmf')

@section('title','Learn Cartoon / Listar tema')

@section('content')

<div class ="container">
    <table id="idPqrsd" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
              <th>Nombre del tema</th>
              <th>Descripción</th>
              <th>Url de Imagen</th>
              <th>Id seccion</th>
              <th>Detalle</th>
              <th>Eliminar</th>
              {{-- <th>Id multimedia</th> --}}
            </tr>
        </thead>
        <tbody>
          @foreach ($data  as $tema)
              <tr>
                <td>{{$tema ['nombre_tema']}}</td>
                <td>{{$tema ['descripcion']}}</td>
                <td>{{$tema ['url_imagen']}}</td>
                <td>{{$tema ['seccion_id']}}</td>
                {{-- <td>{{$tema->multimedia_id}}</td> --}}
                  
                  
                <td><button class="btn btn-primary">
                <a class="nav-link" href="{{ route('tema.view', $tema['id']) }}">Ver</a></button></td>
                <td><button class="btn btn-danger">
                <a class="nav-link" href="{{ route('tema.delete', $tema['id']) }}">Eliminar</a></button></td>
    
              </tr>
          @endforeach
        </tbody>
    </table>
    
    </div>

@endsection
