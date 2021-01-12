					<?php
	include_once "connect.php";
	$qry="select pid,pname from place where Dname='".$_GET["u"]."'";
	//echo "<br>".$qry;
	if ($rs=mysql_query($qry))
	{
	}
	else
		echo "<br>".mysql_error();
	$var="objCmb.add(new Option('---Select---',''));";
	while($rec=mysql_fetch_assoc($rs))
	{
		$name=$rec["empname"];
		$val=$rec["recid"];
		$var=$var."objCmb.add(new Option('$name','$val'));";
	}
	echo $var;
?>
