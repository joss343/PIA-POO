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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Catálogo de Productos</title>
    <link rel="stylesheet" href="css/styles2.css">
</head>

<body>
    <div class="container">
        <div class="header">
            <span id="fecha-hora" class="fecha"></span>
            <a href="../index.php"><button class="cancelar">Cancelar</button></a>
        </div>

        <h1 class="titulo">Catalogo de Productos</h1>

        <div class="buscador">
            <span class="icono">🔍</span>
            <input type="text" placeholder="Buscar">
        </div>

        <div class="footer">
            <a href="lista.php"><button class="siguiente">Siguiente</button></a>
        </div>
    </div>

    <script>
        function actualizarFechaHora() {
            const ahora = new Date();
            const opcionesFecha = {
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            };
            const fecha = ahora.toLocaleDateString('es-ES', opcionesFecha);
            const hora = ahora.toLocaleTimeString('es-ES', {
                hour: '2-digit',
                minute: '2-digit',
                second: '2-digit'
            });

            document.getElementById('fecha-hora').textContent = `${fecha}, ${hora}`;
        }

        actualizarFechaHora();
        setInterval(actualizarFechaHora, 1000);
    </script>
</body>

</html>