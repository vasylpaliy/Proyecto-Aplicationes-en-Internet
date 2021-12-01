<?php 
include 'db_conection.php';  
$stmt = $conexion_servidor->prepare("INSERT INTO moviecomments (movie_id, user_id, comment) VALUES (?, ?, ?)");
$stmt->bind_param("iis", $movie_id, $user_id, $comment);

$movie_id= $_GET['id_pelicula'];
$user_id = $_GET['id'];
$comment=$_REQUEST['anadir-comentarios'];

$stmt ->execute();
$stmt->close();
$conexion_servidor->close();
header("Location: ../php/pagina-pelicula-registrado.php?id_pelicula=".$movie_id."&id=".$user_id.""); 
?>