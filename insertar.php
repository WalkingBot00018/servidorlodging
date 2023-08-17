<?php
    include "conexion.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nro_documento = $_POST["nro_documento"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $email = $_POST["email"];
        $telefono = $_POST["telefono"];
        $calle = $_POST["calle"];
        $numero = $_POST["numero"];
        $contrasena = $_POST["contrasena"];
        $fecha_restablecimiento = $_POST["fecharestablecimiento"];

        $sql = "INSERT INTO usuario (Nro_Documento, Nombre, Apellido, Email, Telefono, Calle, Numero, Contraseña, Fecha_de_Restablecimiento) 
                VALUES ('$nro_documento', '$nombre', '$apellido', '$email', '$telefono', '$calle', '$numero', '$contrasena', '$fecha_restablecimiento')";
        
        if (mysqli_query($link, $sql)) {
            echo "registro correcto :D.";
        } else {
            echo "no  inserto el registro:'( " . mysqli_error($link);
        }
    }

    mysqli_close($link);
    ?>
