<?php
include_once"connect.php";



	$qry="select ap_place from apmc_details where ap_dist = '".$_GET["u"]."'";
	//echo "<br>".$qry;
	if ($rs=mysql_query($qry))
	{
	}
	else
		echo "<br>".mysql_error();
	$var="opt=new Option('---Select---','');objCmb.add(opt);";
	while($rec=mysql_fetch_assoc($rs))
	{
		$name=$rec["ap_place"];
		$var=$var."objCmb.add(new Option('$name','$name'));";
	}
	echo $var;

?>