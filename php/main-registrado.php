<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../Estilos/style.css?v=<?php echo time(); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include '../scripts-php/db_conection.php'; ?>
    <?php include '../scripts-php/sesion.php';  ;?>
    <script src="https://www.kryogenix.org/code/browser/sorttable/sorttable.js"></script>
    <script src="../js/buscar.js"></script>
    <script src="../js/loggin-validacion.js"></script>
    <title>Trabajo AI</title>

</head>

<body>

    <div class="header">
        <img class="logo" src="../imagenes/film.svg" alt="Logo">

        <div class="buscar"><input type="text" id="myInput" onkeyup="myFunction()" placeholder="Buscar..."></div>
        <div class="loggin-box">
            <?php
                echo " <a href=" . "pagina-usuario.php?id=" .$_SESSION['id_usuario'].">";
                
            ; ?>


            <img class="logo-usuario" src="../imagenes/logo-usuario.svg" alt="Logo-usuario">
            </a>
            <p class="nombre-usuario">
                <?php echo $_SESSION['nombre_usuario'] ;?>
            </p>
            <a href="main.php">Salir</a>
        </div>
    </div>

    <div class="contenedor-principal">
        <table class="sortable" id="mi-tabla">
            <tr class="cabecera-tabla">
                <th width=25%>Poster</th>
                <th width=10%>Titulo</th>
                <th width=10%>Fecha estreno</th>
                <th width=40%>Descripcion</th>
                <th width=15%>Puntuacion</th>
            </tr>
            <?php
            $records = mysqli_query($obj_conexion, "SELECT * FROM movie");
            while ($data = mysqli_fetch_array($records)) {
            ?>

            <?php echo "<tr bgcolor='#E6E6E6' style="."text-align:center".">";
                echo "<td ><img width="."50%"." height="."50%"." src=" . "../images/" . $data['url_pic'] . ">" . "</td>";
                echo "<td >" . "<a href=" . "pagina-pelicula-registrado.php?id=" . $data['id'] . ">" . $data['title'] . "</a>" . "</td>";
                echo "<td>" . $data['date'] . "</td>";
                echo "<td>" . $data['desc'] . "</td>";
                echo "<td><p>Nota pelicula</p></td> </tr>";
            }
            ?>
        </table>
        <?php mysqli_close($obj_conexion);      //Cierro la conexion  
        ?>
    </div>
    <div class="footer"></div>

</body>

</html>