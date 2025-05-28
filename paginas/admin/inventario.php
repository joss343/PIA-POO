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
    <title>Inventario</title>
    <link rel="stylesheet" href="../css/inventario.css">
</head>

<body>
    <div class="container">
        <div class="header">
            <span id="fecha-hora" class="fecha"></span>
            <a href="../../index.php"><button class="salir">Salir</button></a>
        </div>

        <div class="catalogo">
            <div class="catalogo-titulo">Inventario</div>
            <div class="catalogo-lista">
            
                <div class="producto">
                    <span class="nombre">Producto 1</span>
                    <div class="imagen"></div>
                    <span class="cantidad-label">Cant.</span>
                    <span class="cantidad">xx</span>
                </div>
                <div class="producto">
                    <span class="nombre">Producto 2</span>
                    <div class="imagen"></div>
                    <span class="cantidad-label">Cant.</span>
                    <span class="cantidad">xx</span>
                </div>
                <div class="producto">
                    <span class="nombre">Producto 3</span>
                    <div class="imagen"></div>
                    <span class="cantidad-label">Cant.</span>
                    <span class="cantidad">xx</span>
                </div>
                <div class="producto">
                    <span class="nombre">Producto 4</span>
                    <div class="imagen"></div>
                    <span class="cantidad-label">Cant.</span>
                    <span class="cantidad">xx</span>
                </div>
                <div class="producto">
                    <span class="nombre">Producto 5</span>
                    <div class="imagen"></div>
                    <span class="cantidad-label">Cant.</span>
                    <span class="cantidad">xx</span>
                </div>

            </div>
        </div>

        <div class="botones">
            <a href="admin.php"><button class="regresar">Regresar</button></a>
            <a href="ag-stock.php"><button class="agregar">Agregar Stock</button></a>
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
