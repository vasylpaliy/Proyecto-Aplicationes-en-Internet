<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../Estilos/style.css?v=<?php echo time(); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include '../scripts-php/db_conection.php'; ?>

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

            <img class="logo-usuario" src="../imagenes/logo-usuario.svg" alt="Logo-usuario">
            <p class="nombre-usuario">
                <?php
                $sql = "SELECT name FROM users WHERE id=" . $_GET['id'];
                if ($result = $obj_conexion->query($sql)) {
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    echo  $row['name'];
                    $result->close();
                }; ?>
            </p>
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
            <?php echo "<tr bgcolor='#E6E6E6'>";
                echo "<td><img src=" . "../imagenes-poster/images/" . $data['url_pic'] . ">" . "</td>";
                echo "<td >" . "<a href=" . "pagina-pelicula.php?id=" . $data['id'] . ">" . $data['title'] . "</a>" . "</td>";
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