 <?php
include"connect.php";
$login=$_POST["tlogin"];
$pwde=$_POST["tpwd"];



  $qry="SELECT*FROM t_details
       where Username='$login' and Password='$pwde'";
 //echo"<br>:".$qry;
 $rs=mysql_query($qry);
 $numrec=mysql_num_rows($rs);
// echo"number of recored".$numrec;

if($numrec==1)
 {
 	$qry="SELECT*FROM t_details
       where Username='$login' and Password='$pwde' and Status='Approved'";
 //echo"<br>:".$qry;
 $rs=mysql_query($qry);
 $numrec=mysql_num_rows($rs);

if($numrec==1)
 {
//
	 header("location: indext.php");
	session_start();
	$_SESSION["pwd"]=$pwde;
	$_SESSION["user"]=$login;

	//echo"valid";
 }
 else
 {
 	header("location: tlogin.php?msg2=1");
 }
}
 else
 {
//	echo"invalid";
 	//echo mysql_error();
 
	 header("location: tlogin.php?msg1=1");


 }	
	 
?> 