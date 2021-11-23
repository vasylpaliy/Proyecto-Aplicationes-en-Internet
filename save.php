while($data = mysqli_fetch_array($records))
{
?>
  <?php echo"<table border='0.5px'  width=100%  cellpadding='100px' >
     <tr  bgcolor='#E6E6E6'>";
    
     echo "<td>"."imagen-pelicula" ."</td>";
     echo "<td padding:'101px'>".$data['title']."<br>".$data['date']."</td>" ;
     echo "<td>".$data['desc']."</td>";
    echo "<td><p>Nota pelicula</p></td>";
    echo "</table>"
   ?>