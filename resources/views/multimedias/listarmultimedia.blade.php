@extends('layouts.app')

@section('title','Learn Cartoon / Multimedias')

@section('content')

<div class ="container">
    <table id="idPqrsd" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                {{-- <th>Id multimedia</th> --}}
                <th>Url multimedia</th>
                <th>Img</th>
                <th>Detalle</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
          @foreach ($data  as $multimedia)
              <tr>
                  <td>{{$multimedia['url']}}</td>
                  <td><img src="{{env('URL_SERVER_API_PUBLIC') . '/' . $multimedia['url']}}" style="width: 20%; border-radius: 15px;"><br></td>
                  
                  <td><a href="{{ route('multimedia.view', $multimedia['id']) }}">Ver</a></td>
                 <td>
                  <a href="{{ route('multimedia.delete', $multimedia['id']) }}">Eliminar</a>
                 </td>
              </tr>
          @endforeach
        </tbody>
    </table>
    
    </div>
    
@endsection