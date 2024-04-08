function startAnimation(audio) {
    var parentElement = audio.parentNode;
    parentElement.classList.add("play-animation");
    setTimeout(function() {
      parentElement.classList.remove("play-animation");
    }, 500);
  }

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