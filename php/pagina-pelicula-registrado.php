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
        <!---------------------CABECERA DE LA PAGINA---------------------------->
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
        <!----------OBTENEMOS TODA LA INF SOBRE LA PELICULA DE LA BD------------->
    <div class="informacion-pelicula">
            <?php
            $records = mysqli_query($conexion_servidor, "SELECT * FROM movie WHERE id=" . $_GET['id_pelicula'] . "");
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

        <!-------------FORMULARIO PARA INSERTAR COMENTARIOS EN LA BD------------>
        <?php 
    echo   " <form action="."../scripts-php/insertar-comentario.php method=GET>";
        ?>
            <input type="text" name="anadir-comentarios">
            <input type="hidden" name="id_pelicula" value="<?php echo $_GET['id_pelicula'];?>">
            <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
           <input type="submit" value="Dejar comentario">

        </form>

        <!-----------SACAMOS TODOS LOS COMENTARIOS DE LA BD--------------------->
        <?php
        $records = mysqli_query($conexion_servidor, "SELECT * FROM moviecomments WHERE movie_id=" . $_GET['id_pelicula']);
        while ($data = mysqli_fetch_array($records)) {
        ?>
            <div class="caja-comentarios">
                <p class="comentario-nombre">
                    <?php
                    ?>
                    <?php
                    $recordss = mysqli_query($conexion_servidor, "SELECT name FROM users WHERE id='" . $data['user_id'] . "'");
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
        mysqli_close($conexion_servidor);
        ?>
    </div>
</body>

</html>