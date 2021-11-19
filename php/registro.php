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
  
    <div class="contenedor-mayor">
        <div class="contenedor-cabezera-registro">Formulario de registro</div>
        <form action="">
            <div class="contenedor-menor">
                <label for="nombre">Nombre: </label>
                <br>
                <label for="nombre"></label>
                <input type="text" name="Nombre" id="nombre" >
            </div>
           
            <div class="contenedor-menor">
                <label for="edad">Edad: </label>
                <br>
                <input type="number" name="Edad" id="edad">
            </div>
            <div class="contenedor-menor">
                <label for="sexo">Sexo:</label>
                <br>
                <input type="radio" name="sexo" id="sexo-m">M
                <input type="radio" name="sexo" id="sexo-f">F
            </div>
            <div class="contenedor-menor">
                <label for="password">Contraseña:</label>
                <br>
                <input type="password" name="password" id="password">
            </div>
            <div class="contenedor-menor">
                <label for="rep-password">Repite la Contraseña:</label>
                <br>
                <input type="password" name="rep-password" id="rep-password">
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

    <div class="footer"></div>
</body>

</html>