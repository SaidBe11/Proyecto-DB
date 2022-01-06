<?php 
include("conexion.php");

$alumnos = "SELECT * FROM alumnos where idal=2";
$carrera = "SELECT carrera.nombre FROM carrera inner join alumnos on (carrera.idca=1 and alumnos.idca=2) and alumnos.idal=2";
$materias = "SELECT *
FROM alumnos inner join carrera on carrera.idca=2 inner join materias on (materias.idca=2 and materias.semestre='Primero') and (alumnos.idca=2 and alumnos.semestre='Primero')";

$result = mysqli_query($conectar,$alumnos);
$resultC = mysqli_query($conectar,$carrera);
$resultM = mysqli_query($conectar, $materias);

$row=mysqli_fetch_assoc($result);
$rowC=mysqli_fetch_assoc($resultC);


require ('fpdf.php');
$pdf=new FPDF();
$pdf->AddPage('PORTRAIT','letter');

class pdf extends FPDF{
    public function header(){
        $this->SetFont('Arial','B',15);
        $this->Cell(0,15,'Tecnologico de estudios superiores de Jocotitlán',0,0,'C');
        $this->Image('img/tesjo.png',185,5,30,30,'png');
    }
    public function footer(){
        $this->SetFont('Arial','B',12);
        $this->SetY(-15);
        $this->Write(5,'Carga academica');
    }
}

$fpdf = new pdf('P','mm','letter',true);
//$fpdf->SetMargins(10,30,20,20);
$fpdf->AddPage('portrait','letter');
$fpdf->SetFont('Arial','B',12);
$fpdf->Ln();
$fpdf->Cell(0,10,"Nombre: ".$row["nombre"]." ".$row["ape_pat"]." ".$row["ape_mat"]);
$fpdf->Ln();
$fpdf->Cell(0,10,"Carrera: ".$rowC["nombre"]);
$fpdf->Ln();
$fpdf->Cell(0,10,"Materias",0,0,'C');
$fpdf->Ln();
//color y estilo 
$fpdf->SetFontSize(10);
$fpdf->SetFont('Arial','B');
$fpdf->SetFillColor(255);
$fpdf->SetTextColor(0);
$fpdf->SetDrawColor(88,88,88);
$fpdf->Ln(2);
$fpdf->Cell(70,5,'Nombre Asignatura',0,0,'C',1);
$fpdf->Cell(40,5,'Creditos',0,0,'C',1);
$fpdf->Cell(40,5,'Semestre',0,0,'C',1);
$fpdf->Cell(50,5,'Grupo',0,0,'C',1);

//linea
$fpdf->SetDrawColor(61,174,233);
$fpdf->SetLineWidth(1);
$fpdf->Line(10,65,210,65);

$fpdf->SetLineWidth(0,2);
$fpdf->SetFont('Arial');
$fpdf->SetFillColor(240,240,240);
$fpdf->SetTextColor(0);
$fpdf->Ln(13);

while($rowM=mysqli_fetch_assoc($resultM)){
    $fpdf->Cell(70,5,$rowM["nombre"],0,0,'C',1);
    $fpdf->Cell(40,5,$rowM["creditos"],0,0,'C',1);
    $fpdf->Cell(40,5,$rowM["semestre"],0,0,'C',1);
    $fpdf->Cell(50,5,$rowM["salon"],0,0,'C',1);
    $fpdf->Ln(6);
}mysqli_free_result($resultM);

$fpdf->Output();
?>