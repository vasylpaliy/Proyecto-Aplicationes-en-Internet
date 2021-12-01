<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../Estilos/estilo-registro.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p><a class="boton-volver" href="../php/main.php">Volver atras</a></p>

     <!---------------------FORMULARIO PARA REGISTRAR NUEVO USUARIO----------------------------------->
    <div class="contenedor-mayor">
        <div class="contenedor-cabezera-registro">Formulario de registro</div>
        <form action="../scripts-php/registrar-usuario.php" method="POST">
            <div class="contenedor-menor">
                <label for="nombre">Nombre: </label>
                <br>
                <label for="nombre"></label>
                <input type="text" name="nombre" id="nombre" >
            </div>   
            <div class="contenedor-menor">
                <label for="edad">Edad: </label>
                <br>
                <input type="number" name="edad" id="edad">
            </div>
            <div class="contenedor-menor">
                <label for="sexo">Sexo:</label>
                <br>
                <input type="radio" name="sexo"  value="M">M
                <input type="radio" name="sexo"  value="F">F
            </div>
            <div class="contenedor-menor">
                <label for="ocupacion">Ocupacion:</label>
                <br>
                <input type="text" name="ocupacion">
            </div>
            <div class="contenedor-menor">
                <label for="password">Contraseña:</label>
                <br>
                <input type="password" name="pass" id="pass">
            </div>
            <div class="contenedor-menor">
                <label for="rep-password">Repite la Contraseña:</label>
                <br>
                <input type="password" name="rep-pass" id="rep-pass">
            </div>
            <div class="contenedor-menor">
                <label for="fileToUpload">Seleccionar imagen:</label>
                <input type="file" name="fileToUpload" id="fileToUpload">
                <br>
                <br>
                <br>
                <input type="submit" value="Enviar Formulario" name="submit">
            </div>
        </form>
    </div>
</body>

</html>