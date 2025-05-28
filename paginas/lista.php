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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Lista de Compra</title>
    <link rel="stylesheet" href="css/styles3.css" />
</head>

<body>
    <div class="container">
        <div class="header">
            <span id="fecha-hora" class="fecha"></span>
            <div class="botones-superior-centrado">
                <a href="catalogo.php"><button class="editar">Editar</button></a>
                <a href="../index.php"><button class="cancelar">Cancelar</button></a>
            </div>
        </div>

        <div class="contenido">
            <div class="lista-compra">
                <h2>Lista de Compra</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Cant.</th>
                            <th>Precio</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Aquí irán los productos -->
                    </tbody>
                </table>
            </div>

            <div class="panel-total">
                <div class="total-label">TOTAL</div>
                <div class="total-valor" id="total">$0.00</div>
                <a href="metodo.php"><button class="pagar">Pagar</button></a>
            </div>
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