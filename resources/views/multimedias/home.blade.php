@extends('layouts.hmf')

@section('title', 'Learn Cartoon / Multimedias')

@section('content')

<div class="text-bg-light" style="font-family: Comic Sans MS;">
    <h2 class="p-3"> Bienvenido a la multimedia de Learn Cartoon</h2>
    <button class="btn p-2 m-3" style="background-color: #38b6ff;"><a class="text-decoration-none nav-link" href="{{route('multimedias.create')}}"> Crear nueva multimedia</a></button>
</div>
<br>

<div class="container">
    <div class="row">

        @foreach ($multimedia as $item)
            <div class="col-4 p-1">
                <div class="card">
                    <img src="{{env('URL_SERVER_API_PUBLIC').'/'.($item ['url'])}}" class="img-fluid">
                    <div class="card-footer">
                        <a href="{{route('multimedia.show',$item ['id'])}}" class="btn btn-primary">Detalles</a>
                        {{-- <form action="" class="d-inline">
                            <a href="{{route('multimedia.destroy')}}" class="btn btn-danger">Eliminar</a>
                        </form> --}}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection