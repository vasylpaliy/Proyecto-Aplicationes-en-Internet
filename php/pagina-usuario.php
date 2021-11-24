<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../Estilos/style.css?v=<?php echo time(); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../scripts-php/db_conection.php'; ?>
    <title>Trabajo AI</title>

</head>

<body>

    <div class="header">

        <img class="logo" src="../imagenes/film.svg" alt="Logo">
        <a href=
        <?php
            $sql = "SELECT id FROM users WHERE id=" . $_GET['id'];
            if ($result = $obj_conexion->query($sql)) {
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                echo "main-registrado.php?id=" . $row['id'] ;
                $result->close();
            }; ?>>Volver</a>
            
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

            <a href="main.php">Salir</a>
        </div>
    </div>

    <div class="contenedor-principal">

        <?php
        $records = mysqli_query($obj_conexion, "SELECT * FROM users WHERE id=" . $_GET['id']);

        while ($data = mysqli_fetch_array($records)) {
        ?>
        <?php echo "<img src=". $data['pic']."alt="."IMAGEN".">";//RUTA IMAGEN     ?>   
            <table id="tabla-usuario">
                <tr class="cabecera-tabla">
                    <th width=40%>Datos</th>
                </tr>
            <?php
            echo "<tr bgcolor='#E6E6E6'>
                <td>Nombre:</td><td> " . $data['name'] . "</td>
                    </tr>";
            echo "<tr bgcolor='#E6E6E6'>
                <td>Edad:</td><td> " . $data['edad'] . "</td>
                    </tr>";
            echo "<tr bgcolor='#E6E6E6'>
                <td>Sexo:</td><td> " . $data['sex'] . "</td>
                    </tr>";
            echo "<tr bgcolor='#E6E6E6'>
                <td>ocupacion:</td><td> " . $data['ocupacion'] . "</td>
                    </tr>";
        }
        mysqli_close($obj_conexion);
            ?>
            </table>




    </div>


</body>

</html>