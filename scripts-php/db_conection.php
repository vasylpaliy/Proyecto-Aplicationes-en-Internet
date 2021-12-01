<?php

$cons_usuario="root";
$cons_contra="";
$cons_base_datos="localdb";
$cons_equipo="localhost";

$conexion_servidor = 
mysqli_connect($cons_equipo,$cons_usuario,$cons_contra,$cons_base_datos);
if(!$conexion_servidor)
{
    echo "<h3>No se ha podido conectar PHP - MySQL, verifique sus datos.</h3><hr><br>";
}
else
{
    echo "";
}
?>
