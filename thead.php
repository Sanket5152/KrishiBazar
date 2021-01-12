<?php
require"connect.php";
session_start();
	if ((!(isset($_SESSION["user"]))) || (!(isset($_SESSION["pwd"]))))
	{
		header("Location: tlogin.php?b=1");
	}
$kk=$_SESSION["user"];
//echo $kk;
 $f="select Name from t_details where Username='$kk'";
            $rf=mysql_query($f);
           //		 echo $rf;

            while ($rs=mysql_fetch_assoc($rf))
             {
                $ab=$rs["Name"];
# code...
            }
            //echo $ab;

?>
		
<!DOCTYPE HTML>
<html>
<head>
<title>Krishi Bazar</title>
 <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
     <link href="css/full-slider.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.0.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
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
<script src="scripts/jquery-1.9.1.js"></script>
	<!-- Load jQuery UI Main JS  -->
	<script src="scripts/jquery-ui.js"></script>
	

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
    font-size: 14px;
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
    min-width: 23px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 10px 10px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: green}

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
				  
				   	   <h1><a href="index.php">Krishibazar</a></h1>
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
				<li> Krishi Bazar LOGO </li>
				    <li><a href="indext.php" class="active hvr-sweep-to-bottom">Home</a></li> 
					
					<li><a class="hvr-sweep-to-bottom" href="viewauctiont.php">Add Bids</a></li> 
					<li><a class="hvr-sweep-to-bottom" href="cn.php">Confirm Bids</a></li> 
						<li><a class="hvr-sweep-to-bottom" href="viewbill.php">View Bill</a></li> 

					</ul>
				  
					</div>	
				<div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu" style="margin-left: 300px">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              
              <span class="hidden-xs"><?php echo $ab; ?></span>
            </a>
            <ul class="dropdown-menu" style="background-color:#539DC2 ">
              <!-- User image -->
              <li class="user-header">
                

                <p>
              <?php echo $ab; ?>
                 
                </p>
              </li>
              <!-- Menu Body -->
             
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="tprofile.php" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="tlogout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        
        </ul>
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
