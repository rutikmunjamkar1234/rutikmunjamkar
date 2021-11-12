<?php
include("dbconnect.php");
extract($_POST);
session_start();
if(isset($_POST['Submit']))
{
$uid=$_SESSION['Id'];

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>GCE HOSTEL</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Kids Care Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all"> 
<link href='css/simplelightbox.css' rel='stylesheet' type='text/css'> 
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script> 
<!-- //js -->
<!-- web-fonts --> 
<link href="//fonts.googleapis.com/css?family=Parisienne" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Yanone+Kaffeesatz:200,300,400,700" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- //web-fonts -->
<style type="text/css">
<!--
p {
  position: relative;
  font-family: sans-serif;
  
  font-size: 2em;
  letter-spacing: 4px;
  overflow: hidden;
  background: linear-gradient(90deg,  #fff, #000);
  background-repeat: no-repeat;
  background-size: 90%;
  animation: animate 10s linear infinite;
  -webkit-background-clip: text;
  -webkit-text-fill-color: rgba(255, 255, 255, 0);
}

@keyframes animate {
  0% {
    background-position: -500%;
  }
  100% {
    background-position: 50%;
  }
.style3 {
	font-family: 'Glyphicons Halflings';
	font-size: 10px;
}
.style5 {font-size: 14%}
-->
</style>
</head>
<body> 
<!-- header -->
<div class="headerw3l">
<nav class="navbar navbar-default">
<div class="container">
<div class="navbar-header navbar-left">
<h1><a href="index.php">Government College Of Engineering <span><i>Learn.</i> <i class="logo-w3l2">Share.</i> <i class="logo-w3l4"> Grow.</i></span></a></h1>
</div>
<!-- navigation --> 
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button> 
<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1"> 
<ul class="nav navbar-nav navbar-left">
<li  ><a href="boys_home.php" class="link link--yaku"><span>H</span><span>O</span><span>M</span><span>E</span></a></li>

<li ><a href="#" class="dropdown-toggle link link--yaku" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span>STUDENT VIEW</span> <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="boys_bill.php" class="link link--yaku"><span>BOYS HOSTEL</span></a></li>
								
							</ul>
					  </li>
<li class="active"><a href="fee_struct.php" class="link link--yaku"><span>FEES STRUCTURE</span> </a></li>
<li><a href="boys_login.php" class="link link--yaku"><span>LOGOUT</span></a></li>
</ul> 
<div class="clearfix"> </div>
</div><!-- //navigation --> 
</div> 
</nav> 
</div> 
<!-- //header -->
<!-- banner -->
<div class="banner about-w3banner"> 
<div class="banner-img1">
<div class="banner-w3text">
<h2>&nbsp;</h2>
</div>
</div> 
</div>
<!-- //banner --> 
<!-- gallery -->
<div class="gallery w3-agileits"> 
<div class="container">
  <form name="form1" method="post" action="">
    <table width="845" border="0" align="center">
      <tr>
        <td colspan="5"><div align="left">
          <p><em><strong>INSTRUCTIONS:</strong></em></p>
          <p align="left" class="style5">Hello Students....!It's the time to check your mess bill structure categorized by month.</p>
          <p align="left" class="style5">&nbsp;</p>
        </div></td>
        </tr>
    </table>
    <table width="707" height="163" border="0" align="center">
      <tr>
        <td><div align="center" class="tooltip-inner">SELECT MONTH </div></td>
        <td colspan="2"><div align="center">
            <input name="month" type="MONTH" id="month">
        </div></td>
        <td><div align="center">
            <input type="submit" name="Submit" value="Submit">
        </div></td>
      </tr>
      <tr>
        <td width="205" height="44"><div align="center" class="tooltip-inner">MONTH</div></td>
        <td width="154"><div align="center" class="tooltip-inner">NO OF DAYS </div></td>
        <td width="162"><div align="center" class="tooltip-inner">MESS FEE </div></td>
        <td width="168"><div align="center" class="tooltip-inner">TOTAL</div></td>
      </tr>
      <tr class="alert-danger">
        <?php 
 $qry1=mysql_query("select * from fee_struct where  Month='$month' ");
while($xyz=mysql_fetch_array($qry1))
{
$month=$xyz['Month'];
}	 
$qry2=mysql_query("select * from fees_det where Month='$month' ");
while($row=mysql_fetch_array($qry2))
{
?>
        <td class="alert-warning"><div align="center">
            <p>&nbsp;</p>
          <?php echo $row["Month"];?></div></td>
        <td class="alert-warning"><div align="center">
            <p>&nbsp;</p>
          <?php echo $row["Days"];?></div></td>
        <td class="alert-warning"><div align="center">
            <p>&nbsp;</p>
          <?php echo $row["Mess_Fee"];?></div></td>
        <td class="alert-warning"><div align="center">
            <p>&nbsp;</p>
          <?php echo $row["Total"];?></div></td>
      </tr>
      <tr>
        <td class="alert-warning">&nbsp;</td>
        <td colspan="2" class="alert-warning"><label>
          <div align="center"><a href="invoice.php" target="_blank" class="style3"></a></div>
        </label></td>
        <td class="alert-warning">&nbsp;</td>
      </tr>
      <?php 
 }
  ?>
    </table>
    <label></label>
  </form>
  <div class="agileinfo-gallery-row">
<div class="clearfix"> </div>
<script type="text/javascript" src="js/simple-lightbox.min.js"></script>
<script>
$(function(){
var gallery = $('.agileinfo-gallery-row a').simpleLightbox({navText:	['&lsaquo;','&rsaquo;']});
});
</script> 
</div> 
</div>
</div>
<!-- //gallery --> 
<!-- footer -->
<div class="footer w3layouts">
<div class="container">
<div class="footer-agileinfo">
<div class="col-md-3 col-sm-6 footer-grid">
<h3>Useful Info</h3>
<ul>
<li><a href="#"><i class="glyphicon glyphicon-chevron-right"></i>Hendrerit quam</a></li>
<li><a href="#"><i class="glyphicon glyphicon-chevron-right"></i>Amet consectetur </a></li>
<li><a href="#"><i class="glyphicon glyphicon-chevron-right"></i>Iquam hendrerit</a></li>
<li><a href="#"><i class="glyphicon glyphicon-chevron-right"></i>Donec ut lectus </a></li>
</ul>
</div> 
<div class="col-md-3 col-sm-6 footer-grid footer-tags">
<h3>Tag Cloud</h3>
<ul>
<li><a href="index.html">Home</a></li>
<li><a href="about.html">About</a></li>
<li><a href="codes.html">Codes</a></li>
<li><a href="gallery.html">Gallery</a></li>
<li><a href="contact.html">Contact Us</a></li>
</ul>
</div>
<div class="col-md-4 col-sm-6 footer-grid footer-review">
<h3>Newsletter</h3>
<p>Maecenas sodales tortor ac ligula ultrices dictum et quis urna neque eget.</p> 
<form action="#" method="post">
<input type="email" name="Email" placeholder="Your Email" required="">
<input type="submit" value="Subscribe"> 
<div class="clearfix"> </div>
</form> 
</div>
<div class="col-md-2 col-sm-6 footer-grid w3social">
<h3>Social Media</h3>
<ul>
<li><a href="#"><i class="fa fa-google-plus"></i>Google-plus</a></li>
<li><a href="#"><i class="fa fa-facebook"></i>Facebook</a></li>
<li><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
<li><a href="#"><i class="fa fa-dribbble"></i>Dribbble</a></li>
</ul>
</div>
<div class="clearfix"> </div>
</div> 
</div>
</div>
<div class="copy-right"> 
<div class="container">
<p>© 2017 Kids Care . All rights reserved | Design by <a href="http://w3layouts.com"> W3layouts.</a></p>
</div>
</div> 
<!-- //footer --> 
<!-- start-smooth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script> 
<script type="text/javascript">
jQuery(document).ready(function($) {
$(".scroll").click(function(event){ 
event.preventDefault();

$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
});
});
</script>
<!-- //end-smooth-scrolling --> 
<!-- smooth-scrolling-of-move-up -->
<script type="text/javascript">
$(document).ready(function() {
/*
var defaults = {
containerID: 'toTop', // fading element id
containerHoverID: 'toTopHover', // fading element hover id
scrollSpeed: 1200,
easingType: 'linear' 
};

*/

$().UItoTop({ easingType: 'easeOutQuart' });

});
</script>
<!-- //smooth-scrolling-of-move-up --> 
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/bootstrap.js"></script>
</body>
</html> 