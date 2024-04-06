<h1>Actualizar</h1>

<form action="{{ route('tema.update') }}" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{ $tema['id'] }}">
    
     <label for="name">Nombre tema</label>
    <input type="text" name="nombre_tema" id="nombre_tema" value="{{ $tema ['nombre_tema'] }}">
    <label for="email">Descripción</label>
    <input type="text" name="descripcion" id="descripcion" value="{{ $tema ['descripcion'] }}"> 
    <label for="phone">Url de imagen</label>
    <input type="text" name="url_imagen" id="url_imagen" value="{{ $tema ['url_imagen'] }}">
    <label for="address">Seccion id</label>
    <input type="text" name="seccion_id" id="seccion_id" value="{{ $tema ['seccion_id'] }}">
    <button type="submit">Guardar</button> 
</form>