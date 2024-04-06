<h1>Actualizar</h1>

<form action="{{ route('usuario.update') }}" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{ $user['id'] }}">
    
     <label for="name">Nombre</label>
    <input type="text" name="nombre_usuario" id="name" value="{{ $user ['nombre_usuario'] }}">
    <label for="email">Email</label>
    <input type="email" name="email" id="email" value="{{ $user ['email'] }}"> 
    <label for="phone">Contraseña</label>
    <input type="password" name="password" id="phone" value="{{ $user ['password'] }}">
    <label for="address">Rol</label>
    <input type="text" name="rol" id="address" value="{{ $user ['rol'] }}">
    <button type="submit">Guardar</button> 
</form>