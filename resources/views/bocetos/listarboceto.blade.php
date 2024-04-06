@extends('layouts.app')

@section('title','Learn Cartoon / Bocetos')

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
                  
                  <td><a href="{{ route('boceto.view', $boceto['id']) }}">Ver</a></td>
                 <td>
                  <a href="{{ route('boceto.delete', $boceto['id']) }}">Eliminar</a>
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