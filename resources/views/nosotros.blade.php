@extends('layouts.hmf')

@section('title', 'Learn Cartoon / Sobre nosotros')

@section('content')

    <div class="container bg-light rounded" style="font-family: Comic Sans MS">
      <h1 class="text-center">Sobre nosotros</h1>

      <div class="row align-items-center my-5">
        <div class="col-sm-6 col-md-6 text-start">
          <p>
            Nuestro proyecto empieza por generar una solución a un problema el
            cuál es la de brindar educación, conocimiento basico a niños que
            todavía no han ingresado a escuelas o jardines. Ya sean por
            diferentes inconvenientes.
          </p>
        </div>
        <div class="col-sm-6 ">
          <img src="{{asset('assets/images/mision1.png')}}" class="img-fluid rounded mision1"/>
        </div>
      </div>

      <div class="row align-items-center my-5">
        <div class="col-sm-6 col-md-6 text-start">
          <!-- <h5>Beneficios de DentalTecnology:</h5> -->
          <img src="{{asset('assets/images/imagen10.png')}}" class="img-fluid rounded mision2 p-2 m-3" />
        </div>
        <div class="col-sm-6 ">
          <p>
            Por ende pensamos en desarrollar un proyecto Web y movil donde se
            eduque de una manera más moderna, con ayuda de la tecnologia
            lograremos lo propuesto. Implementando secciones y juegos los cuales
            son interactivos con el infante por medio del anime y la animación
            haciendo que se sienta más comodo, también atraido a la educación
            usando estos medios entretenidos y populares. Así mismo estamos
            implementando el buen uso de herramientas tecnológicas para fomentar
            estrategias de aprendizaje, mejorando el aprendizaje y educación de
            los niños que son el futuro.
          </p>
        </div>
      </div>
    </div>

@endsection