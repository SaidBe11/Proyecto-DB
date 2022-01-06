<?php
include ("conexion.php");

$id = $_POST["id"];
$nombre = $_POST["nombre"];
$apepat = $_POST["apepat"];
$apemat = $_POST["apemat"];
$semestre = $_POST["semestre"];
//$salon = $_POST["salon"];
$salon = "";
$hturno = $_POST["turno"];
$turno = "";

$carrera = "SELECT * FROM carrera where idca= ".$id;
$result = mysqli_query($conectar,$carrera);
$row=mysqli_fetch_assoc($result);
switch ($semestre) {
    case 'Primero':
        if($hturno==1){
            $salon = $row["codigo"]."-010".rand(1,2);
            $turno = "Matutino";
        }elseif($hturno==2){
            $salon = $row["codigo"]."-010".rand(3,4);
            $turno = "Vespertino";
        }
        break;
    case 'Segundo':
        if($hturno==1){
            $salon = $row["codigo"]."-020".rand(1,2);
            $turno = "Matutino";
        }elseif($hturno==2){
            $salon = $row["codigo"]."-020".rand(3,4);
            $turno = "Vespertino";
        }
        break;
    case 'Tercero':
        if($hturno==1){
            $salon = $row["codigo"]."-030".rand(1,2);
            $turno = "Matutino";
        }elseif($hturno==2){
            $salon = $row["codigo"]."-030".rand(3,4);
            $turno = "Vespertino";
        }
        break;
    case 'Cuarto':
        if($hturno==1){
            $salon = $row["codigo"]."-040".rand(1,2);
            $turno = "Matutino";
        }elseif($hturno==2){
            $salon = $row["codigo"]."-040".rand(3,4);
            $turno = "Vespertino";
        }
        break;
    case 'Quinto':
        if($hturno==1){
            $salon = $row["codigo"]."-050".rand(1,2);
            $turno = "Matutino";
        }elseif($hturno==2){
            $salon = $row["codigo"]."-050".rand(3,4);
            $turno = "Vespertino";
        }
        break;
    case 'Sexto':
        if($hturno==1){
            $salon = $row["codigo"]."-060".rand(1,2);
            $turno = "Matutino";
        }elseif($hturno==2){
            $salon = $row["codigo"]."-060".rand(3,4);
            $turno = "Vespertino";
        }
        break;
    case 'Septimo':
        if($hturno==1){
            $salon = $row["codigo"]."-070".rand(1,2);
            $turno = "Matutino";
        }elseif($hturno==2){
            $salon = $row["codigo"]."-070".rand(3,4);
            $turno = "Vespertino";
        }
        break;
    case 'Octavo':
        if($hturno==1){
            $salon = $row["codigo"]."-080".rand(1,2);
            $turno = "Matutino";
        }elseif($hturno==2){
            $salon = $row["codigo"]."-080".rand(3,4);
            $turno = "Vespertino";
        }
        break;
    case 'Noveno':
        if($hturno==1){
            $salon = $row["codigo"]."-090".rand(1,2);
            $turno = "Matutino";
        }elseif($hturno==2){
            $salon = $row["codigo"]."-090".rand(3,4);
            $turno = "Vespertino";
        }
        break;
    case 'Decimo':
        if($hturno==1){
            $salon = $row["codigo"]."-100".rand(1,2);
            $turno = "Matutino";
        }elseif($hturno==2){
            $salon = $row["codigo"]."-100".rand(3,4);
            $turno = "Vespertino";
        }
        break;
}

$insertar = "INSERT INTO alumnos(idal,idca,nombre,ape_pat,ape_mat,semestre,salon,turno) VALUES(0,'$id','$nombre','$apepat','$apemat','$semestre','$salon','$turno')";

$resultado = mysqli_query($conectar,$insertar);

if ($resultado) {
    echo "<script>alert('se ha registrado el alumno con exito') 
    window.location=/registros.php;</script>";
} else{
    echo "<script>alert('error con el registro') 
    window.history.go(-1);</script>;    
    ";
}

?>


