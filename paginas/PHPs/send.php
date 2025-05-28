<?php
include("../../conexion.php");

if (isset($_POST['send'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['correo']) >= 1) {
        $name = trim($_POST['nombre']);
        $email = trim($_POST['correo']);

        $verifica = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$email'");
        
        if (mysqli_num_rows($verifica) == 0) {
            $consulta = "INSERT INTO usuarios(nombre, correo) VALUES ('$name', '$email')";
            if (mysqli_query($conexion, $consulta)) {
                echo "success"; 
                exit();
            } else {
                echo "Error al guardar: " . mysqli_error($conexion);
            }
        } else {
            echo "El correo ya está registrado";
        }
    } else {
        echo "Por favor, completa todos los campos";
    }
}
?>