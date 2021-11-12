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
body {
  margin: 0;
  padding: 0;
  height: 100vw;
 
}

.threeD {
	
	white-space: nowrap;
	position: absolute;
	top: 75%;
	left: 52%;
	transform: translate(-50%, -50%);
	font-size: 2em;
	font-family: sans-serif;
	letter-spacing: 0.1em;
	transition: 0.3s;
	text-shadow: 1px 1px 0 grey, 1px 2px 0 grey, 1px 3px 0 grey, 1px 4px 0 grey,
    1px 5px 0 grey,  1px 7px 0 grey, 1px 8px 0 grey,
    
	
}

.threeD:hover {
  transition: 0.3s;
  transform: scale(1.1)translate(-50%, -50%);
  text-shadow: 1px -2px 0 grey,
    1px -4px 0 grey,   1px -7px 0 grey,
    1px -8px 0 grey, 5px -13px 25px #808080 ;
}



.login {background-color:#FF3300; font-size:24px;}
.style3 {	font-family: 'Glyphicons Halflings';
	font-size: 18px;
}
.style13 {font-family: Georgia, "Times New Roman", Times, serif}
.style16 {color: #003300}
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
<li class="active"><a href="#" class="dropdown-toggle link link--yaku" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span>STUDENT VIEW</span> <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="boys_bill.php" class="link link--yaku"><span>BOYS HOSTEL</span></a></li>
								
							</ul>
					  </li>
						<li><a href="fee_struct.php" class="link link--yaku"><span>FEES STRUCTURE</span></a></li>
						 <li><a href="index.php" class="link link--yaku"><span>LOGOUT</span></a></li>
					
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
<div >  
		<div class="container">
		  <blockquote>
		    <form name="form1" method="post" action="boys_invoice.php">
			  <p>&nbsp;</p>
			  <p>&nbsp;</p>
			  <div class="threeD">
           <span class="style16">WELCOME</span> <?PHP echo $roll?></div>
			
	
		      
		      <table width="451" height="257" border="0" align="center">
                <tr>
                  <td width="266" height="36" class="btn-success"><div align="center" class="style13">REGISTER NUMBER </div></td>
                  <td width="284" class="list-group-item-success"><div align="center">
				  <?php $xyz=mysql_query("select DISTINCT Student_Id from girls where Roll='$roll'");
						$row=mysql_fetch_array($xyz);
						
						?>
                      <input name="sid" type="text" id="sid" value="<?php echo $row['Student_Id']?>" />
                  </div></td>
                </tr>
                <tr>
                  <td height="39" class="btn-success"><div align="center" class="style13">ROLL NUMBER </div></td>
                  <td class="list-group-item-success"><div align="center">
				  <?php $xyz=mysql_query("select DISTINCT Roll from girls where Roll='$roll'");
						$row=mysql_fetch_array($xyz);
						
						?>
                      <input name="roll" type="text" id="roll" value="<?php echo $row['Roll'];?>"/>
                  </div></td>
                </tr>
                <tr>
                  <td height="37" class="btn-success"><div align="center" class="style13">ROOM NUMBER </div></td>
                  <td class="list-group-item-success"><div align="center">
				    <?php $xyz=mysql_query("select DISTINCT Room from girls where Roll='$roll'");
						$row=mysql_fetch_array($xyz);
						
						?>
                      <input name="room" type="text" id="room" value="<?php echo $row['Room'];?>"/>
                  </div></td>
                </tr>
                <tr>
                  <td height="42" class="btn-success"><div align="center" class="style13">NAME</div></td>
                  <td class="list-group-item-success"><div align="center">
				   <?php $xyz=mysql_query("select DISTINCT Name from girls where Roll='$roll'");
						$row=mysql_fetch_array($xyz);
						
						?>
                      <input name="name" type="text" id="name" value="<?php echo $row['Name'];?>"/>
                  </div></td>
                </tr>

                <tr>
                  <td height="37" class="btn-success"><div align="center" class="style13">YEAR</div></td>
                  <td class="list-group-item-success"><div align="center">
				  <?php $xyz=mysql_query("select DISTINCT Year from girls where Roll='$roll'");
						$row=mysql_fetch_array($xyz);
						
						?>
                      <input name="year" type="text" id="year" value="<?php echo $row['Year'];?>" />
                  </div></td>
                </tr>
              </table>
		      <table width="390" border="0" align="center">
                <tr>
                  <td colspan="2">&nbsp;</td>
                </tr>
                <tr>
                  <td width="148"><div align="center" class="tooltip-inner">SELECT MONTH </div></td>
                  <td width="232"><div align="center">
                      <input name="month" type="MONTH" id="month">
                  </div></td>
                </tr>
                <tr>
                  <td height="68">&nbsp;</td>
                  <td><div align="center">
                      <label>
                      <input name="invoice" type="submit" id="invoice" value="Bill">
                      </label>
                  <a href="invoice.php" target="_blank" class="style3"></a></div></td>
                </tr>
              </table>
	

	          </form>
          </blockquote>
		  <p>&nbsp;</p>
			<div class="agileinfo-gallery-row">
			  <div class="clearfix"> </div>
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
			<p>© 2019 GCE HOSTEL. All rights reserved | Design by <a href="http://w3layouts.com"> W3layouts.</a></p>
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