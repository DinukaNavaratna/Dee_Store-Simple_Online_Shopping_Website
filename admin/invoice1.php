<?php
require('fpdf183/fpdf.php');
//db connection
include 'config/config.php';
//A4 width 219mm
//Default margin : 10mm
//writable horizental

//Get Invoice data
$query = mysqli_query($con,"select * from orders where id = '".$_GET['id']."'");
$invoice = mysqli_fetch_array($query);

//$queryy = mysqli_query($con,"select * from users where id = '".$_GET['id']."'");
//$invoicee=mysqli_fetch_array($queryy);

$pdf = new FPDF();

$pdf->AddPage();


$pdf->SetFont('Arial','B',14);
//set iamge in the page
$pdf->Image('img/bblogo31.jpg',130,50,80);




$pdf->Cell(130,6,'Blush Boutique.lk',0,0);
$pdf->Cell(59,6,'ORDER INVOICE',0,1);

$pdf->SetFont('Arial','',12);

$pdf->Cell(130,5,'No:24/9,New Flower Lane',0,0);
$pdf->Cell(59,5,'',0,1);

$pdf->Cell(130,5,'Galle,Sri Lanka.',0,0);
$pdf->Cell(25,5,'Date',0,0);
$pdf->Cell(34,5,$invoice['timestamp'],0,1);

$pdf->Cell(130,5,'0362 222 261',0,0);
$pdf->Cell(25,5,'Order ID',0,0);
$pdf->Cell(34,5, $invoice['id'],0,1);


$pdf->Cell(130,5,'Fax [+362 222 261]',0,0);
$pdf->Cell(25,5,'Email',0,0);
$pdf->Cell(34,5,$invoice['email'],0,1);
//make dummy empty vertical space



$pdf->cell(189,10,'',0,1);//end
$pdf->cell(189,10,'',0,1);

$pdf->Cell(100,5,'Order to  :  ',0,1);

//add summy cell at begining of each line 

$pdf->Cell(10,5,'',0,0);
$pdf->Cell(90,5,$invoice['name'],0,1);

$pdf->Cell(10,5,'',0,0);
$pdf->Cell(90,5,$invoice['address'],0,1);

$pdf->Cell(10,5,'',0,0);
$pdf->Cell(90,5,$invoice['postcode'],0,1);

$pdf->Cell(10,5,'',0,0);
$pdf->Cell(90,5,$invoice['city'],0,1);

// make a dummy empty cell
$pdf->Cell(109,10,'',0,1);


//Invoice content
$pdf->SetFont('Arial','B',12);

$pdf->Cell(30,5,'Phone',1,0);
$pdf->Cell(100,5,'Email',1,0);
$pdf->Cell(34,5,'Total',1,0);
$pdf->Cell(25,5,'Status',1,1);

$pdf->SetFont('Arial','',12);

//numbers are right aligned so we give R after new line

$pdf->Cell(30,5,$invoice['phone'],1,0);
$pdf->Cell(100,5,$invoice['email'],1,0);
$pdf->Cell(34,5,$invoice['total'],1,0);
$pdf->Cell(25,5,$invoice['status'],1,1,'R');//end line

/*
$pdf->Cell(130,5,'Dishwasher',1,0);
$pdf->Cell(25,5,'.',1,0);
$pdf->Cell(34,5,'2,500',1,1,'R');
*/
//Summery
//$pdf->Cell(100,10,'',0,1);

$pdf->Cell(100,5,'',0,0);
$pdf->Cell(50,5,'Total Charges',1,0);
$pdf->Cell(10,5,'Rs.',1,0);
$pdf->Cell(30,5,$invoice['total'],1,1,'R');



$pdf->Output();

?>

