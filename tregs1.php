<?php

	include "connect.php";

     if(isset($_POST['tsubmit']))
   
 {
         $apmc=trim($_POST['apmc']);
           
			$name=$_POST["tname"];
		$add=$_POST["tadress"];
		$dist=$_POST["tdist"];
		
		$stat=$_POST["tstate"];
		$pin=$_POST["tpincode"];
		$phone=$_POST["tphone"];
		$email=$_POST["temail"];
		$uname=$_POST["tuname"];
		$pass=$_POST["tpass"];
		$qry="insert into t_details(Name,Address,District,Place,State,Pincode,Phone,Email,Username,Password,Status) VALUES ('$name','$add','$dist','$apmc','$stat','$pin','$phone','$email','$uname','$pass','NotApproved')";
		
		//echo $qry;
		 
		$rs=mysql_query($qry);
		if($rs)
		{
			 header("Location: index.php");
		}
		else
		{
			echo mysql_error();
			 //header("location: freges.php?msg=1");
		}

}

?>