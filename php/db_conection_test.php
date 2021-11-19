<?php
include 'db_conection.php';


$var_consulta= "select * from movie";
$var_resultado = $obj_conexion->query($var_consulta);

if($var_resultado->num_rows>0)
  {
    echo"<table border='1' align='center'>
     <tr bgcolor='#E6E6E6'>
        <th>Campo1</th>
        <th>Campo2</th>
    </tr>";

while ($var_fila=$var_resultado->fetch_array())
{
    echo "<tr>
    <td>".$var_fila["id"]."</td>";
    echo "<td>".$var_fila["title"]."</td>";
    
 }
}
else
  {
    echo "No hay Registros";
  }

?>