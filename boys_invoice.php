<?php

require("fpdf/fpdf.php");
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'gce_hostel');

if(!empty($_POST['invoice']))
{
$stu=$_POST['name'];
$sid=$_POST['sid'];
$roll=$_POST['roll'];
$room=$_POST['room'];
$year=$_POST['year'];
$dept=$_POST['dept'];
$mon=$_POST['month'];
$query=mysqli_query($con,"select DISTINCT Total from fees_det where Month='$mon'");
$row=mysqli_fetch_array($query);
$Total=$row['Total'];
$query1=mysqli_query($con,"select DISTINCT Days from fees_det where Month='$mon'");
$row1=mysqli_fetch_array($query1);
$days=$row1['Days'];
class PDF extends FPDF
{
function Header()
{
$this->Ln(5);
$this->Image('gce.png',10,30,40);
$this->SetFont("Arial","BU",22);
$this->Cell(10);
$this->Cell(70,10,'Government College Of Engineering, Sengipatti.',"0",1);
$this->Ln(15);
$this->Cell(70);
$this->Cell(80,5,'BOYS HOSTEL','C',0,1);
$this->SetFont("Arial","B",22);
$this->Ln(20);
$this->Cell(60);
$this->Cell(80	,10,"MESS BILL RECEIPT ",1,1);
$this->Ln(5);
$this->SetFont("Arial","B",22);
$this->SetFillColor(180,180,225);

}
function Footer()
{
$this->Ln(10);
//$this->Cell(0,10,'Page'.$this->PageNo()."/{pages}",0,0,'C');
}
}

$pdf= new PDF('p','mm','A4');

$pdf->AliasNbPages("{pages}");
$pdf->SetAutoPageBreak(true,15);

$pdf->AddPage();

$pdf->SetFont("Courier","I",18);
$pdf->SetDrawColor(50,50,100);

//$query=mysqli_query($con,"select * from boys");

//(font family,bold/italic/underline,size)
//while($data=mysqli_fetch_array($query))
{
//(height,width,message,border,next data,alignment(c for center))
//table structure(width,height,name,border(0 or 1),append/new line,alignment)
$pdf->Ln(5);
$pdf->Cell(0,10,"      This is Certified that Selvan {$stu}",0,1);
$pdf->Ln(2);
$pdf->Cell(0,10," (Reg.No:{$sid}) of {$year}th year {$dept} who is located",0,1);
$pdf->Ln(2);
$pdf->Cell(0,12," at the room {$room} has paid Rs.{$Total}/- only",0,1);
$pdf->Ln(2);
$pdf->Cell(0,12," as a Mess Bill for the month of {$mon}({$days} days).",0,1);
$pdf->Cell(0,12,"      If there is any reduction in mess bill,  ",0,1);
$pdf->Cell(0,12," fill the following:  ",0,1);
$pdf->SetFont("Courier","B",18);
$pdf->Cell(0,12," No.Of Days   :                     ",0,1);

$pdf->Cell(0,12," Total fee    : {$Total}  (-) ",0,1);
$pdf->Cell(0,12," Reduction fee: ",0,1);
$pdf->Cell(0,12,"                ------ ",0,1);
$pdf->Cell(0,12," Grand Total  :          ",0,1);
$pdf->Cell(0,12,"                ------ ",0,1);

$pdf->Cell(0,12," ",0,1);
$pdf->Ln(10);
$pdf->SetFont("Courier","B",18);
$pdf->Cell(0,12," Student's Signature           Warden's Signature",0,1);
$pdf->Cell(0,12,"   (   /   /20   )",0,1);

}
$pdf->output();

}
?>