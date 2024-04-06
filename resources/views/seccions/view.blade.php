<h1>Actualizar</h1>

<form action="{{ route('seccion.update') }}" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{ $seccion['id'] }}">
    
     <label for="name">Nombre seccion</label>
    <input type="text" name="nombre_seccion" id="nombre_seccion" value="{{ $seccion ['nombre_seccion'] }}">
    <label for="email">Usuario id</label>
    <input type="email" name="user_id" id="user_id" value="{{ $seccion ['user_id'] }}"> 
    <button type="submit">Guardar</button> 
</form>