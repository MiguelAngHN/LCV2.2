@extends('layouts.app')

@section('content')



<div class="text-bg-light" style="font-family: Comic Sans MS;">
    <h1>Detalles de Multimedia</h1><br>
<h3> Multimedia Creada 👌 </h3>
</div>

    <img src="{{ asset($multimedia->url) }}" style="width: 20%; border-radius: 15px;"><br><br>


    <div class="table-responsive">
    <table id="idPqrsd" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Id multimedia</th>
                <th>url</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$multimedia->id}}</td>
                <td>{{$multimedia->url}}</td>
                <td>
                    <form method="POST" action="{{route('multimedia.destroy',$multimedia->id)}}">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                 </td>
                 {{--<td><iframe src="{{ asset ($multimedia->url) }}" frameborder="0";></iframe>
                 </td> --}}
            </tr>
        </tbody>
    </table>
</div>


@endsection