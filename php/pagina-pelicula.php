<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Estilos/estilo-pagina-pelicula.css?v=<?php echo time(); ?>">
    <?php include '../scripts-php/db_conection.php'; ?>
    <title>Document</title>
</head>

<body>
    <div class="header">
        <img class="logo" src="../imagenes/film.svg" alt="Logo">
        <div class="loggin-box">
            <a href="main.php"> <button>Volver</button></a>
        </div>
    </div>

    <div class="contenedor-principal">
        <div class="datos-pelicula">
            <table>

                <?php
                $records = mysqli_query($obj_conexion, "SELECT * FROM movie WHERE id=" . $_GET['id'] . "");
                while ($data = mysqli_fetch_array($records)) {
                ?>
                <?php

                    echo "<img src=" . "../imagenes-poster/" . $data['url_pic'] . ">";
                    echo  $data['title'];
                    echo $data['date'] . "</td>";
                    echo $data['desc'] . "</td>";
                    echo "<p>Nota pelicula</p></td> </tr>";
                }
                ?>
            </table>
        </div>

        <form action="">
            <textarea name="anadir-comentarios" id="anadir-comentarios" cols="30" rows="3" placeholder="Deje su comneario agui"></textarea>
            <input type="submit" value="Dejar comentario" class="boton-comentario">
        </form>

        <?php
        $records = mysqli_query($obj_conexion, "SELECT * FROM moviecomments WHERE movie_id=" . $_GET['id']);
        while ($data = mysqli_fetch_array($records)) {
        ?>
            <div class="caja-comentarios">
                <p class="comentario-nombre">
                    <?php
                    ?>
                    <?php
                    $recordss = mysqli_query($obj_conexion, "SELECT name FROM users WHERE id='" . $data['user_id'] . "'");
                    while ($dataa = mysqli_fetch_array($recordss)) {
                        echo $dataa['name'];
                    }
                    ?>
                </p>
                <div class="comentario-texto">
                    <?php echo $data['comment']; ?>
                </div>
            </div>
        <?php
        }
        mysqli_close($obj_conexion);
        ?>

    </div>
</body>

</html>