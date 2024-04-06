@extends('layouts.app')

@section('title','listar seccion')

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
                  
                  <td><a href="{{ route('seccion.view', $seccion['id']) }}">Ver</a></td>
                 <td><a href="{{ route('seccion.delete', $seccion['id']) }}">Eliminar</a></td>
                 
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

