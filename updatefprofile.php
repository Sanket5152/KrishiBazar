<?php
include "connect.php";

   if(isset($_POST['us1']))
   
 {
$id=$_GET["id"];
		
			$name=$_POST["fname"];
		$add=$_POST["fadd"];
		$village=$_POST["fvillage"];
		$tal=$_POST["ftaluka"];
		$dist=$_POST["fdistrict"];
		$stat=$_POST["fstat"];
		$pin=$_POST["fpin"];
	
		$email=$_POST["femail"];
	
		
	
		
		$qry="update f_details set Name='$name',Address='$add',Village='$village',District='$dist',State='$stat',Pincode='$pin',Email='$email' where Recid='$id'";
		
		//echo $qry;
		 
		$rs=mysql_query($qry);
		if($rs)
		{
			 header("Location: fprof.php");
		}
		else
			mysql_error();
		}
?>
