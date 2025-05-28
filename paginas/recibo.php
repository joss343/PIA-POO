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
    <title>Recibo de Pago</title>
    <link rel="stylesheet" href="css/styles5.css">
</head>

<body onload="updateDateTime(); actualizarFechaHora();">

    <div class="container">
        <div class="header">
            <div id="fecha-hora"></div> <!-- Aquí va la fecha y hora en tiempo real -->
        </div>

        <div class="main">
            <div class="recibo">
                <div class="titulo-recibo">Recibo de Pago</div>
                <div class="datos-ticket">
                    <p>No. Ticket xxxxxx</p>
                    <p id="fecha-hora-ticket"></p> 
                </div>
                

                <table class="tabla">
                    <thead>
                        <tr>
                            <th>Clave</th>
                            <th>Producto</th>
                            <th>Cant.</th>
                            <th>Precio</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- productos -->
                    </tbody>
                </table>

                <div class="total">TOTAL</div>
            </div>

            <div class="acciones">
                <a href="../index.php"><button class="btn-terminar">Terminar Compra</button></a>
                <p class="nota">Al terminar la compra se enviará automáticamente el ticket al correo electrónico
                    brindado</p>
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
    
        function updateDateTime() {
            const today = new Date();
            const optionsFecha = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
            const fechaFormateada = today.toLocaleDateString('es-ES', optionsFecha);
            const horaFormateada = today.toLocaleTimeString('es-ES', { hour: '2-digit', minute: '2-digit' });
    
            document.getElementById('fecha-hora-ticket').textContent = `Fecha: ${fechaFormateada} - Hora: ${horaFormateada}`;
        }
    
        setInterval(actualizarFechaHora, 1000);
    </script>    
</body>

</html>