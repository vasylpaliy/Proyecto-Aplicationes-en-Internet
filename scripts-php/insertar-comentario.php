<?php 
include 'db_conection.php';  
$stmt = $obj_conexion->prepare("INSERT INTO moviecomments (movie_id, user_id, comment) VALUES (?, ?, ?)");
$stmt->bind_param("iis", $movie_id, $user_id, $comment);
$movie_id= $_GET['id_pelicula']; // NO FUNCIONA, NO SE COJEN PARAMETROS DE LA URL
$user_id=  $_GET['id'];   //// lo mismo
$comment=$_REQUEST['anadir-comentarios'];


$stmt ->execute();
$stmt->close();
$obj_conexion->close();
?>