<h1>Actualizar</h1>

<form action="{{ route('multimedia.update') }}" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{ $multimedia['id'] }}">
    
     <label for="name">Url</label>
    <input type="file" name="file" id="file" value="{{ $multimedia ['url'] }}">
    <button type="submit">Guardar</button> 
</form>