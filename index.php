<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Hora Actual</title>
<style>
  body {
    font-family: Arial, sans-serif;
    text-align: center;
    padding-top: 50px;
  }
  #hora {
    font-size: 2em;
  }
</style>
</head>
<body>
<h1>Hora Actual</h1>
<div id="hora"></div>

<script>
function actualizarHora() {
  var ahora = new Date();
  var hora = ahora.getHours();
  var minutos = ahora.getMinutes();
  var segundos = ahora.getSeconds();

  // Formato de hora
  hora = (hora < 10) ? "0" + hora : hora;
  minutos = (minutos < 10) ? "0" + minutos : minutos;
  segundos = (segundos < 10) ? "0" + segundos : segundos;

  // Mostrar hora
  var horaActual = hora + ":" + minutos + ":" + segundos;
  document.getElementById("hora").innerText = horaActual;
}

// Actualizar la hora cada segundo
setInterval(actualizarHora, 1000);

// Mostrar la hora actual al cargar la página
actualizarHora();
</script>
</body>
</html>
