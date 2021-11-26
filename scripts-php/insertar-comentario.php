<?php 
include 'db_conection.php';  
$stmt = $obj_conexion->prepare("INSERT INTO moviecomments (movie_id, user_id, comment) VALUES (?, ?, ?)");
$stmt->bind_param("iis", $movie_id, $user_id, $comment);
$movie_id= ;
$user_id=;
$comment==$_REQUEST['anadir-comentarios'];
$stmt ->execute();

?>