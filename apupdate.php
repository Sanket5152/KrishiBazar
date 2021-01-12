<?php

	include "connect.php";
	$id=$_GET["id"];
		
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
		
	
		
		$qry="update apmc_details set ap_add='$add',ap_estayear=$year,ap_regu='$apre',ap_markname='$mark',ap_election='$aplc',ap_chairname='$apchair',ap_secname='$apsec',ap_comm='$apcom',ap_fee='$apf',ap_ai='$apin',ap_ex='$apex',ap_sur='$apsur' where ap_id='$id'";
		
		//echo $qry;
		 
		$rs=mysql_query($qry);
		if($rs)
		{
			 header("Location: apmcserch.php");
		}
		


?>