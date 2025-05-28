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
    <title>Nuevo Producto</title>
    <link rel="stylesheet" href="../css/nv-producto.css">
</head>

<body>
    <div class="container">
        <div class="header">
            <span id="fecha-hora" class="fecha"></span>
            <a href="../../index.php"><button class="salir">Salir</button></a>
        </div>

        <div class="formulario">
            <div class="titulo">
                <h2>Nuevo Producto</h2>
            </div>

            <form>
                <div class="form-group">
                    <label for="nombre">Nombre del Producto:</label>
                    <input type="text" id="nombre" name="nombre">
                </div>

                <div class="form-group">
                    <label for="marca">Marca del Producto:</label>
                    <input type="text" id="marca" name="marca">
                </div>

                <div class="form-group">
                    <label for="precio">Precio del Producto:</label>
                    <input type="text" id="precio" name="precio">
                </div>

                <div class="form-group">
                    <label for="imagen">URL de Imagen del Producto:</label>
                        <input type="text" id="imagen" name="imagen">
                </div>

                <div class="form-buttons">
                    <a href="catalog-admin.php"><button type="button" class="btn regresar">Regresar</button></a>
                    <button type="submit" class="btn guardar">Guardar</button>
                </div>
            </form>
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