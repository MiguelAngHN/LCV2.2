@extends('layouts.hmf')

@section('title','Learn Cartoon / Listar bocetos')

@section('content')

<div class ="container">
    <table id="idPqrsd" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                {{-- <th>Id usuario</th> --}}
                <th>Nombre boceto</th>
                <th>Url de multimedia</th>
                <th>Detalle</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
          @foreach ($data  as $boceto)
              <tr>
                  {{-- <td>{{$user->id}}</td> --}}
                  <td>{{$boceto ['nombre_boceto']}}</td>
                  <td>{{$boceto ['url']}}</td> 
                  
                  <td><button class="btn btn-primary">
                    <a class="nav-link" href="{{ route('boceto.view', $boceto['id']) }}">Ver</a></td>
                    <td><button class="btn btn-danger">
                    <a class="nav-link" href="{{ route('boceto.delete', $boceto['id']) }}">Eliminar</a></button></td>
  
              </tr>
          @endforeach
        </tbody>

    </table>
    
    </div>
    @endsection