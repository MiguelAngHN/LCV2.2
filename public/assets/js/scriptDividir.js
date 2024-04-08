var num1, num2;
var respuesta;
var indiceOpCorrecta;
txt_suma = document.getElementById("division");
op1 = document.getElementById("op1");
op2 = document.getElementById("op2");
op3 = document.getElementById("op3");
txt_mensaje = document.getElementById("mensaje");
txt_resultado = document.getElementById("resultado");
var opciones = document.getElementsByClassName('opcion');
let modalAmostrar = false;

function comenzar() {
  txt_resultado.innerHTML = "?";
  txt_mensaje.innerHTML = "";

  do{
    num1 = Math.round(Math.random() * 9);
    num2 = Math.round(Math.random() * 9);
  } while (num2 === 0);

  respuesta = Math.round(num1 / num2);
  txt_suma.innerHTML = num1 + " ÷ " + num2 + " = ";

  indiceOpCorrecta = Math.round(Math.random() * 2);
  if (indiceOpCorrecta == 0) {
    op1.innerHTML = respuesta;
    op2.innerHTML = respuesta + 1;
    op3.innerHTML = respuesta - 1;
  }
  if (indiceOpCorrecta == 1) {
    op2.innerHTML = respuesta;
    op1.innerHTML = respuesta + 2;
    op3.innerHTML = respuesta - 1;
  }
  if (indiceOpCorrecta == 2) {
    op3.innerHTML = respuesta;
    op1.innerHTML = respuesta + 1;
    op2.innerHTML = respuesta - 1;
  }
}

var puntajeActual = 0;
var puntajeMaximo = 50;
var puntajeMaximoHtml2 = document.getElementById('puntajeMaximoHtml');
puntajeMaximoHtml2.innerHTML = puntajeMaximo;
var puntajeTotal = parseInt(localStorage.getItem('puntajeTotal')) || 0;

function realizarActividad(puntos){
  puntajeActual += puntos;
  if (puntajeTotal + puntos > puntajeMaximo){
    puntajeTotal = puntajeMaximo;
    // alert ("Puntaje Maximo alcanzado en Total");
  } else {
    puntajeTotal += puntos;
  }
  localStorage.setItem('puntajeTotal', puntajeTotal);
  document.getElementById('puntajeActual').textContent = puntajeActual - 2;
  document.getElementById('puntajeTotal').textContent = puntajeTotal;
}
function reiniciarPuntaje() {
  puntajeTotal = 0;
  localStorage.removeItem('puntajeTotal');

  // Actualizar la visualización en la página
  document.getElementById('puntajeTotal').textContent = puntajeTotal;
}

for (var i = 0; i < opciones.length; i++) {
  if (i === indiceOpCorrecta) {
    opciones[i].innerHTML = respuesta; // Establecer la respuesta correcta
  }
  opciones[i].addEventListener('click', function () {
    if (this.innerHTML == respuesta) {
      realizarActividad(3);
    }
  });
}
    // Manejador de eventos para el botón de reiniciar puntaje
  //   document.getElementById('reiniciarPuntajeBtn').addEventListener('click', function () {
  //     reiniciarPuntaje();
  // });

  // Restablecer el puntaje total al cargar la página
  // document.addEventListener('DOMContentLoaded', function () {
  //     document.getElementById('puntajeTotal').textContent = puntajeTotal;
  // });

function MostrarModal(){
  var modal = document.getElementById('customModal');
  modal.style.display = 'block';
}
function cerrarModal(){
  var modal = document.getElementById('customModal');
  modal.style.display = 'none';
}

function controlarRespuesta(opcionElegida) {
  txt_resultado.innerHTML = opcionElegida.innerHTML;

  if (respuesta == opcionElegida.innerHTML) {
    txt_mensaje.innerHTML = "Excelente!!";
    txt_mensaje.style.color = "#86ff52";
        if (puntajeTotal === puntajeMaximo && !modalAmostrar)  {
      MostrarModal();
      modalAmostrar = true;
    }
    setTimeout(comenzar, 3000);
  } else {
    txt_mensaje.innerHTML = "Ops, intentalo de nuevo🤭";
    txt_mensaje.style.color = "red";
    setTimeout(limpiar, 2000);
  }
}

function limpiar() {
  txt_resultado.innerHTML = "?";
  txt_mensaje.innerHTML = "";
}

comenzar();

// ----------Contenido oculto--------

document.addEventListener("DOMContentLoaded", function () {
  // Obtener elementos del DOM
  var contenido = document.getElementById("contenidoOculto");
  var btnMostrar = document.getElementById("btnMostrar");

  // Manejar clic en el botón "Mostrar Contenido"
  btnMostrar.addEventListener("click", function () {
    if (contenido.classList.contains("oculto")) {
      // Mostrar el contenido (quitar la clase 'oculto')
      contenido.classList.remove("oculto");
      btnMostrar.textContent = "Regresemos";
    } else {
      // Ocultar el contenido (agregar la clase 'oculto')
      contenido.classList.add("oculto");
      btnMostrar.textContent = "Aumentemos la dificultad 💪";
    }
    btnMostrar.disabled = false;
  });
});
