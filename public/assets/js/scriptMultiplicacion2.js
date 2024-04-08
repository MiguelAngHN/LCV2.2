var num1S2, num2S2;
var respuestaS2; 
var indiceOpCorrectaS2;
txt_sumaS2 = document.getElementById("multiplicacionS2");
op1S2 = document.getElementById("op1S2");
op2S2 = document.getElementById("op2S2");
op3S2 = document.getElementById("op3S2");
txt_mensajeS2 = document.getElementById("mensajeS2");
txt_resultadoS2 = document.getElementById("resultadoS2");
var opcionesS2 = document.getElementsByClassName('opcion');
let modalAmostrarS2 = false;

function comenzarS2(){
    txt_resultadoS2.innerHTML = "?";
    txt_mensajeS2.innerHTML = "";

    num1S2 = Math.round(Math.random()*12);
    num2S2 = Math.round(Math.random()*12);
    respuestaS2 = num1S2 * num2S2;
    txt_sumaS2.innerHTML = num1S2 + " × " + num2S2 + " = ";

    indiceOpCorrectaS2 = Math.round(Math.random()*2);
    if (indiceOpCorrectaS2==0){
        op1S2.innerHTML = respuestaS2;
        op2S2.innerHTML = respuestaS2 + 1;
        op3S2.innerHTML = respuestaS2 - 1;
    }
    if(indiceOpCorrectaS2==1){
        op2S2.innerHTML = respuestaS2;
        op1S2.innerHTML = respuestaS2 + 2;
        op3S2.innerHTML = respuestaS2 - 1;
    }
    if(indiceOpCorrectaS2==2){
        op3S2.innerHTML = respuestaS2;
        op1S2.innerHTML = respuestaS2 + 1;
        op2S2.innerHTML = respuestaS2 - 1;
    }
}

var puntajeActualS2 = 0;
var puntajeMaximoS2 = 50;
var puntajeMaximoHtml2S2 = document.getElementById('puntajeMaximoHtmlS2');
puntajeMaximoHtml2S2.innerHTML = puntajeMaximoS2;
var puntajeTotalS2 = parseInt(localStorage.getItem('puntajeTotalS2')) || 0;

function realizarActividadS2(puntosS2){
    puntajeActualS2 += puntosS2;
    if (puntajeTotalS2 + puntosS2 > puntajeMaximoS2){
      puntajeTotalS2 = puntajeMaximoS2;
    //   alert ("Puntaje Maximo alcanzado en Total");
    } else {
      puntajeTotalS2 += puntosS2;
    }
    localStorage.setItem('puntajeTotalS2', puntajeTotalS2);
    document.getElementById('puntajeActualS2').textContent = puntajeActualS2 - 2;
    document.getElementById('puntajeTotalS2').textContent = puntajeTotalS2;
  }
  function reiniciarPuntajeS2() {
    puntajeTotalS2 = 0;
    localStorage.removeItem('puntajeTotalS2');
  
    // Actualizar la visualización en la página
    document.getElementById('puntajeTotalS2').textContent = puntajeTotalS2;
  }

  for (var i = 0; i < opcionesS2.length; i++) {
    if (i === indiceOpCorrectaS2) {
      opcionesS2[i].innerHTML = respuestaS2; // Establecer la respuesta correcta
    }
    opcionesS2[i].addEventListener('click', function () {
      if (this.innerHTML == respuestaS2) {
        realizarActividadS2(3);
      }
    });
  }
      // Manejador de eventos para el botón de reiniciar puntaje
    //   document.getElementById('reiniciarPuntajeBtnS2').addEventListener('click', function () {
    //     reiniciarPuntajeS2();
    // });
  
    // Restablecer el puntaje total al cargar la página
    // document.addEventListener('DOMContentLoaded', function () {
    //     document.getElementById('puntajeTotalS2').textContent = puntajeTotalS2;
    // });
  
  function MostrarModalS2(){
    var modalS2 = document.getElementById('customModalS2');
    modalS2.style.display = 'block';
  }
  function cerrarModalS2(){
    var modalS2 = document.getElementById('customModalS2');
    modalS2.style.display = 'none';
  }

function controlarRespuestaS2(opcionElegidaS2){
    txt_resultadoS2.innerHTML = opcionElegidaS2.innerHTML;

    if(respuestaS2 == opcionElegidaS2.innerHTML){
        txt_mensajeS2.innerHTML = "Excelente!!";
        txt_mensajeS2.style.color = "#86ff52";
        if (puntajeTotalS2 === puntajeMaximoS2 && !modalAmostrarS2)  {
          MostrarModalS2();
          modalAmostrarS2 = true;
      }
        setTimeout(comenzarS2, 3000);
    }else{
        txt_mensajeS2.innerHTML = "Ops, intentalo de nuevo🤭";
        txt_mensajeS2.style.color = "red";
        setTimeout(limpiarS2,2000)
    }

}

function limpiarS2(){
    txt_resultadoS2.innerHTML = "?";
    txt_mensajeS2.innerHTML = "";
}

comenzarS2();