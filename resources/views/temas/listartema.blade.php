@extends('layouts.app')

@section('title','listar seccion')

@section('content')

<div class ="container">
    <table id="idPqrsd" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
              <th>Nombre del tema</th>
              <th>Descripción</th>
              <th>Url de Imagen</th>
              <th>Id seccion</th>
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
                  
                  
                <td><a href="{{ route('tema.view', $tema['id']) }}">Ver</a></td>
                <td>
                 <a href="{{ route('tema.delete', $tema['id']) }}">Eliminar</a>
                </td>
             
                 
                 
                  {{-- <td><a href="{{route('curso.destroy',$curso->id)}}">Eliminar</a></td> --}}
                  
    
              </tr>
          @endforeach
        </tbody>
        <!-- <tfoot>
            <tr>
                <th>Id Pqrsd</th>
                <th>esAnomina</th>
                <th>TipoPQRSD</th>
                <th>Estado</th>
                <th>Creada</th>
                <th>Responder</th>
                <th>Detalle</th>
            </tr>
        </tfoot> -->
    </table>
    
    </div>

@endsection
