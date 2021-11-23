<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Estilos/estilo-pagina-pelicula.css?v=<?php echo time(); ?>">
    <?php include 'db_conection.php'; ?>
    <title>Document</title>
</head>
<body>
<div class="header">
        <img class="logo" src="../imagenes/film.svg" alt="Logo">
        <div class="loggin-box">
         <a href="main.php">   <button>Volver</button></a>
        </div>
</div>

<div class="contenedor-principal">
    <div class="datos-pelicula">
<table>

<?php
$records = mysqli_query($obj_conexion,"SELECT * FROM movie WHERE id=1"); 


while($data = mysqli_fetch_array($records))
{
?>
  <?php
    
    echo "<img src="."../imagenes-poster/".$data['url_pic'].">";  ///ESTOOOOO 
    echo  $data['title'];
    echo $data['date']."</td>";
    echo $data['desc']."</td>";
    echo "<p>Nota pelicula</p></td> </tr>";
    
  
   
  

}
?>
</table>
</div>

<div class="comentarios">
    <table>
        <tr>
            <td>Paco</td>
        </tr>
        <tr>
            <td>No me ha gustado</td>
        </tr>
    </table>
</div>



        
</div>



</body>
</html>