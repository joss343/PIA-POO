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
    <title>Agregar Stock</title>
    <link rel="stylesheet" href="../css/ag-stock.css">
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

        setInterval(actualizarFechaHora, 1000);
        window.onload = actualizarFechaHora;
    </script>
</head>

<body>
    <div class="container">
        <div class="header">
            <div id="fecha-hora"></div>
            <a href="../../index.php"><button class="btn-cancelar">Salir</button></a>
        </div>

        <div class="main">
            <div class="formulario-stock">
                <h2 class="titulo-formulario">Agregar Stock</h2>

                <form>
                    <div class="form-group">
                        <label for="producto">Nombre del Producto:</label>
                        <select id="producto" name="producto">
                            <option value="">Escoja un producto</option>
                            <option value="producto1">Producto 1</option>
                            <option value="producto2">Producto 2</option>
                            <option value="producto3">Producto 3</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="cantidad">Cantidad de stock entrante:</label>
                        <input type="number" id="cantidad" name="cantidad">
                    </div>
                </form>
            </div>
        </div>

        <div class="acciones">
            <a href="inventario.php"><button class="btn-regresar">Regresar</button></a>
            <button class="btn-guardar">Guardar</button>
        </div>
    </div>
</body>

</html>