 <?php
include"connect.php";
$login=trim($_POST["apmc"]);
$pwde=$_POST["appwd"];
$qr="SELECT ap_place from apmc_details where ap_id=$login";
 $rf=mysql_query($qr);
            while ($rs=mysql_fetch_assoc($rf))
             {
                $ab=$rs["ap_place"];
# code...
            }


  $qry="SELECT*FROM apmc_details
       where ap_place='$ab' and ap_pass='$pwde'";
 echo"<br>:".$qry;
 $rs=mysql_query($qry);
 $numrec=mysql_num_rows($rs);
 echo"number of recored".$numrec;

if($numrec==1)
 {

	session_start();
	$_SESSION["pwd"]=$pwde;
	$_SESSION["applace"]=$login;
	 header("location: indexap.php");
	//echo"valid";
 }
 else
 {
 	//echo mysql_error();
//	echo"invalid"; mysql_error();
 header("location: aplogin.php?msg=1");
 }	
	 
?>