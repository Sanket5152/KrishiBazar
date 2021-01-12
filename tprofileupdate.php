<?php
include "connect.php";

   if(isset($_POST['us1']))
   
 {
$id=$_GET["id"];
		
			$name=$_POST["tname"];
		$add=$_POST["tadd"];
		$place=$_POST["tplace"];
		
		$stat=$_POST["tstat"];
		$pin=$_POST["tpin"];
		$phone=$_POST["tphone"];
		$email=$_POST["temail"];
	
		
	
		
		echo$qry="update t_details set Name='$name',Address='$add',Place='$place',State='$stat',Pincode='$pin',Phone='$phone',Email='$email' where recid='$id'";
		
		//echo $qry;
		 
		$rs=mysql_query($qry);
		if($rs)
		{
			 header("Location:tprofile.php");
		}
		else
		{
			mysql_error();
		}
		
	}
?>
