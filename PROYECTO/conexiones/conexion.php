<?php
function conectar(){

    try {
        $host="localhost";
        $user="root";
        $pass="";
        $bd="listados";
    
        $con=mysqli_connect($host,$user,$pass);
    
        mysqli_select_db($con,$bd);
    
        return $con;
    
    } catch (Exception $e) {
        echo "no se puedo conectar a la base de datos";
    }

}
?>