<?php

require("fpdf/fpdf.php");
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'gce_hostel');

class PDF extends FPDF
{
function Header()
{
$this->SetFont("Arial","B",18);
$this->Cell(12);
$this->Cell(50,5,'Government College Of Engineering, Sengipatti, Thanjavur',"0",1);
$this->Ln(5);
$this->Cell(200,20,"GIRLS HOSTEL",'C',"0",1);
$this->Ln(20);
$this->SetFont("Arial","B",11);
$this->SetFillColor(180,180,225);

$this->Cell(35,5,'Student Id',1,0,'',true);
$this->Cell(20,5,'Roll No',1,0,'',true);
$this->Cell(20,5,'Room No',1,0,'',true);
$this->Cell(40,5,'Name',1,0,'',true);
$this->Cell(25,5,'Department',1,0,'',true);
$this->Cell(15,5,'Year',1,0,'',true);
$this->Cell(35,5,'Contact',1,0,'',true);
$this->Ln(5);
}
function Footer()
{
$this->Cell(0,10,'Page'.$this->PageNo()."/{pages}",0,0,'C');
}
}
/*
if(!empty($_POST['Submit']))
{
$mon=$_POST['month'];
$day=$_POST['days'];
$mes=$_POST['mess'];
*/
$pdf= new PDF('p','mm','A4');

$pdf->AliasNbPages("{pages}");
$pdf->SetAutoPageBreak(true,15);

$pdf->AddPage();

$pdf->SetFont("Arial","I",12);
$pdf->SetDrawColor(50,50,100);

$query=mysqli_query($con,"select * from girls");

//(font family,bold/italic/underline,size)
while($data=mysqli_fetch_array($query))
{
//(height,width,message,border,next data,alignment(c for center))
$pdf->cell(35,5,$data['Student_Id'],1,0);
//table structure(width,height,name,border(0 or 1),append/new line,alignment)
$pdf->cell(20,5,$data['Roll'],1,0);
$pdf->cell(20,5,$data['Room'],1,0);
$pdf->cell(40,5,$data['Name'],1,0);
$pdf->cell(25,5,$data['Department'],1,0);
$pdf->cell(15,5,$data['Year'],1,0);
$pdf->cell(35,5,$data['Contact'],1,1);

}
$pdf->output();


?>