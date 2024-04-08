@extends('layouts.hmf')

@section('title', 'Learn Cartoon / Secciones')

@section('content')

<div class="TituloPag">
    <p>Secciones</p>
    <p id="fecha-actual"></p>
    <script src="{{ asset ('assets/js/Current Date.js') }}"></script>
</div>

<div class="InfoSecciones">
        <!-- contenido de las secciones -->
        <div class="container" style="font-family: comic sans ms;">
            <div class="lineSeccion row">
              <h1 class="text-center">Secciones</h1>
              <div class="col-md-4 my-2">
                <div class="card flex card-1" style="width: 16rem">
                  <div class="card-body rounded contenido_card">
                    <img
                      src="{{asset('assets/images/numeros.png')}}"
                      class="card-img-top"
                      alt="..."
                      style="height: 200px"/>
                    <h5 class="card-title">Numeros</h5>
                    <p class="card-text">
                      Te gustan los números, aprende con ellos. Te brindamos un
                      aprendizaje facil limitando la cantidad de números hasta 50.
                      Vamos adentrate a este facinante mundo y comencemos nuestra
                      aventura numérica.🎉 💯
                    </p>
                  </div>
      
                  <div class="listado_oculto text-white">
                    <ul class=" justify-content-center">
                      <li class="lista_targeta my-3 p-2"><a href="{{route('temas.index')}}" class="text-white" style="text-decoration: none;">Escuchar</a></li>
                      <li class="lista_targeta my-3 p-2"><a href="{{route('temas.index')}}" class="text-white" style="text-decoration: none;">Contar</a></li>
                      <li class="lista_targeta my-3 p-2"><a href="{{route('temas.index')}}" class="text-white" style="text-decoration: none;">Matematicas</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-4 my-2">
                <div class="card flex" style="width: 16rem">
                 
                  <div class="card-body rounded contenido_card">
                    <img
                    src="{{asset('assets/images/ltspalabras.gif')}}"
                    class="card-img-top"
                    alt="..."
                    style="height: 200px"/>
                    <h5 class="card-title">Letras y palabras</h5>
                    <p class="card-text">
                      Puedes distraerte, aprender y divertirte escribiendo como
                      también puedes formar palabras. Conoscan sus emociones, aprendan
                      más conocimientos y alimenten su imaginación
                    </p>
                  </div>
                  <div class="listado_oculto bg-danger">
                    <ul>
                      <li class="lista_targeta my-3 p-2"><a href="{{route('seccions.lyp')}}" class="text-white" style="text-decoration: none;">Vocales</a></li>
                      <li class="lista_targeta my-3 p-2"><a href="{{route('seccions.lyp')}}" class="text-white" style="text-decoration: none;">Abecedario</a></li>
                      <li class="lista_targeta my-3 p-2"><a href="{{route('seccions.lyp')}}" class="text-white" style="text-decoration: none;">Oraciones Completas</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-4 my-2">
                <div class="card flex" style="width: 16rem">
                 
                  <div class="card-body rounded contenido_card">
                    <img
                    src="{{asset('assets/images/dibujo.gif')}}"
                    class="card-img-top"
                    alt="..."
                    style="height: 200px"/>
                    <h5 class="card-title">Bocetos</h5>
                    <p class="card-text">
                      Dibuja, colorea personajes de anime y animaciones.🌈 Lo mejor es
                      que puedes interarctuar con ellos navegando por las secciones.
                      Elige el que mas te guste y a PINTAR.
                    </p>
                  </div>
                  <div class="listado_oculto bg-danger">
                    <ul>
                      <li class="lista_targeta my-3 p-2"><a href="{{route('bocetos.index')}}" class="text-white" style="text-decoration: none;">Bocetos</a></li>
                      <li class="lista_targeta my-3 p-2"><a href="{{route('seccions.dibujo')}}" class="text-white" style="text-decoration: none;">Dibujo</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
</div>

@endsection