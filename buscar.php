<?php
        require('conexion.php');
        $ubicacion = $_POST['buscar'];   
        $sql = "SELECT * FROM datos where id='$ubicacion'";  
        $resultado = mysqli_query($conexion, $sql);
        $resultadoDatos = mysqli_fetch_all($resultado);
        foreach($resultadoDatos as $Imprimir){  
      
            echo "id:" . $Imprimir[0] . "<br>";            
            echo "nombre:" . $Imprimir[1] . "<br>"; 
            echo "apellido:" . $Imprimir[2] . "<br>";
            echo "direccion:" . $Imprimir[3] . "<br>";
            echo "telefono:" . $Imprimir[4] . "<br>"; 
            echo "correo:" . $Imprimir[5] . "<br>"; 
        }

        mysqli_query($conexion, $sql);
   
    ?>