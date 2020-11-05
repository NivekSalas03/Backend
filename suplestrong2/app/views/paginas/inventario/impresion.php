<?php
    $pdf=new FPDF;
    $pdf->AddPage('L');
    $pdf->SetFont('arial','8',16);
    $pdf->Image(RUTA_URL . '/img/logo.png',0,0,295);
    $pdf->SetFillColor(90,90,90);
    $pdf->SetTextColor(255);
    $pdf->SetXY(35,17.5);
    $pdf->Cell(240,10,utf8_decode('SupleStrong, S.A. de C.V'),1,1,'C',1);
    $pdf->SetY(38);
    $pdf->SetTextColor(0);
    $pdf->Cell(270,7,'Listado de productos',0,1,'C');
    $pdf->Ln(2);
    #Encabezado
    $pdf->SetFont('arial','8',12);
    $pdf->Cell(35,6,'Nombre Producto','LT',0,'C');
    $pdf->Cell(60,6,'Cantidad','LT',0,'C');
    $pdf->Cell(50,6,'Precio Unitario','LT',0,'C');
    $pdf->Cell(100,6,'Instrucciones','LTR',0,'C');
    $pdf->Cell(25,6,'Precio Total','LTR',1,'C');
    $pdf->SetFont('arial','',10);
    
    foreach($datos['productos'] as $key=>$productos){
    $pdf->Cell(35,5,$productos['NombreProducto'],'LTB',0,'C');
    $pdf->Cell(60,5,$productos['Cantidad'],'LTB',0,'C');
    $pdf->Cell(50,5,$productos['Precio'],'LTB',0,'C');
    $pdf->Cell(100,5,$productos['Instrucciones'],'LTB',0,'C');
    $pdf->Cell(25,5,$productos['Precio']*$productos['Cantidad'],'LTBR',1,'C');
    }
    $pdf->SetY(-30);
    $pdf->Cell(260,5,'Derechos Reservados '. date('Y'),0,0,'R');
    $pdf->OutPut('Productos'.'.pdf','I');
?>