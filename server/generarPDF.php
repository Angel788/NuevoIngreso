<?php
    require('libraries/fpdf/fpdf.php');
    class PDF extends FPDF{
        function header(){
            $this->Image('utilities/logoPEM.png',10,10,200);
            $this->Ln(20);
        }
        function footer(){
            $this->SetY(-20);
            $this->SetFont('helvetica','I','10');
            $this->Cell(0,15,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
        }
    }
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf ->AddPage();
    $pdf->SetFont('courier','B',14);
    $pdf->Cell(40,20,"Curp: ".$_GET['curp'],0,1);
    $pdf->Cell(40,20,"Boleta: ".$_GET['boleta'],0,1);
    $pdf->Cell(40,20,"Salon: ".$_GET['salon'],0,1);
    $pdf->Cell(40,20,"Horario: ".$_GET['horario'],0,1);
    $pdf->Output();
?>