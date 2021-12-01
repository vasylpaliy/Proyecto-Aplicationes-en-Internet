<?php
   include 'db_conection.php';  

   $username = $_POST['nombre'];  
   $password = $_POST['pass'];  
   $edad = $_POST['edad'];
   $sex = $_POST['sexo'];
   $pic= "imagen";
   $ocupacion=$_POST['ocupacion'];
   
$sql ="INSERT INTO users (name, edad, sex, ocupacion, pic, passwd) VALUES ( '$username',  $edad ,  '$sex', '$ocupacion', '$pic', '$password')";
if ($conexion_servidor->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conexion_servidor->error;
}
$conexion_servidor->close();
?>  











