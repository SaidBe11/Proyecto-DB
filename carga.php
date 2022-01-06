<?php
include("conexion.php");

$id = 1;
$car = 1;
$semestre = 'Primero';
$alumnos = "SELECT * FROM alumnos where idal= ".$id;
$carrera = "SELECT carrera.nombre FROM carrera inner join alumnos on (carrera.idca=1 and alumnos.idca=".$id.") and alumnos.idal= ".$id;
$materias = "SELECT materias.nombre, materias.creditos, materias.semestre
FROM alumnos inner join carrera on carrera.idca=1 inner join materias on (materias.idca=1 and materias.semestre='Primero') and (alumnos.idca=1 and alumnos.semestre='Primero')";
$result = mysqli_query($conectar,$alumnos);
$resultC = mysqli_query($conectar,$carrera);
$resultM = mysqli_query($conectar, $materias);

echo ("CARGA ACADÉMICA: ").nl2br("\n");
echo ("No. Control: ").nl2br("\n");
$row=mysqli_fetch_assoc($result);
$rowC=mysqli_fetch_assoc($resultC);
echo ("Nombre: ").$row["nombre"]." ".$row["ape_pat"]." ".$row["ape_mat"].nl2br("\n");
echo ("Carrera: ").$rowC["nombre"].nl2br("\n\n");

while($rowM=mysqli_fetch_assoc($resultM)){
    echo $rowM["nombre"]." "."Creditos:".$rowM["creditos"]." "."Semestre:".$rowM["semestre"]." "."Grupo:".$row["salon"];
    echo nl2br("\n");
}

?>

