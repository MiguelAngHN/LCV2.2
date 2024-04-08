<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> @yield('title') - Web </title>
    <link rel="icon" href="{{asset('assets/images/Logo.webp')}}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/hmf.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/estilosIndex.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/estilosSeccions.css') }}">
    <script
      src="https://kit.fontawesome.com/5191364857.js"
      crossorigin="anonymous"
    ></script>

    <!-- MenuNav / Carrousel----------- -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"/>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"></script>
  </head>
  <body>

    <header class="header">
        <a href="{{route('home')}}"><img class="logo" src="{{asset('assets/images/Logo.webp')}}" alt="Logo Learn Cartoon"/></a>
        <div class="TituloLema">
        <h1 class="Titulo-Cabecera">Learn Cartoon</h1>
        <h2 class="Subtitulo-Cabecera">Pasos de hoy, caminos del mañana</h2>
      </div>
      </header>

      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="{{route('home')}}">Inicio</a>
              </li>
  
              {{-- <li class="nav-item">
                <a class="nav-link" href="">USUARIO LC</a>
              </li> --}}
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Secciones
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a class="dropdown-item" href="{{route('seccions.index')}}">Introducción</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="{{route('temas.index')}}">Números</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="{{route('seccions.lyp')}}">Letras y palabras</a>
                  </li>
                  <!-- <li><hr class="dropdown-divider"></li> -->
                  <li>
                    <a class="dropdown-item" href="{{route('bocetos.index')}}">Bocetos</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="{{route('seccions.dibujo')}}">Dibujo</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Sobre nosotros
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a class="dropdown-item" href="{{route('nosotros')}}">Quienes somos</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="{{route('misionYvision')}}">Misión y Visión</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('contactenos')}}">Contactenos</a>
              </li>
            </ul>
          </div>
          <div class="authNav d-flex justify-content-end">
            
            @if (auth()->check())
            <a class="nav-link p-2" aria-current="page" href="{{route('perfil')}}"><b>{{auth()->user()->nombre_usuario}}</b></a>
            <button class="btn bg-danger"><a class="text-decoration-none" href="{{route('login.destroy')}}">Cerrar sesión</a></button>
            @else
              <button class="btn"><a class="text-decoration-none" href="{{route('usuarios.create')}}">Registrarme</a></button>
              <button class="btn"><a class="text-decoration-none" href="{{route('login.index')}}">Iniciar Sesión</a></button>
            @endif  
          </div>
        </div>
      </nav>

      <div class="TituloPag">
        <div class="TituloPagBorder">
          <p>@yield('nombreSeccion')</p>
          <p id="fecha-actual"></p>
          <script src="{{ asset ('assets/js/Current Date.js') }}"></script>
        </div>
      </div>

      <div class="InfoSecciones">
      <div class="prsSeccion">
      <div class="ImgSeccion">
        @yield('ImgSeccion')
        <p> @yield('nombreSeccion') </p>
      </div>
      <div class="ImgNumeros">
        @yield('prsSeccion')
      </div>
      </div>
      <hr noshade="" class="HR1">


      @yield('content')
      </div>

      <footer class="Footer">
        <div class="SVG" style="height: 150px; overflow: hidden">
          <svg
            viewBox="0 0 500 150"
            preserveAspectRatio="none"
            style="height: 100%; width: 100%"
          >
            <path
              d="M0.00,50.10 C150.00,150.33 349.20,-50.10 500.00,50.10 L500.00,150.33 L0.00,150.33 Z"
              style="stroke: none; fill: #242528"
            ></path>
          </svg>
        </div>
        <div class="Contacto">
          <div class="Redes">
            <h2>Nuestras Redes</h2>
            <a href="https://es-la.facebook.com/"
              ><i class="fa-brands fa-facebook"></i
            ></a>
            <a href="https://twitter.com/?lang=es"
              ><i class="fa-brands fa-twitter"></i
            ></a>
            <a href="https://www.instagram.com/"
              ><i class="fa-brands fa-instagram"></i
            ></a>
          </div>
          <div class="Correo">
            <h2>Contacto:</h2>
            <p>learncartoon@gmail.com</p>
          </div>
          <div class="Telefono">
            <h2>Telefono:</h2>
            <p>01 8000 123 456</p>
          </div>
        </div>
        <div class="Derechos">
          <p>&reg; 2023 LEARN CARTOON, COLOMBIA, TODOS LOS DERECHOS RESERVADOS</p>
        </div>
      </footer>
  
  </body>
</html>