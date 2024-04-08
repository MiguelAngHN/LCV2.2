<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn Cartoon / Aprende a Contar</title>
    <link rel="stylesheet" href="{{asset('assets/css/actividades/ActContar.css')}}">
    <link rel="icon" href="{{asset('assets/images/Logo.webp')}}"/>

</head>

<body>

    <header class="headerContar">
        <h1>Bienvenido a "Contar" de LEARN CARTOON</h1>
    </header>

    <div class="PasosActContar">
        <p>Hola amiguito, estas listo para aprender a contar con Learn Cartoon?
            A continuación, te explicaremos lo que debes hacer en esta actividad, que es muy fácil
            y divertida. Así que preparate para la aventura.<br><br>
            <b>Tu misión es simple:</b> Mira atentamente la imagen con los objetos en la izquierda de
            la pantalla. Usa tus dedos para contar cada uno, así que si levantas un dedo
            sería un objeto, pueden ser animalitos, juguetes o lo que tú quieras.<br>
            Al final, mira tus dedos levantados y será la respuesta.
        </p>
        <img src="{{asset('assets/images/Contar.gif')}}" alt="Globos flotando">
    </div>
    <div class="MensajeInicio">
        <img src="{{asset('assets/images/LogoPos2.webp')}}" alt="Logo">
        <h2> Vamos a contar juntos🏅 </h2>
    </div>

    <div id="contenedor">
        <img id="imagen" class="ImagenAcontar" src="" alt="Imagen de objetos">
        <div id="opciones">
            <button id="opcion1"></button>
            <button id="opcion2"></button>
            <button id="opcion3"></button>
        </div>
        <span id="mensajeContar"></span>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
    iniciarJuego();
});

function iniciarJuego() {
    var imagen = document.getElementById("imagen");
    var opciones = document.getElementById("opciones");
    var opcion1 = document.getElementById("opcion1");
    var opcion2 = document.getElementById("opcion2");
    var opcion3 = document.getElementById("opcion3");
    txt_mensajeContar = document.getElementById('mensajeContar');
    txt_mensajeContar.innerHTML = "";

    // Definir las imágenes y sus propiedades
    var imagenes = [
        {
            src: "{{asset('assets/images/ovejas.webp')}}",
            objetos: 4,
            opciones: [5, 10, 4]
        },
        {
            src: "{{asset('assets/images/Espacio.gif')}}",
            objetos: 2,
            opciones: [3, 2, 9]
        },
        {
            src: "{{asset('assets/images/balones.webp')}}",
            objetos: 5,
            opciones: [8, 5, 2]
        },
        {
            src: "{{asset('assets/images/casas.webp')}}",
            objetos: 7,
            opciones: [4, 2, 7]
        },
        {
            src: "{{asset('assets/images/LC3.webp')}}",
            objetos: 1,
            opciones: [6, 1, 3]
        },
        {
            src: "{{asset('assets/images/dulces.webp')}}",
            objetos: 9,
            opciones: [10, 9, 2]
        }
        // Agrega más imágenes según sea necesario
    ];

    // Variable para almacenar la imagen actual
    var imagenActualIndex = 0;

    // Función para actualizar la interfaz con la nueva imagen y opciones
    function actualizarInterfaz() {
        var imagenActual = imagenes[imagenActualIndex];

        // Actualiza la imagen y opciones en la interfaz
        imagen.src = imagenActual.src;
        opcion1.textContent = imagenActual.opciones[0];
        opcion2.textContent = imagenActual.opciones[1];
        opcion3.textContent = imagenActual.opciones[2];
    }

    // Función para manejar la respuesta del usuario
    function manejarRespuesta(respuestaUsuario) {
        var imagenActual = imagenes[imagenActualIndex];

        // Verifica la respuesta del usuario
        if (respuestaUsuario === imagenActual.objetos) {
            txt_mensajeContar.innerHTML = "Bien contado 🥳";
            txt_mensajeContar.style.color = "blue";
            setTimeout(limpiarContar, 3000);
            // Cambia a la siguiente imagen
            imagenActualIndex = (imagenActualIndex + 1) % imagenes.length;
            setTimeout(actualizarInterfaz, 4000);
        } else {
            txt_mensajeContar.innerHTML = "Oh no, intenta de nuevo🤭";
            txt_mensajeContar.style.color = "red";
            setTimeout(limpiarContar, 2000);
        }
    }

    // Manejadores de eventos para las opciones de respuesta
    opcion1.addEventListener("click", function () {
        manejarRespuesta(parseInt(opcion1.textContent));
    });

    opcion2.addEventListener("click", function () {
        manejarRespuesta(parseInt(opcion2.textContent));
    });

    opcion3.addEventListener("click", function () {
        manejarRespuesta(parseInt(opcion3.textContent));
    });

    function limpiarContar(){
        txt_mensajeContar.innerHTML = "";
    }
    // Inicializar la interfaz
    actualizarInterfaz();
}
    </script>

    {{-- <script src="{{asset('assets/js/juego.js')}}"></script> --}}

</body>

</html>