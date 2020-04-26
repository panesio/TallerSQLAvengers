<?php
    require("conexion.php");
    $nombre = $_POST["nombre"];
    $apellido= $_POST["apellido"];
    $direccion= $_POST["direccion"];
    $telefono= $_POST["telefono"];
    $correo= $_POST["correo"];

$sql= "INSERT INTO datos (nombre,apellido,direccion,telefono,correo) VALUES ('$nombre','$apellido','$direccion','$telefono','$correo')";

mysqli_query($conexion,$sql);

header("Location: mostrarDatos.php");
?>