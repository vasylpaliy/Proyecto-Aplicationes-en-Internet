<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Estilos/estilo-pagina-pelicula.css?v=<?php echo time(); ?>">
    <?php include '../scripts-php/db_conection.php';?>
    
    <title>Document</title>
</head>

<body>
    <div class="header">
        <img class="logo" src="../imagenes/film.svg" alt="Logo">
        <div class="loggin-box">
            <a href=
            <?php
                echo "main-registrado.php?id=".$_GET['id'];
            ; ?>  
            > <button>Volver</button></a>
        </div>
    </div>

    <div class="contenedor-principal">
    <div class="informacion-pelicula">
            <?php
            $records = mysqli_query($obj_conexion, "SELECT * FROM movie WHERE id=" . $_GET['id_pelicula'] . "");
            while ($data = mysqli_fetch_array($records)) {
                echo "<img src=" . "../images/" . $data['url_pic'] . "  style='float:left;'>";

                echo "<b>".$data['title'] . "</b><br>";
                echo "<i>".$data['date'] . "</i><br>";
                echo $data['desc'] . "<br>";
                echo "<p>Nota pelicula</p><br>";
            ?>
    </div>
    <?php
            }
    ?>

        <form action="../scripts-php/insertar-comentario.php" method="POST">
            <textarea name="anadir-comentarios" id="anadir-comentarios" cols="30" rows="3" placeholder="Deje su comneario agui"></textarea>
           <a href="#"><input type="submit" value="Dejar comentario" class="boton-comentario"></a>
        </form>

        <?php
        $records = mysqli_query($obj_conexion, "SELECT * FROM moviecomments WHERE movie_id=" . $_GET['id_pelicula']);
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