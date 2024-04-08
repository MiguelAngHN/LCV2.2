<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link rel="icon" href="{{asset('/storage/imagenes/qUEkFthiybEZIoJ3bUZRB8g6NGy2t2CSyZx6oiY5.webp')}}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/hmf.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/estilosIndex.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Login.css') }}">    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body class="login">
     <!-- login -->
     <div class="container w-75 bg-primary mt-5 rounded shadow my-4">
        <div class="row align-items-stretch">
          <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded">
  <!-- imagen de login inicial -->
  <!-- <img src="img/Logo.webp" class="text-center" width="150px" alt="imagen_flotante_login"> -->

  <div class="row align-items-center h-100 contenedor_bienevevido_login ">
    <div class="text-center text-primary " style="font-weight: 900px;">
      <img src="{{asset('assets/images/Logo.webp')}}" class="text-center logo_flotante" width="150px" alt="imagen_flotante_login">
      <p class="bienvenido_border ">Registrarse</p>
      <p class="bienvenido text-md " >Registrarse</p>
      <!-- <p class="bienvenido">WELCOME</p> -->
      
    </div>
  </div>

  <!-- ------------------- -->
  
  
          </div>
          <div class="col bg-white rounded-end">
  
            <div class="text-end d-none d-md-block">
              <img src="{{asset('assets/images/Logo.webp')}}" width="48" alt="imagen prueba" style="border-radius: 60px;">
            </div>
            
            <h2 class="fw-bold text-center py-5">Registrarse en Learn Cartoon</h2>
            <!--Formulario login -->

            <form action="{{route('usuarios.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="mb-4">
                <label for="email" class="form-label">Nombre de usuario:</label>
                <input type="text" class="form-control" name="nombre_usuario" required/>
              </div>
              @error('nombre_usuario')
              <p class="text-bg-danger p-3">{{$message}}*</p>
              @enderror
              <div class="mb-4">
                <label for="email" class="form-label">Correo:</label>
                <input type="email" class="form-control" name="email"  required/>
              </div>
              @error('email')
              <p class="text-bg-danger p-3">{{$message}}*</p>
              @enderror
              <div class="mb-4">
                <label for="password" class="form-label">Contraseña:</label>
                <input type="password" class="form-control" name="password"  required/>
              </div>
              @error('password')
              <p class="text-bg-danger p-3">{{$message}}*</p>
              @enderror
  
              <div class="d-grid">
                <button type="submit" class="btn" style="background-color: #38b6ff;">
                  Registrar
                </button>
              </div>
              <div class="my-3">
                <span>Ya tengo una cuenta <a href="{{route('login.index')}}"> Login </a></span><br><br>
              </div>
            </form>
  
          </div>
        </div>
      </div>




     <!-- dependencias de bootstrap5 -->
     <script
     src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
     crossorigin="anonymous"
   ></script>
   <script
     src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
     integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
     crossorigin="anonymous"
   ></script>
   <script
     src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
     integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
     crossorigin="anonymous"
   ></script>
   <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
   
    
</body>
</html>