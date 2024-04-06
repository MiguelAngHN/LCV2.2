@extends('layouts.app')

@section('title','Learn Cartoon / Usuarios / Registros')

@section('content')

<div class ="container">
    <table id="idPqrsd" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                {{-- <th>Id usuario</th> --}}
                <th>Nombre usuario</th>
                <th>Correo</th>
                <th>Contraseña</th>
                <th>Rol</th>
                <th>Detalle</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
          @foreach ($data  as $user)
              <tr>
                  {{-- <td>{{$user->id}}</td> --}}
                  <td>{{$user ['nombre_usuario']}}</td>
                  <td>{{$user['email']}}</td>
                  <td>{{$user ['password']}}</td>
                  <td>{{$user ['rol']}}</td>
                  
                  <td><a href="{{ route('usuario.view', $user['id']) }}">Ver</a></td>
                 <td>
                  <a href="{{ route('usuario.delete', $user['id']) }}">Eliminar</a>
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