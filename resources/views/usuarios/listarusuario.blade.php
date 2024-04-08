@extends('layouts.hmf')

@section('title','Learn Cartoon / Listar usuarios')

@section('content')

<div class ="container">
    <table id="idPqrsd" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                {{-- <th>Id usuario</th> --}}
                <th>Nombre usuario</th>
                <th>Correo</th>
                <th>Contraseña</th>
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
                  
                  <td><button class="btn btn-primary">
                    <a class="nav-link" href="{{ route('usuario.view', $user['id']) }}">Ver</a></button></td>
                 <td><button class="btn btn-danger">
                  <a class="nav-link" href="{{ route('usuario.delete', $user['id']) }}">Eliminar</a></button></td>                  
    
              </tr>
          @endforeach
        </tbody>

    </table>
    
    </div>
    @endsection