<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Learn Cartoon / Actividad / Dividir </title>
    <link rel="stylesheet" href="{{asset('assets/css/actividades/JuegoSuma.css')}}">
    <link rel="icon" href="{{asset('assets/images/Logo.webp')}}" />
</head>

<body>


    <h1>Juego de División </h1>

    <p class="DescripcionSuma">Los desafíos matemáticos no terminan. La división,
        al igual que la multiplicación, es avanzada e importante.
        En este juego te adentrarás aún más en las matemáticas con diversión y
        desafío. ➗🔢<br><br>
        Tu misión es simple: elige la opción que creas correcta, escucha los
        audios de instrucciones y, lo más importante, diviértete; aprende cómo funciona la división.<br>
    </p>

    <div class="MensajeInicio">
        <img src="{{asset('assets/images/LogoPos2.webp')}}" alt="Logo">
        <h2> Vamos a dividir juntos✨ </h2>
    </div>

    <div class="ContenidoSumar">
        <div class="contenedorOperaciones">
            <div class="izquierdo">
                <div class="contenedor-operacion">
                    <span id="division">9 ÷ 9 =</span>
                    <span class="resultado" id="resultado">18</span>
                </div>
                <span id="mensaje" class="mensaje">Excelente!!</span>
            </div>

            <div class="derecha">
                <span id="op1" class="opcion" onclick="controlarRespuesta(this)">18</span>
                <span id="op2" class="opcion" onclick="controlarRespuesta(this)">18</span>
                <span id="op3" class="opcion" onclick="controlarRespuesta(this)">18</span>
            </div>
                <!-- <p>Puntaje Total: <span id="puntajeTotal">0</span></p>
                <button id="reiniciarPuntajeBtn">Reiniciar Puntaje</button> -->

        </div>
        <div class="OpcionesSuma">
            <div>
                <h2 class="titulosSuma"> Instrucciones </h2>
                <audio controls class="Audio">
                    <source src="{{asset('assets/audios/AvNarutoDivision.wav')}}" type="audio/wav">
                    </audio>
                <audio controls class="Audio">
                    <source src="{{asset('assets/audios/AvNaruto1Suma.wav')}}" type="audio/wav">
                    </audio>
            </div>
            <div>
                <h2 class="titulosSuma"> Puntuacion :</h2>
                <span id="puntajeActual">0</span>
            </div>
            <div class="modal" id="customModal">
                <div class="modal-content">
                  <span class="close" onclick="cerrarModal()">&times;</span>
                  <p>¡Felicidades! Has alcanzado tu puntuación máxima de "<span id="puntajeMaximoHtml"></span> puntos".<br>
                    Pero puedes seguir practicando 😉</p>
                </div>
              </div>

              <script src="{{asset('assets/js/scriptDividir.js')}}"></script><BR>

        </div>

        <div id="contenedorOculto">
            <div id="contenidoOculto" class="oculto">

                <!-- Aquí colocarás tu contenido -->
                <h2 class="TituloOculto">Muy bien!, ya sabes qué sigue.😃</h2>
                <p class="DescripcionSuma"> En esta parte tendrás números con 2 cifras, así que dividirás
                    en otro nivel.⏫
                </p>
                <p class="DescripcionSuma"> ¡Tú puedes! Sigue así</p>

                <div class="contenedorOperaciones">
                    <div class="izquierdo">
                        <div class="contenedor-operacion">
                            <span id="divisionS2">10 ÷ 10 =</span>
                            <span class="resultado" id="resultadoS2">20</span>
                        </div>
                        <span id="mensajeS2" class="mensaje">Excelente!!</span>
                    </div>

                    <div class="derecha">
                        <span id="op1S2" class="opcion" onclick="controlarRespuestaS2(this)">20</span>
                        <span id="op2S2" class="opcion" onclick="controlarRespuestaS2(this)">20</span>
                        <span id="op3S2" class="opcion" onclick="controlarRespuestaS2(this)">20</span>
                    </div>
                    <!-- <p>Puntaje Total: <span id="puntajeTotalS2">0</span></p>
                    <button id="reiniciarPuntajeBtnS2">Reiniciar Puntaje</button> -->

                </div>
                <div class="OpcionesSuma">
                    <div>
                        <h2 class="titulosSuma"> Instrucciones </h2>
                        <audio controls class="Audio">
                            <source src="{{asset('assets/audios/AvNarutoDivision.wav')}}" type="audio/wav">
                            </audio>
                        <audio controls class="Audio">
                            <source src="{{asset('assets/audios/AvNaruto1Suma.wav')}}" type="audio/wav">
                            </audio>
                    </div>
                    <div>
                        <h2 class="titulosSuma"> Puntuacion :</h2>
                        <span id="puntajeActualS2">0</span>
                    </div>
                    <div class="modal" id="customModalS2">
                        <div class="modal-content">
                          <span class="close" onclick="cerrarModalS2()">&times;</span>
                          <p>¡Felicidades! Has alcanzado tu puntuación máxima de "<span id="puntajeMaximoHtmlS2"></span> puntos".<br>
                            Pero puedes seguir practicando 😉</p>
                        </div>
                      </div>

                      <script src="{{asset('assets/js/scriptDividir2.js')}}"></script><BR>

                </div>



            </div>
            <button id="btnMostrar">Aumentemos la dificultad 💪</button>
        </div>
        <br>
    </div>




</body>

</html>