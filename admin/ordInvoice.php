<?php
require('fpdf183/fpdf.php');
//db connection
include 'config/config.php';
//A4 width 219mm
//Default margin : 10mm
//writable horizental



//$queryy = mysqli_query($con,"select * from users where id = '".$_GET['id']."'");
//$invoicee=mysqli_fetch_array($queryy);

$pdf = new FPDF();

$pdf->AddPage();



// make a dummy empty cell
$pdf->Cell(109,10,'',0,1);








//Invoice content
class PDF extends FPDF{


function Header(){



$this->SetFont('Arial','B',16);

$this->Cell(12);

$this->Cell(100,10,'Order List',0,1);

$this->Ln(5);


$this->SetFont('Arial','',12);

$this->SetFillColor(100,100,255);
$this->SetDrawColor(50,50,100);
$this->Cell(10,5,'ID',1,0,'',true);
$this->Cell(30,5,' Name',1,0,'',true);
$this->Cell(75,5,'Address',1,0,'',true);

$this->Cell(15,5,'PostCode',1,0,'',true);
$this->Cell(20,5,'City',1,0,'',true);
$this->Cell(30,5,'Phone',1,0,'',true);
$this->Cell(30,5,'Email',1,0,'',true);
$this->Cell(30,5,'Total',1,0,'',true);
$this->Cell(35,5,'Status',1,1,'',true);
}
function Footer(){

	$this->SetY(-15);

	$this->SetFont('Arial','',0);

	$this->Cell(0,10,'Page'.$this->PageNo()."/{pages}",0,0,'C');

}
}




$pdf = new PDF('L','mm','A4');


$pdf->AliasNbPages('{pages}');



$pdf->AddPage();




$pdf->SetFont('Arial','',9);
$pdf->SetDrawColor(50,50,100);

$query=mysqli_query($con,"select * from orders");
while($data=mysqli_fetch_array($query)){

$pdf->Cell(10,5,$data['id'],1,0);
$pdf->Cell(30,5,$data['name'],1,0);
$pdf->Cell(75,5,$data['address'],1,0);
$pdf->Cell(15,5,$data['postcode'],1,0);
$pdf->Cell(20,5,$data['city'],1,0);
$pdf->Cell(30,5,$data['phone'],1,0);
$pdf->Cell(30,5,$data['email'],1,0);
$pdf->Cell(30,5,$data['total'],1,0);
$pdf->Cell(35,5,$data['status'],1,1);





}




/*
$pdf->Cell(130,5,'Dishwasher',1,0);
$pdf->Cell(25,5,'.',1,0);
$pdf->Cell(34,5,'2,500',1,1,'R');
*/
//Summery
//$pdf->Cell(100,10,'',0,1);


$pdf->Output();