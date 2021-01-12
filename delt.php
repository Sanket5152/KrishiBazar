<?php
include "connect.php";
$ct=$_GET['ct'];
$del="delete from type where type_Id=$ct";
mysql_query($del);	
$select = "select * from f_product where type_id=$ct";
$res=mysql_fetch_row($m);
$select1 = "select * from m_price where type_id=$ct";
$m1=mysql_query($select1);
$res1=mysql_fetch_row($m1);
if($res || $res1)
{
	header("location:addcat.php?msg=1");
}
else
{
	
	mysql_query($del);
	$delc="select * from crop where type_Id=$ct";
	$res=mysql_query($delc);
	while($rec=mysql_fetch_assoc($res))
	{
		$cropid=$rec['crop_id'];
		$deletec="delete from crop where crop_id=$cropid";
		mysql_query($deletec);
		$deletev="delete from variety where crop_id=$cropid";
		mysql_query($deletev);
	}
	
	header("location:addcat.php?msg1=1");
}

?>