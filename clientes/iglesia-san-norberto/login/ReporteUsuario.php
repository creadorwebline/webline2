<?php
require('../../../fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Arial bold 15
    $this->SetFont('Arial','B',10);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
    $this->Cell(30,10,'REPORTE USUARIOS',0,0,'C');
    // Salto de línea
    $this->Ln(20);
    $this->Cell(30,10,'num-APELLIDO',1,0,'C',0);
    $this->Cell(30,10,'NOMBRE',1,0,'C',0);
    $this->Cell(30,10,'CEDULA',1,0,'C',0);
    $this->Cell(30,10,'TELEFONO',1,0,'C',0);
    $this->Cell(30,10,'FECHA',1,0,'C',0);
    $this->Cell(20,10,'HORA',1,0,'C',0);
    $this->Cell(22,10,'TEM/RA',1,0,'C',0);
    $this->Ln(10);
}
}



// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}

require '../../db/con_db.php';
// Creación del objeto de la clase heredada
$sql =  $_GET["sql"];
if($sql==null){
    $consulta = "SELECT * FROM horarios ORDER BY apellido ASC";
    $result = mysqli_query($conex, $consulta);    
}else{
    $sql = $sql." ORDER BY apellido ASC";
    $consulta = "SELECT * FROM horarios where ".$sql;
    $result = mysqli_query($conex, $consulta);    
}


$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','I',10);
$numeracion=0;
while($row =mysqli_fetch_array($result)){
    $numeracion=$numeracion+1;
    $pdf->Cell(30,10,utf8_decode($numeracion."-".$row['apellido']),1,0,'L',0);
    $pdf->Cell(30,10,utf8_decode($row['nombre']),1,0,'L',0);
    $pdf->Cell(30,10,utf8_decode($row['cedula']),1,0,'L',0);
    $pdf->Cell(30,10,utf8_decode($row['telefono']),1,0,'L',0);
    $pdf->Cell(30,10,utf8_decode($row['fecha']),1,0,'L',0);
    $pdf->Cell(20,10,utf8_decode($row['hora']),1,0,'L',0);
    $pdf->Cell(22,10,utf8_decode($row['temperatura']),1,0,'L',0);
    $pdf->Ln(10);
}
$pdf->Output();
