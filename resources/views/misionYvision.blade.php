@extends('layouts.hmf')

@section('title', 'Learn Cartoon / Misión y Visión')

@section('content')

<div class="container bg-light rounded" style="font-family: Comic Sans MS">
    <h1 class="text-center">Misión y visión</h1>
    <div class="row align-items-center my-5">
      <div class="col-sm-6 col-md-6 text-start">
        <img src="{{asset('/storage/imagenes/f9hE7zBN7hZxtmGjajIgfddHqZCbV0ILoHYb6PtX.gif')}}" class="img-fluid rounded mision2 my-4"/>
      </div>
      <div class="col-sm-6">
        <p>
          Intruir de manera innovadora con actividades recreativas donde los
          niños pequeños desarrollen habilidades intelectuales y fisicas a
          partir del método de trabajo que implementaremos en nuestra
          aplicación web y movil. Darle un uso a la tecnoligía de hoy en día
          para el beneficio de los demás en especial a las personas que
          necesitan ser guiados en el inicio de sus vidas.
        </p>
      </div>
    </div>

    <div class="row align-items-center m-5 p-4">
      <div class="col-sm-6 col-md-6 text-start">
        <p>
          Lograr que en el 2025 nuestra aplicación web y movil sea tanto usada
          como recomendada en muchos hogares de Popayán como fuente confiable
          de aprendizaje en casa. Queremos ser una de las aplicaciones
          educativas más usadas en la ciudada por niños de escuelas primarias,
          hogarese e independientes. Ser recomendados por nuestra atención y
          servicio hacía nuestros usuarios como también por la calidad de
          nuestro sistema.
        </p>
      </div>
      <div class="col-sm-6">
        <img src="{{asset('/storage/imagenes/xTpsYI08Yf4fK0OdXsvIcgtFXjSl3iVF0vIocaFo.png')}}" class="img-fluid rounded mision1" />
      </div>
    </div>
  </div>


@endsection