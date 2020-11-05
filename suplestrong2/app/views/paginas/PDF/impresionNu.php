<?php
    $pdf=new FPDF;
    $pdf->AddPage('L');
    $pdf->SetFont('arial','8',16);
    $pdf->Image(RUTA_URL . '/public/img/logo.png',10,10,40);

    $pdf->SetY(20);
    $pdf->SetTextColor(0);
    $pdf->Cell(270,7,utf8_decode('Plan de Nutrición semanal'),0,1,'C');
    $pdf->Ln(2);
    #Encabezado
    $pdf->Image(RUTA_URL . '/public/img/PlanNu.png',0,38,280,160);
    //$pdf->SetFont('arial','8',12);
    //$pdf->Cell(35,5,'Comida del dia','LT',0,'C');
    //$pdf->Cell(35,5,'Lunes','LT',0,'C');
    //$pdf->Cell(35,5,'Martes','LT',0,'C');
    //$pdf->Cell(35,5,'Miercoles','LT',0,'C');
    //$pdf->Cell(35,5,'Jueves','LT',0,'C');
    //$pdf->Cell(35,5,'Viernes','LT',0,'C');
    //$pdf->Cell(35,5,'Sabado','LT',0,'C');
    //$pdf->Cell(35,5,'Domingo','LTR',1,'C');
    //$pdf->SetFont('arial','',8);
    //
    //$Y=44;
    //foreach($datos['Nutri'] as $key=>$usuario){
    //    
    //    
    //$pdf->SetXY(10,$Y);
    //$pdf->MultiCell(35,7,$usuario['Comida'],'LTBR','L');
    //$pdf->SetXY(45,$Y);
    //$pdf->MultiCell(35,7,$usuario['Lunes'],'LTBR','L');
    //$pdf->SetXY(80,$Y);
    //$pdf->MultiCell(35,7,$usuario['Martes'],'LTBR','L');
    //$pdf->SetXY(115,$Y);
    //$pdf->MultiCell(35,7,$usuario['Miercoles'],'LTBR','l');
    //$pdf->SetXY(150,$Y);
    //$pdf->MultiCell(35,7,$usuario['Jueves'],'LTBR','L');
    //$pdf->SetXY(185,$Y);
    //$pdf->MultiCell(35,7,$usuario['Viernes'],'LTBR','L');
    //$pdf->SetXY(220,$Y);
    //$pdf->MultiCell(35,7,$usuario['Sabado'],'LTBR','L');
    //$pdf->SetXY(255,$Y);
    //$pdf->MultiCell(35,7,$usuario['Domingo'],'LTBR','L');
    //$Y=$Y+25;
    //}
    
    $pdf->OutPut('usuarios'.time().'.pdf','I');
?>