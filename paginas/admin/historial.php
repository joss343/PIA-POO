<?php

$servidor = "localhost";
$usuario = "root";
$password = "JAMC.2906";
$db = "db_autocobro";

$conexion = new mysqli($servidor, $usuario, $password, $db);

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Historial de Compras</title>
  <link rel="stylesheet" href="../css/historial.css">
</head>

<body>
  <div class="container">
    <div class="header">
      <span>Martes 8 de Abril, 2025</span>
      <a href="../../index.php"><button class="exit-button">Salir</button></a>
    </div>

    <div class="historial-box">
      <h2>Historial de Compras</h2>
      <div class="compra">
        <span>Compra xxx</span>
        <span>Martes 8 de Abril, 2025</span>
        <button class="info-button">Más Información</button>
      </div>
      <div class="compra">
        <span>Compra xxx</span>
        <span>Martes 8 de Abril, 2025</span>
        <button class="info-button">Más Información</button>
      </div>
      <div class="compra">
        <span>Compra xxx</span>
        <span>Martes 8 de Abril, 2025</span>
        <button class="info-button">Más Información</button>
      </div>
      <div class="compra">
        <span>Compra xxx</span>
        <span>Martes 8 de Abril, 2025</span>
        <button class="info-button">Más Información</button>
      </div>
      <div class="compra">
        <span>Compra xxx</span>
        <span>Lunes 7 de Abril, 2025</span>
        <button class="info-button">Más Información</button>
      </div>
    </div>

    <a href="admin.php"><button class="back-button">Regresar</button></a>
  </div>
</body>

</html>