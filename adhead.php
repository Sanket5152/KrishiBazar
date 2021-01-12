<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();
	if ((!(isset($_SESSION["login"]))) || (!(isset($_SESSION["pwd"]))))
	{
		
		header("Location:adminlogin.php?b=1");
	}
	?>
<!DOCTYPE HTML>
<html>
<head>
<title>Krishi Bazar</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.0.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/page.css" rel="stylesheet" type="text/css">	
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }>
</script>
<meta name="keywords" content="Agrom Responsive web template, Bootstrap Web Templates, Flat Web Templates, AndriodCompatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<!--Google Fonts-->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/validate.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
</script>
<!-- //end-smoth-scrolling -->
<script src="js/menu_jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
	 
	<script src="js/addp.js"></script>
	<script src="js/pass.js"></script>
	<script src="gu/jsapi.js"></script>
	<script src="docs/js/jquery.min.js"></script>

<!---pop-up-box---->
					<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
					<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
					<!---//pop-up-box---->
					 <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
				</script>		
</head>
<style type="text/css">
	.dropbtn {
    background-color: #000080;
    color: white;
    padding: 10px;
    font-size: 16px;
    border: none;
    border-radius:8px;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 20px 20px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #800080}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: black;
}

</style>
<body>
<!--header start here-->
<div class="header">
	<div class="container">
		
	             
			   <div class="header-right" style="align-content:center;">
				  
				   	   <h1><a href="admain.php">Krishibazar</a></h1>
				</div>

		
</div>	
	
				  
		    <div class="clearfix"> </div>
	     </div>
	     <div class="clearfix"> </div>
     </div>
   </div>
</div>
<!--header end here-->
<!--top nav start here-->
<div class="top-navg-main">
	<div class="container" style="  width: 99%;
    height: 50px;
  
    background-color: lightgray;
     margin-bottom: 25px;
    box-shadow: 10px 10px 5px #888488;">
	    <div class="top-navg " style="float:left;">
	    	           <span class="menu"> <img src="images/icon.png" alt=""/></span>
				<ul class="res">
				
				    <li><a href="index.php" class="active hvr-sweep-to-bottom">Home</a></li> 
					<li><a class="hvr-sweep-to-bottom" href="apmcserch.php"> APMC Detail</a></li> 
					<li><a class="hvr-sweep-to-bottom" href="addcat.php">Catagory </a></li>
					<li><a class="hvr-sweep-to-bottom" href="addpro.php"> Product </a></li> 
					<li><a class="hvr-sweep-to-bottom" href="addvat.php">Variety</a></li> 
					
					

					
				 </ul>
				 </div>

				 <div class="abc" style="float: right;padding-right:20px; padding-top: 2px;padding-bottom: 5px">
				   
				   <a href="adlogout.php"><button class="btn btn-success btn-lg btn-block" style="background-color:#006699;width:120px; "><span class="glyphicon glyphicon-log-out"></span>&nbsp;Logout</button></a>
				 </div>
				
			

					<!-- script-for-menu -->
	
				  

				 		
					<!-- script-for-menu -->
						 <script>
						   $( "span.menu" ).click(function() {
							 $( "ul.res" ).slideToggle( 300, function() {
							 // Animation complete.
							  });
							 });
						</script>
		        <!-- /script-for-menu -->
		        
						
				   
		   </div>
	 </div>
