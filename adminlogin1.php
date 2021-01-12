 <?php
include"connect.php";
$login=$_POST["adlogin"];
$pwde=$_POST["adpwd"];

 
// echo"number of recored".$numrec;

if($login=="admin" && $pwde=="admin")
 {
 	session_start();
	$_SESSION["pwd"]=$pwde;
	$_SESSION["login"]=$login;
	 header("location: adminmain.php");
//echo"valid";
 }
 else
 {
//	echo"invalid";
	 header("location: adminlogin.php?msg=1");
 }	
	 
?>