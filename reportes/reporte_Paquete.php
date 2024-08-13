<?php
require "fpdf.php";

class PDF extends FPDF{
    // Encabezado
    function Header() {
        // Logo, el 83 define el tamaño, el 10 es un tab, el 8 es líneas
        $this->Image('logo_developer.png',10,8,30);
        $this->Image('logo_equipo.png',240,8,30);
    }

    // Pie de página
    function Footer() {
        // Posición a 1.5 cm del final
        $this->SetY(-15);
        // Fuente Arial itálica 8
        $this->SetFont('Arial','I',8);
        // Número de página
        $this->Cell(0,10,'Developer Web2024',0,0,'C');
    }
}

// Creación de la hoja
$pdf = new PDF('L', 'mm','Letter');
$pdf->setMargins(20,18);
$pdf->AliasNbPages();
$pdf->AddPage();

// Título
$pdf->SetTextColor(0x00,0x00,0x00);
$pdf->SetFont('Arial','b',16);
$pdf->Cell(0,10,'DEVELOPER WEB',0,1,'C');
$pdf->Cell(0,10,'Lista de Paquetes',0,1,'C');

// Cadena de conexión
$con = mysqli_connect("localhost","root","","developer_web2");
$pdf->Ln();

// Salto de línea
$pdf->Ln();

// Consulta a la base de datos
$consulta = "SELECT id_paquete,tipo_paquete,caracteristicas,costo FROM paquetes";
$result = mysqli_query($con,$consulta);
$pdf->Ln();

// Cabeceras de las tablas
$pdf->SetFont('Arial','b',8);  
$pdf->Cell(15,5, "Id",1,0,'C');
$pdf->Cell(40,5, utf8_decode("Tipo de paquete"),1,0,'C');
$pdf->Cell(150,5, utf8_decode("Características"),1,0,'C');
$pdf->Cell(30,5, "Costo",1,0,'C');

while($row = mysqli_fetch_array($result)){ 
    $pdf->Ln();
    $pdf->Cell(15,5, utf8_decode($row[0]),1,0,'C');
    $pdf->Cell(40,5, utf8_decode($row[1]),1,0,'C');
    $pdf->Cell(150,5, utf8_decode($row[2]),1,0,'C');
    $pdf->Cell(30,5, utf8_decode($row[3]),1,0,'C');
}

mysqli_close($con);
session_start();
if ($_SESSION['validada'] == 1) {
    $pdf->Output();
} else {
    header('location: ../inicio_sesion.html');
}
?>