<?php   session_start();
     $_SESSION['id_usuario'] =  $_GET['id'];
    
     $sql = "SELECT name FROM users WHERE id=" . $_GET['id'];
     if ($result = $conexion_servidor->query($sql)) {
         $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
         $_SESSION['nombre_usuario'] =  $row['name'];       
         $result->close();
     };
?>