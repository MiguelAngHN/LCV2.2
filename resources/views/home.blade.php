@extends('layouts.hmf')

@section('title', 'Learn Cartoon / Home')

@section('content')

<div class="InfoSecciones">
    <h2 class="InicioPP">¡Aprende y Diviértete!</h2>

    <!-- ---------------Carrusel--------------- -->

    <div class="Carrusel">
      <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img
              src="{{asset('assets/images/Carrusel1.webp')}}"
              class=" d-block w-100"
              alt="Banner 1"/>
          </div>
          <div class="carousel-item">
            <img
            class="rounded d-block w-100"
              src="{{asset('assets/images/vision.png')}}"
              alt="Banner 2"/>
          </div>
          <div class="carousel-item">
            <img
              src="{{asset('assets/images/Anime.gif')}}"
              class="rounded d-block w-100"
              alt="Banner 3"/>
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleAutoplaying"
          data-bs-slide="prev">
          <span
            class="carousel-control-prev-icon text-bg-primary"
            aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleAutoplaying"
          data-bs-slide="next">
          <span
            class="carousel-control-next-icon text-bg-primary"
            aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div><br>


    <!-- ----------------------------------------------- -->
    <section class="Introduccion1">
      <img src="{{asset('assets/images/Goku-A.gif')}}" alt="Imagen de Goku">      
      <p>
        Nos enfocamos en caracterisarnos por nuestro interes y compromiso al
        brindar nuestros servicios con secciones, cada una con niveles de
        dificultad como también:<br><br>
        - Juegos didacticos y divertidos.<br>
        - Plantillas y dibujos.<br>
        - Interacción con personajes de anime y animaciones.<br>
      </p>
    </section>

    <section class="Introduccion2">
      <p>
        A través de plataformas digitales, videos, imagenes, juegos entre
        otros contenidos eduactivos. La tecnología brinda a los niños la
        oportunidad de explorar nuevos conociminetos, desarrollar
        habilidades y expandir su creatividad con los que evidencian con
        esta mundo tecnologico educativo desde cualquier lugar y momento.
      </p>
      <img src="{{asset('assets/images/Niños.gif')}}" alt="Imagen Educativa" />
      </section>

    <main class="ContenidoAdicional">
      <section class="banner">
                  <h2>Contenido que te podría gustar</h2>
                  <p>Explora nuestro mundo interactivo lleno de juegos educativos y actividades emocionantes.</p>
                  <a href="{{route('seccions.index')}}" class="cta-button">¡Comienza ahora!</a>
                </section>
                
                <section class="features">
                  <div class="feature">
                    <a href="#"> <img src="{{asset('assets/images/dibujo1.gif')}}" alt="Juegos"></a>
                    <h3> Colorea y pinta. 🎨</h3>
                    <p>Disfruta de usar tu imaginación. Todos los colores disponibles al uso 
                        que quieras.
                    </p>
                  </div>
                  
                  <div class="feature">
                    <a href="#"><img src="{{asset('assets/images/Bocetos1.gif')}}" alt="Actividades"></a>
                    <h3>Escoje a tu preferencia.</h3>
                    <p> Si deseas una guia no te preocupes tienes la ayuda necesaria para empezar 
                        tus pinturas.
                    </p>
                  </div>
                  
                  <div class="feature2">
                    <a href="#"><img src="{{asset('/assets/images/Espacio.gif')}}" alt="Premios"></a>
                    <h3>Diviértete y aprende.</h3>
                    <p>Supera desafíos, recuerda que siempre hay seguir aprendiendo.</p>
                  </div>
                </section>
    </main>
  </div>

      <!-- Botón de "Volver arriba" -->
      <div id="go-to-top" class="hidden">
        <a href="#top">"¡A volar! 🐱‍🏍" </a>
    </div>
    <script src="{{ asset('assets/js/Volver Arriba.js')}}"></script>

@endsection