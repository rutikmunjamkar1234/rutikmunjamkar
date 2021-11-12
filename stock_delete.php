<?php
include("dbconnect.php");
session_start();
extract($_POST);
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
.style4 {
	font-family: "Lucida Calligraphy";
	font-size: 24px;
}
.style13 {font-family: Georgia, "Times New Roman", Times, serif}
.style11 {font-size: 18px; }
.style6 {color: #FF0000}
.style7 {font-family: "Lucida Calligraphy"; font-size: 24px; color: #FF0000; }
.style8 {animation: blinkingText 0.5s infinite;
	font-family: "Lucida Calligraphy";
	font-size: 18px;
	color: #FF0000;
}
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
						<li ><a href="admin_home.php" class="link link--yaku"><span>H</span><span>O</span><span>M</span><span>E</span></a></li>
<li><a href="#" class="dropdown-toggle link link--yaku" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span>STUDENT REGISTER</span> <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="boys.php" class="link link--yaku"><span>BOYS HOSTEL</span></a></li>
								<li><a href="girls.php" class="link link--yaku"><span>GIRLS HOSTEL</span></a></li>
							</ul>
					  </li>
						<li><a href="fee_details.php" class="link link--yaku"><span>FEES DETAILS</span> </a></li>
						<li class="active"><a href="stock.php" class="link link--yaku"><span>STOCK MAINTAINANCE</span> </a></li>
						<li   ><a href="#" class="dropdown-toggle link link--yaku" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span>STUDENT DETAILS</span> <span class="caret"></span></a>
						<ul class="dropdown-menu">
								<li><a href="boys_det.php" class="link link--yaku"><span>BOYS HOSTEL</span></a></li>
								<li><a href="girls_det.php" class="link link--yaku"><span>GIRLS HOSTEL</span></a></li>
						  </ul></li>
					 <li><a href="admin.php" class="link link--yaku"><span>LOGOUT</span></a></li>
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
		    <p align="center" class="text-danger style4">Managing Stock Maintainance</p>
		    <p align="center" class="text-danger style4"><a href="stock_pdf.php" target="_blank"><span class="style8">Generate PDF ...! </span></a> </p>
		    <table width="935" height="51" border="0" align="center">
              <tr>
                <td class="badge-warning"><div align="center" class="style6"><a href="stock_list.php" target="_self" class="style7">SEARCH</a></div></td>
                <td class="badge-warning"><div align="center" class="style7"><a href="stock_view.php" target="_self" class="style6">VIEW</a></div></td>
                <td class="badge-warning"><div align="center" class="style7"><a href="stock_update.php" target="_self" class="style6">UPDATE</a></div></td>
                <td class="badge-warning"><div align="center" class="style7"><a href="stock_delete.php" target="_self" class="style6">DELETE</a></div></td>
              </tr>
            </table>
		    <table width="938" height="158" border="2" align="center">
              <tr>
                <td width="138"><div align="center" class="style11">
                    <p>ITEM NUMBER  </p>
                </div></td>
                <td width="112"><div align="center" class="style11">
                    <p>ITEM NAME </p>
                </div></td>
                <td width="96"><div align="center" class="style11">
                    <p>DATE </p>
                </div></td>
                <td width="126"><div align="center" class="style11">
                    <p>QUANTITY</p>
                </div></td>
                <td width="174"><div align="center" class="style11">
                    <p>AVAILABLE</p>
                </div></td>
                <td width="220"><div align="center" class="style11">
                    <p>REMARKS</p>
                </div></td>
                <td width="78"><div align="center" class="style11">
                    <p>DELETE</p>
                </div></td>
              </tr>
              <?php 
	$xyz=mysql_query("select * from stock ");
while(	$row=mysql_fetch_array($xyz))
{
?>
              <tr>
                <td class="alert-danger"><div align="center"><?php echo $row["Item_Number"];?></div></td>
                <td class="alert-danger"><div align="center"><?php echo $row["Item_Name"];?></div></td>
                <td class="alert-danger"><div align="center"><?php echo $row["Date"];?></div></td>
                <td class="alert-danger"><div align="center"><?php echo $row["Quantity"];?></div></td>
                <td class="alert-danger"><div align="center"><?php echo $row["Available"];?></div></td>
                <td class="alert-danger"><div align="center"><?php echo $row["Remarks"];?></div></td>
                <td class="alert-danger"><div align="center"><a href="stock_delete1.php?Id=<?php echo $row["Id"];?> " target="_self"><em>truncate</em></a></div></td>
              </tr>
              <?php 
	}
	?>
              <tr>
                <td class="alert-danger">&nbsp;</td>
                <td class="alert-danger">&nbsp;</td>
                <td class="alert-danger">&nbsp;</td>
                <td class="alert-danger">&nbsp;</td>
                <td class="alert-danger">&nbsp;</td>
                <td class="alert-danger">&nbsp;</td>
                <td class="alert-danger">&nbsp;</td>
              </tr>
            </table>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;	</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
		  </form>
		  <div class="agileinfo-gallery-row">
			  <div class="clearfix"></div>
				<script type="text/javascript" src="js/simple-lightbox.min.js"></script>
				<script>
					$(function(){
						var gallery = $('.agileinfo-gallery-row a').simpleLightbox({navText:		['&lsaquo;','&rsaquo;']});
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
			<p>© 2019 GCE HOSTEL,THANJAVUR . All rights reserved | Design by <a href="http://w3layouts.com"> W3layouts.</a></p>
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