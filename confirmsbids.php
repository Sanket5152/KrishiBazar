<?php
include"connect.php";
$pid=$_GET['id'];
$fid=$_GET['fid'];
$tid=$_GET['tid'];
$tname=$_GET['tnm'];
$tadd=$_GET['tadd'];
$typename=$_GET['tyname'];
$cropname=$_GET['cname'];
$vname=$_GET['varname'];
$price=$_GET['price'];
$apid=$_GET['apid'];

$q="select Name from f_details where Recid='$fid'";
                   $t=mysql_query($q);
                   while ($rr=mysql_fetch_assoc($t)) 
                   {
                     $fname=$rr["Name"];
                    }
 date_default_timezone_set ("Asia/Calcutta");
                        $date=date("d/m/Y", time());


  $ttd="update f_product set Status='1' where pid=$pid";
mysql_query($ttd);

$qry="insert into sell_approve(pid,date,fid,fname,tid,tname,t_add,ap_id,type_name,crop_name,var_name,price) values('$pid','$date','$fid','$fname','$tid','$tname','$tadd','$apid','$typename','$cropname','$vname','$price')";
echo $qry;
$var=mysql_query($qry);

if($var)
{
	 $ttd="update f_product set Status='1' where p_id=$pid";
mysql_query($ttd);

	$dd="delete from bids where pid='$pid'";
$tt=mysql_query($dd);
 
}
else
{
	mysql_error();
}
header("Location:viewbids.php");
?>