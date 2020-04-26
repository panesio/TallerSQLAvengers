<?php 
require("conexion.php");

    $ubicacion= $_POST["idDato"];
    $nombre = $_POST["nombreNuevo"];
    $apellido= $_POST["apellidoNuevo"];
    $direccion= $_POST["direccionNuevo"];
    $telefono= $_POST["telefonoNuevo"];
    $correo= $_POST["correoNuevo"];

    $sql= "UPDATE datos SET nombre='$nombre',apellido='$apellido',direccion='$direccion',telefono='$telefono',correo='$correo' WHERE id='$ubicacion'";


mysqli_query($conexion,$sql);  

header("Location: mostrarDatos.php");  



?>