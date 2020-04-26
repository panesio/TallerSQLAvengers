

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="registro">
    <img class="halo" src="files/avenger.jpg">
    <h1>Registrate a los vengadores</h1>
    <form method="POST" action="agregarDatos.php"><br> <!--enctype="multipart/form-data"-->
    <input type="text" placeholder="Escriba su nombre" class="datos" name="nombre"/><br>
    <input type="text" placeholder="Escriba su apellido" class="datos" name="apellido"/><br>
    <input type="text" placeholder="Escriba su dirección" class="datos" name="direccion"/><br>
    <input type="text" placeholder="Escriba su telefono" class="datos" name="telefono"/><br>
    <input type="text" placeholder="Escriba su correo" class="datos" name="correo"/><br>
    <button id="btn" type="submit">Enviar</button>
    </form>
</div>

<br>
<br>

<div class="actualizar">
<img class="halo" src="files/avenger2.jpg">
<h1 style="text-align:center;">Actualiza los datos</h1>
    <form method="POST" action="actualizar.php"><br> <!--enctype="multipart/form-data"-->
    <input type="number" placeholder="Id del usuario a cambiar" class="actuDatos" name="idDato"/>
    <input type="text" placeholder="Escriba nuevo nombre" class="actuDatos" name="nombreNuevo"/><br>
    <input type="text" placeholder="Escriba nuevo apellido" class="actuDatos" name="apellidoNuevo"/><br>
    <input type="text" placeholder="Escriba nueva direccion" class="actuDatos" name="direccionNuevo"/><br>
    <input type="text" placeholder="Escriba nuevo telefono" class="actuDatos" name="telefonoNuevo"/><br>
    <input type="text" placeholder="Escriba nuevo correo" class="actuDatos" name="correoNuevo"/><br>

    <button id="btnDos" type="submit">Actualizar</button>
    </form>

</div>

<div class="ultimo">
<img class="halo" src="files/avenger3.jpg">
<h1 style="text-align:center;">Buscar un usuario</h1>
    <form method="POST" action="buscar.php"><br> <!--enctype="multipart/form-data"-->
    <input type="number" placeholder="Id del usuario a buscar" class="actuDatosDos" name="buscar"/>
    <button id="btnTres" type="submit">Buscar</button>
    </form>
<br>
<br>
    <h1 style="text-align:center;">Eliminar un usuario</h1>
    <form method="POST" action="eliminar.php"><br> <!--enctype="multipart/form-data"-->
    <input type="number" placeholder="Id del usuario a eliminar" class="actuDatosDos" name="eliminar"/>
    <button id="btnTres" type="submit">Eliminar</button>
    </form>
</div>

<br>
<br>

    </body>

    </html>