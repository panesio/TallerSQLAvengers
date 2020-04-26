<?php
require('conexion.php');
    $ubicacion = $_POST['eliminar'];
    $sql = "DELETE FROM datos WHERE id='$ubicacion'";
    mysqli_query($conexion, $sql);
    header('location: mostrarDatos.php');

?>
