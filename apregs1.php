h<?php

	include "connect.php";
			$place=$_POST["applace"];
		
		$dist=$_POST["dist"];
		$add=$_POST["apadress"];
		$year=$_POST["apesyear"];
		$apre=$_POST["apre"];
		$mark=$_POST["apmarket"];
		$aplc=$_POST["apelc"];
		$apchair=$_POST["apchair"];
		$apsec=$_POST["apsec"];
		$apcom=$_POST["apcomm"];
		$apf=$_POST["apmf"];
		$apin=$_POST["apin"];
		$apex=$_POST["apex"];
		$apsur=$_POST["apsur"];
		
		$pass=$_POST["appass"];
		
		echo$qry="insert into apmc_details(ap_place,ap_dist,ap_add,ap_estayear,ap_regu,ap_markname,ap_election,ap_chairname,ap_secname,ap_comm,ap_fee,ap_ai,ap_ex,ap_sur,ap_pass) VALUES ('$place','$dist','$add','$year','$apre','$mark','$aplc','$apchair','$apsec','$apcom','$apf','$apin','$apex','$apsur','$pass')";
		
		echo $qry;
		 
		$rs=mysql_query($qry);
		if($rs)
	{
			 header("Location: apmcserch.php");
		}
		else
		{
			 header("location: apregs.php?msg=1");
		}


?>