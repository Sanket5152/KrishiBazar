 <?php
include"connect.php";
$login=$_POST["flogin"];
$pwde=$_POST["fpwd"];

  $qry="SELECT*FROM f_details
       where Phone='$login' and Password='$pwde'";
 //echo"<br>:".$qry;
 $rs=mysql_query($qry);
 $numrec=mysql_num_rows($rs);
// echo"number of recored".$numrec;

if($numrec==1)
 {
 	session_start();
	$_SESSION["pwd"]=$pwde;
	$_SESSION["mob"]=$login;
	 	header("location: indexf.php");
	


	//echo"valid";
 }
 else
 {
//	echo"invalid";
	 header("location: flogin.php?msg=1");
 }	
	 
?>