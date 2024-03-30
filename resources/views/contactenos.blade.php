@extends('layouts.hmf')

@section('title', 'Learn Cartoon / Contactenos')

@section('content')

<div class="container bg-light" style="font-family: Comic Sans MS;">
    <h1 class="text-center">Contactenos</h1>
  <div class=" w-80 border mt-5 rounded shadow m-1">
    <div class="row align-items-stretch">
      <div class="col imagen_contactenos d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded">

<div class="row align-items-center h-100 contenedor_bienevevido_login ">
<div class="text-center text-primary " style="font-weight: 900px;">
    <div class="text-start text-white text-primary rounded contenedor_contactanos1" style="font-size: 1rem;">
        <h1 class="py-5">Contacto</h1>
        <p>En nuestro formulario puedes escribir tus mensaje con información del usuario para proporcionarte una respuesta adecuada. Completa las casillas con la respectiva información
            y escribe tu mensaje en la caja. Estaremos encantados de recibir mensajes de nuestros amiguitos. 😀<br><br>Gracias por ponerte en contacto con nosotros.</p>    
    </div>
</div>
</div>
</div>
<!-- ------------------- -->
      <div class="col bg-white rounded-end">

        <div class="text-end d-none d-md-block">
          <img src="{{asset('/storage/imagenes/FEyxJrLeygskXtG4SGIlO8t10KvSMZjNSjc9MVve.webp')}}" width="48" alt="imagen prueba" style="border-radius: 60px;">
        </div>
        
        <h2 class="fw-bold text-center py-5">Contactenos</h2>
        <!-- login -->
        <form action="#">
          <div class="mb-4">
            <!-- <label for="email" class="form-label">Nombres:</label> -->
            <input type="text" class="form-control border border-info rounded-pill" name="name" placeholder="Nombres:" />
          </div>

          <div class="mb-4">
            <!-- <label for="text" class="form-label">Apellido:</label> -->
            <input type="text" class="form-control border border-info rounded-pill" name="text" placeholder="Apellido:" />
          </div>
          <div class="mb-4">
            <!-- <label for="number" class="form-label">Telefono:</label> -->
            <input type="number" class="form-control border border-info rounded-pill" name="number" placeholder="Telefono:" />
          </div>
          <div class="mb-4">
            <!-- <label for="email" class="form-label">Correo:</label> -->
            <input type="email" class="form-control border border-info rounded-pill" name="email" placeholder="Correo:" />
          </div>
          
          <div class="mb-4">
            <textarea class="border border-info rounded w-100"
            name="mensaje"
            class="form-control"
            placeholder="Introduzca su mensaje"></textarea>
          </div>

          <div class="d-grid">
            <button type="submit" class="btn btn-primary">
              Enviar
            </button>
          </div>
          <div class="my-3">
          </div>
        </form>
      </div>
    </div>
  </div>
  </div>


@endsection