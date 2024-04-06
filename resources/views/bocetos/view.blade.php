<h1>Actualizar</h1>

<form action="{{ route('boceto.update') }}" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{ $boceto['id'] }}">
    
     <label for="name">Nombre boceto</label>
    <input type="text" name="nombre_boceto" id="name" value="{{ $boceto ['nombre_boceto'] }}">
    <label for="email">Url</label>
    <input type="text" name="url" id="url" value="{{ $boceto ['url'] }}"> 
    <button type="submit">Guardar</button> 
</form>