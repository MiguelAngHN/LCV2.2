<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('assets/css/Login.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body class="login">

    <!-- login -->
    <div class="container bg-danger w-75 bg-primary mt-5 rounded shadow  contenedor_login" id="plantilla-nav">
        <div class="row align-items-stretch">
          <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded">
  <!-- imagen de login inicial -->
  <!-- <img src="img/Logo.webp" class="text-center" width="150px" alt="imagen_flotante_login"> -->


  <div class="row align-items-center flex-graw h-100  contenedor_bienevevido_login">
    <div class="text-center text-primary  " style="font-weight: 900px;">
      <img src="{{asset('/storage/imagenes/FEyxJrLeygskXtG4SGIlO8t10KvSMZjNSjc9MVve.webp')}}" class="text-center logo_flotante" width="150px" alt="imagen_flotante_login">
      <p class="bienvenido_border ">WELCOME</p>
      <p class="bienvenido text-md " >WELCOME</p>
      
    </div>
  </div>

  <!-- ------------------- -->
  
  
          </div>
          <div class="col bg-white rounded-end">
  
            <div class="text-end d-none d-md-block">
              <img src="{{asset('/storage/imagenes/FEyxJrLeygskXtG4SGIlO8t10KvSMZjNSjc9MVve.webp')}}" width="48" alt="imagen prueba" style="border-radius: 60px;">
            </div>
            
            <h2 class="fw-bold text-center py-5">Iniciar Sesión</h2>
            <!-- login -->
            <form action="" method="POST">
              @csrf
              <div class="mb-4">
                <label  class="form-label">Correo electronico</label>
                <input type="email" class="form-control" name="email" required/>
              </div>
  
              <div class="mb-4">
                <label  class="form-label">Contraseña</label>
                <input type="password" class="form-control" name="password" required/>
              </div>
              {{-- <div class="mb-4">
                <input
                  type="checkbox"
                  name="connected"
                  class="form-checkbox-input"
                />
                <label for="connected" class="form-checkbox-label"
                  >Mantener conectado</label
                >
              </div> --}}

              @error('message')
              <p class="text-bg-danger p-3 border border-danger rounded">{{$message}}</p>
              @enderror

              <div class="d-grid">
                <button type="submit" class="btn" style="background-color: #38b6ff;">
                  Iniciar Sesión
                </button>
              </div>
              <div class="my-3">
                <span>No tienes cuenta? <a href="{{route('register.index')}}"> Registrate</a></span><br><br>
                <span>Olvidaste tu contraseña? <a href="recuperar contraseña.html"> Recuperar contraseña</a></span>
              </div>
            </form>
  
            <!-- redes sociales login -->
            <div class="container w-100 my-5">
              <div class="row text-center">
                <div class="col-12">También:</div>
              </div>
              <div class="row">
                <div class="col">
                  <button class="btn w-100 my-1" style="border: solid #38b6ff;">
                    <div class="row align-items-center">
                      <div class="col-2 d-none d-md-block">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                          <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                        </svg>
  
                      </div>
  
                      <div class="col-10 text-center">
                        Inicia con Facebook
                      </div>
  
                    </div>
                    
                  </button>
                </div>
                <div class="col">
                  <button class="btn y w-100 my-1" style="border: solid #38b6ff;">
                    <div class="row align-items-center">
                      <div class="col-2 d-none d-md-block">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 48 48">
                          <path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"></path><path fill="#FF3D00" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"></path><path fill="#4CAF50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"></path><path fill="#1976D2" d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"></path>
                          </svg>
                      </div>
  
                      <div class="col-10 text-center">
                        Inicia con Google
                      </div>
                    </div>
                  </button>
                </div>
              </div>
            </div>

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