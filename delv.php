<?php
include "connect.php";
$ct=$_GET['ct'];
//echo $ct;
$select = "select * from f_product where Var_id=$ct";
$m=mysql_query($select);
$res=mysql_fetch_row($m);
$select1 = "select * from m_price where var_id=$ct";
$m1=mysql_query($select1);
$res1=mysql_fetch_row($m1);
if($res || $res1)
{
	header("location:addvat.php?msg=1");
}
else
{
	$del="delete from variety where var_id=$ct";
	mysql_query($del);
	if(mysql_query($del))
	{
		header("location:addvat.php");
	}
}
?>