{{-- @extends('layouts.hmf')

@section('title','Learn Cartoon / Actualizar seccion')

@section('content')

<div class ="container m-2 p-3 rounded" style="font-family: Comic Sans MS; background-color: white;">
<h1>Actualizar</h1>

<form action="{{ route('usuario.update') }}" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{ $user['id'] }}">
    
    <label for="name">Nombre usuario</label>
    <input type="text" name="nombre_usuario" id="name" value="{{ $user ['nombre_usuario'] }}">
    <label for="email">Email</label>
    <input type="email" name="email" id="email" value="{{ $user ['email'] }}"> 
    <label for="phone">Contraseña</label>
    <input type="password" name="password" id="phone" value="{{ $user ['password'] }}">
    <button class="btn" style="background-color: #38B6FF;" type="submit">Guardar</button> 
</form>
</div>
@endsection --}}

{{-- ------------- --}}

@extends('layouts.hmf')

@section('title', 'Learn Cartoon / Perfil')

@section('content')

<div class="container">

    <!-- row de learn cartoon-->
<div class="container text-center mx-auto m-5 border bg-light rounded" style="font-family: Comic Sans MS;">
   <div class="row align-items-center">
     <div class="col text-center">
      <!-- card de foto de perfil -->
      <div class="card border-0 " style="width: 18rem;">
       <img src="https://th.bing.com/th/id/OIP.4tNpv-M4gDRxAYWlrqlsUQHaHa?w=176&h=180&c=7&r=0&o=5&pid=1.7" class="card-img-top rounded-circle" alt="foto de perfil">
       <div class="d-grid gap-2">
         <h5 class="card-title">Foto de perfil</h5>
         <p><b>{{$user ['nombre_usuario']}} 🥇😎</b></p>
         {{-- <p>{{auth()->user()->nombre_usuario}}</p> --}}
         <a href="#" class="btn btn-primary m-2">Subir</a>
       </div>
     </div>
     </div>
     <div class="col">

       <div class="col bg-light rounded">

           <h2 class="fw-bold text-center py-5">Actulizar datos</h2>


           <form action="{{ route('usuario.update') }}" method="POST" class=" text-start">
            @csrf
            <input type="hidden" name="id" value="{{ $user['id'] }}">

             <div class="mb-3">
            <input type="text" class="form-control" name="nombre_usuario" value="{{ $user ['nombre_usuario'] }}" placeholder="Nombre usuario"/>
             </div>
 
             <div class="mb-3">
               <input type="email" class="form-control" name="email" value="{{ $user ['email'] }}" placeholder=" Correo:"/>
             </div>
 
             <div class="mb-3">
               <input type="password" class="form-control" name="password" value="{{ $user ['password'] }}" placeholder=" Contraseña" />
             </div>
             
             <div class="d-grid mb-1">
               <button type="submit" class="btn" style="background-color: #38B6FF;">
                 Enviar
               </button>
             </div>
             
           </form>
 
          
          
         </div>
     </div>
   </div>
 </div>
<!-- barra de progreso -->
 <div class="row border bg-light">
   <h1>Registro de actividad:</h1>
   <div class=" card d-flex align-items-center justify-content-center bg-primary flex-grow-1 m-1" style="width:auto; height: auto;">
     
     <!-- barra de progeso 1 -->
     <div class="svg">
       <svg width="250" height="250">
          <svg width="250" height="250">
         <circle
         r="100"
         cx="125"
         cy="125"
         class="progreso2"
       >
     
     </circle>
         <circle
           r="100"
           cx="125"
           cy="125"
           class="progreso"
           id="progreso"
         ></circle>
       </svg>
       </svg>
   </div>
   <div class="caja_porcentage d-flex justify-content-center">
     <p class="porcentage text-white" id="porcentage" style="font-size:2rem; font-weight: bold;"></p>
   </div>
   <div class="text-white">
     <h1>uno</h1>
   </div>

     
   </div>

   <div class="card d-flex align-items-center justify-content-center bg-primary flex-grow-1 m-1" style="width:auto; height: auto;">
     <!-- barra de progreso2 -->
     <div class="svg">
       <svg width="250" height="250">
          <svg width="250" height="250">
         <circle
         r="100"
         cx="125"
         cy="125"
         class="progreso2"
       >
     
     </circle>
         <circle
           r="100"
           cx="125"
           cy="125"
           class="progreso"
           id="progreso1"
         ></circle>
       </svg>
       </svg>
   </div>

   <div class="caja_porcentage d-flex justify-content-center">
     <p class="porcentage text-white" id="porcentage1" style="font-size:2rem; font-weight: bold;"></p>
   </div>
   <div class="text-white">
     <h1>dos</h1>
   </div>
 </div>
   <div class="card d-flex align-items-center justify-content-center bg-primary flex-grow-1 m-1" style="width:auto; height: auto;">
     <!-- barra de progreso2 -->
     <div class="svg">
       <svg width="250" height="250">
          <svg width="250" height="250">
         <circle
         r="100"
         cx="125"
         cy="125"
         class="progreso2"
       >
     
     </circle>
         <circle
           r="100"
           cx="125"
           cy="125"
           class="progreso"
           id="progreso1"
         ></circle>
       </svg>
       </svg>
   </div>

   <div class="caja_porcentage d-flex justify-content-center">
     <p class="porcentage text-white" id="porcentage1" style="font-size:2rem; font-weight: bold;"></p>
   </div>
   <div class="text-white">
     <h1>tres</h1>
   </div>
 </div>




</div>

<!-- estilo de cunta lc js -->
<script src="js/scrip.js"></script>


@endsection