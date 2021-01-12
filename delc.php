<?php
include "connect.php";
$ct=$_GET['ct'];
//echo $ct;
$select = "select * from f_product where crop_id=$ct";
$m=mysql_query($select);
$res=mysql_fetch_row($m);
$select1 = "select * from m_price where crop_id=$ct";
$m1=mysql_query($select1);
$res1=mysql_fetch_row($m1);
if($res || $res1)
{
	header("location:addpro.php?msg=1");
}
else
{
	$del="delete from crop where crop_id=$ct";
	mysql_query($del);
	$delc="select * from variety where crop_id=$ct";
	$res=mysql_query($delc);
	while($rec=mysql_fetch_assoc($res))
	{
		$varid=$rec['var_id'];
		$deletec="delete from variety where var_id=$varid";
		mysql_query($deletec);
	}
	header("location:addpro.php?msg1=1");
}

?>