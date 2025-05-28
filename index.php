<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <link rel="stylesheet" href="paginas/css/styles1.css">
</head>

<body>
    <div class="form-container">
        <h1>Bienvenido</h1>
        <form method="post" autocomplete="off">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" required>

            <label for="correo">Correo Electrónico</label>
            <input type="email" name="correo" required>

            <a href="paginas/catalogo.php"><button type="submit" name="send" value="Enviar">Siguiente</button></a>
        </form>
    </div>

    <?php
        include("paginas/PHPs/send.php");
    ?>

</body>
</html>