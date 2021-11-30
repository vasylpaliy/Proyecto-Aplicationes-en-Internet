<?php      
    include 'db_conection.php';  
    include 'sesion.php';  
    $username = $_POST['user'];  
    $password = $_POST['pass'];  

        $sql = "SELECT * FROM users WHERE id = '$username' AND passwd = '$password'";  
        $result = mysqli_query($obj_conexion, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        
        if($count == 1){  
            header("Location: ../php/main-registrado.php?id=".$username); 
           
        }  
        else{  
            header('Location: ../php/main.php'); 
        }
?>  