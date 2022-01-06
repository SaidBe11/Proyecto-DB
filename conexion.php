<?php
    //importamos la libreria fpdf
    $host = "localhost";
    $database = "escuela";
    $user = "root";
    $contra = "";

    $conectar = mysqli_connect($host,$user,$contra,$database);

    if(!$conectar){
        die("Error:".mysqli_connect_error());
    }

    
?>