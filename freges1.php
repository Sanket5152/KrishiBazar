<?php
//include "head.php";


 require"connect.php";
 session_start();

 
          if(isset($_POST['fs1']))
   
 {
   
    // Write Mysql Query Here to insert this $QueryInsertFile   .                   
  

			$name=$_POST["fname"];
		$add=$_POST["fadress"];
		$village=$_POST["fvillage"];
		$tal=$_POST["ftaluka"];
		$dist=$_POST["fdistrict"];
		$stat=$_POST["fstate"];
		$pin=$_POST["fpincode"];
		$phone=$_POST["fphone"];
		$email=$_POST["femail"];
		$pass=$_POST["fpass"];

	$qry="insert into f_details(Name,Address,Village,Taluka,District,State,Pincode,Phone,Email,Password) VALUES ('$name','$add','$village','$tal','$dist','$stat','$pin','$phone','$email','$pass')";

		
		//	echo $qry;
		 
		 $rs=mysql_query($qry);
		if($rs)
		{
			 header("Location: index.php");
	}
		else
		{
		 header("location: freges.php?msg=1");
		}
}

?>