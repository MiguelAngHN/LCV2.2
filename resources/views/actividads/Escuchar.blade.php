<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Learn Cartoon / Escuchar - Web </title>
    <link rel="stylesheet" href="{{asset('assets/css/estilosAct.css')}}">
    <link rel="icon" href="{{asset('assets/images/Logo.webp')}}">
    <script src="https://kit.fontawesome.com/5191364857.js" crossorigin="anonymous"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
</head>

<body>
    <header class="HeaderEscuchar">
        <h1>Bienvenido a "Escuchar" de LEARN CARTOON</h1>
        <p>Recuerda los sonidos y tambien su forma!</p>
    </header>

    <div class="InicioEscuchar">
        <p> En este nivel te vamos a enseñar a familiarizarte con el sonido de los números para
            que puedas reconocer, escribir y pronunciar de manera correcta los números. 🧒🔊<br><br>
            A continuación te mostramos los audios del 1 al 10 para empezar. Luego seguiremos incrementando la
            dificultad con más números.</p>
        <img src="{{asset('assets/images/Escuchar.gif')}}">
    </div>

    <div class="ContenidoEscuchar">
        <div class="Presentacion">
            <h2> Tu amigo Doraemon te ayuda a aprender!!</h2> <br>
            <p>Toca el icono de play "▶" y escucha cada audio
                del número. No olvides ver su forma con la imagen de arriba.</p>
            <img src="{{asset('assets/images/ImgNumeros/doraemon.webp')}}" alt="doraemon">
        </div>

        <div class="AudioNumeros">
            <div class="AnimacionPlay">
                <img src="{{asset('assets/images/ImgNumeros/Numero_1.webp')}}">
                <audio controls class="Audios" onplay="startAnimation(this)">
                    <source src="{{asset('assets/audios/UnoEscuchar.mp3')}}" type="audio/mp3">
                </audio>
            </div>

            <div class="AnimacionPlay">
                <img src="{{asset('assets/images/ImgNumeros/Numero_2.webp')}}">
                <audio controls class="Audios" onplay="startAnimation(this)">
                    <source src="{{asset('assets/audios/DosEscuchar.mp3')}}" type="audio/mp3">
                    </audio>
            </div>

            <div class="AnimacionPlay">
                <img src="{{asset('assets/images/ImgNumeros/Numero_3.webp')}}">
                <audio controls class="Audios" onplay="startAnimation(this)">
                    <source src="{{asset('assets/audios/TresEscuchar.mp3')}}" type="audio/mp3">
                    </audio>
            </div>

            <div class="AnimacionPlay">
                <img src="{{asset('assets/images/ImgNumeros/Numero_4.webp')}}">
                <audio controls class="Audios" onplay="startAnimation(this)">
                    <source src="{{asset('assets/audios/Cuatro.mp3')}}" type="audio/mp3">
                    </audio>
            </div>

            <div class="AnimacionPlay">
                <img src="{{asset('assets/images/ImgNumeros/Numero_5.webp')}}">
                <audio controls class="Audios" onplay="startAnimation(this)">
                    <source src="{{asset('assets/audios/Cinco.mp3')}}" type="audio/mp3">
                    </audio>
            </div>

            <div class="AnimacionPlay">
                <img src="{{asset('assets/images/ImgNumeros/Numero_6.webp')}}">
                <audio controls class="Audios" onplay="startAnimation(this)">
                    <source src="{{asset('assets/audios/Seis.mp3')}}" type="audio/mp3">
                    </audio>
            </div>

            <div class="AnimacionPlay">
                <img src="{{asset('assets/images/ImgNumeros/Numero_7.webp')}}">
                <audio controls class="Audios" onplay="startAnimation(this)">
                    <source src="{{asset('assets/audios/Siete.mp3')}}" type="audio/mp3">
                    </audio>
            </div>

            <div class="AnimacionPlay">
                <img src="{{asset('assets/images/ImgNumeros/Numero_8.webp')}}">
                <audio controls class="Audios" onplay="startAnimation(this)">
                    <source src="{{asset('assets/audios/Ocho.mp3')}}" type="audio/mp3">
                    </audio>
            </div>

            <div class="AnimacionPlay">
                <img src="{{asset('assets/images/ImgNumeros/Numero_9.webp')}}">
                <audio controls class="Audios" onplay="startAnimation(this)">
                    <source src="{{asset('assets/audios/Nueve.mp3')}}" type="audio/mp3">
                </audio>
            </div>

            <div class="AnimacionPlay">
                <img src="{{asset('assets/images/ImgNumeros/Numero_10.webp')}}">
                <audio controls class="Audios" onplay="startAnimation(this)">
                    <source src="{{asset('assets/audios/DIez.mp3')}}" type="audio/mp3">
                    </audio>
            </div>
        </div>
    </div>

    <div id="contenedorOculto">
        <div id="contenidoOculto" class="oculto">
            <!-- Aquí colocarás tu contenido -->
            <h2 class="TituloOculto">Ahora escucha estos números un poco más elevados</h2>

            <div class="ContenidoEscuchar">
                <div class="AudioNumeros2">
                    <div class="AnimacionPlay">
                        <img src="{{asset('assets/images/ImgNumeros/Numero_11.webp')}}">
                        <audio controls class="Audios" onplay="startAnimation(this)">
                            <source src="{{asset('assets/audios/once.wav')}}" type="audio/wav">
                            </audio>
                    </div>

                    <div class="AnimacionPlay">
                        <img src="{{asset('assets/images/ImgNumeros/Numero_12.webp')}}">
                        <audio controls class="Audios" onplay="startAnimation(this)">
                            <source src="{{asset('assets/audios/doce.wav')}}" type="audio/wav">
                            </audio>
                    </div>

                    <div class="AnimacionPlay">
                        <img src="{{asset('assets/images/ImgNumeros/Numero_13.webp')}}">
                        <audio controls class="Audios" onplay="startAnimation(this)">
                            <source src="{{asset('assets/audios/trece.wav')}}" type="audio/wav">
                            </audio>
                    </div>

                    <div class="AnimacionPlay">
                        <img src="{{asset('assets/images/ImgNumeros/Numero_14.webp')}}">
                        <audio controls class="Audios" onplay="startAnimation(this)">
                            <source src="{{asset('assets/audios/catorce.wav')}}" type="audio/wav">
                            </audio>
                    </div>

                    <div class="AnimacionPlay">
                        <img src="{{asset('assets/images/ImgNumeros/Numero_15.webp')}}">
                        <audio controls class="Audios" onplay="startAnimation(this)">
                            <source src="{{asset('assets/audios/quince.wav')}}" type="audio/wav">
                            </audio>
                    </div>

                    <div class="AnimacionPlay">
                        <img src="{{asset('assets/images/ImgNumeros/Numero_16.webp')}}">
                        <audio controls class="Audios" onplay="startAnimation(this)">
                            <source src="{{asset('assets/audios/diesiseis.wav')}}" type="audio/wav">
                            </audio>
                    </div>

                    <div class="AnimacionPlay">
                        <img src="{{asset('assets/images/ImgNumeros/Numero_17.webp')}}">
                        <audio controls class="Audios" onplay="startAnimation(this)">
                            <source src="{{asset('assets/audios/diesisiete.wav')}}" type="audio/wav">
                            </audio>
                    </div>

                    <div class="AnimacionPlay">
                        <img src="{{asset('assets/images/ImgNumeros/Numero_18.webp')}}">
                        <audio controls class="Audios" onplay="startAnimation(this)">
                            <source src="{{asset('assets/audios/diesiocho.wav')}}" type="audio/wav">
                            </audio>
                    </div>

                    <div class="AnimacionPlay">
                        <img src="{{asset('assets/images/ImgNumeros/Numero_19.webp')}}">
                        <audio controls class="Audios" onplay="startAnimation(this)">
                            <source src="{{asset('assets/audios/diesinueve.wav')}}" type="audio/wav">
                            </audio>
                    </div>

                    <div class="AnimacionPlay">
                        <img src="{{asset('assets/images/ImgNumeros/Numero_20.webp')}}">
                        <audio controls class="Audios" onplay="startAnimation(this)">
                            <source src="{{asset('assets/audios/veinte.wav')}}" type="audio/wav">
                            </audio>
                    </div>

                </div>
            </div>

            <h2 class="TituloOculto">Intenta estos números mas grandes para terminar</h2>

            <div class="contenedorEscuchar">
                <div class="audio-card">
                    <div class="audio-title">Número Treinta</div>
                    <div class="audio-image">
                        <img src="{{asset('assets/images/ImgNumeros/Numero_30.webp')}}" alt="Imagen Numero 30">
                    </div>
                    <div class="audio-player">
                        <audio controls>
                            <source src="{{asset('assets/audios/treinta.wav')}}" type="audio/wav">
                            </audio>
                    </div>
                </div>

                <div class="audio-card">
                    <div class="audio-title">Número Cuarenta</div>
                    <div class="audio-image">
                        <img src="{{asset('assets/images/ImgNumeros/Numero_40.webp')}}" alt="Imagen Numero 40">
                    </div>
                    <div class="audio-player">
                        <audio controls>
                            <source src="{{asset('assets/audios/cuarenta.wav')}}" type="audio/wav">
                            </audio>
                    </div>
                </div>

                <div class="audio-card">
                    <div class="audio-title">Número Cincuenta</div>
                    <div class="audio-image">
                        <img src="{{asset('assets/images/ImgNumeros/Numero_50.webp')}}" alt="Imagen Numero 50">
                    </div>
                    <div class="audio-player">
                        <audio controls>
                            <source src="{{asset('assets/audios/cincuenta.wav')}}" type="audio/wav">
                            </audio>
                    </div>
                </div>
            </div>

        </div>
        <button id="btnMostrar">Aumentemos la dificultad 💪</button>
    </div>
    <!-- Botón de "Volver arriba" -->
    <div id="go-to-top" class="hidden">
        <a href="#top">"¡A volar! 🐱‍🏍" </a>
    </div>
    <script src="{{asset('assets/js/Volver Arriba.js')}}"></script>



</body>

</html>