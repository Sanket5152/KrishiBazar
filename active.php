<?php require"connect.php"; 


$qry="update t_details set Status='Approved' where recid='".$_GET["id"]."'";
$rs=mysql_query($qry);
if($rs)
		{
			 header("Location: tdetail.php");
		}
		else
		{
			
		}

?> 				


