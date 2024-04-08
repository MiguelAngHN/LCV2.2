<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Learn Cartoon - WEB</title>

    <link rel="stylesheet" href="{{asset('assets/css/actividades/PagOperaciones.css')}}"/>
    <link rel="icon" href="{{asset('assets/images/Logo.webp')}}"/>
</head>

<body class="index-page">
    <header class="headerOperaciones">
        <h1>Bienvenido a Aventuras Matemáticas</h1>
        <p>¡Escoge una operación y comencemos la diversión!</p>
    </header>

    <div class="introOperaciones">
        <div class="capa1Luffy">
            <img class="LuffyOperaciones" src="{{asset('assets/images/Luffy1.webp')}}" alt="Imagen de Luffy">
            <img class="imagenTexto" src="{{asset('assets/images/Texto2.webp')}}" alt="Texto de luffy">
        </div>
    </div>

    <main class="mainOperaciones">
        <section class="operacion">
            <a href="{{route('Suma')}}">
                <h2><span>+</span> Suma</h2>
            </a>
        </section>
        <section class="operacion">
            <a href="{{route('Resta')}}">
                <h2><span>-</span> Resta</h2>
            </a>
        </section>
        <section class="operacion">
            <a href="{{route('Multiplicar')}}">
                <h2><span>×</span> Multiplicación</h2>
            </a>
        </section>
        <section class="operacion">
            <a href="{{route('Dividir')}}">
                <h2><span>÷</span> División</h2>
            </a>
        </section>
        <div class="clearOperaciones"></div>
    </main>

</body>

</html>