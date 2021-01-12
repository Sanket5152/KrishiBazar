<?php

include "connect.php";

	$id=$_GET["id"];
	
			$price=$_POST["price"];
      $qty=$_POST["qty"];
      $tot=($price*$qty);
      $tt="update  sell_approve  set qty=$qty,Total=$tot,Status='1' where app_id=$id";
      //echo $tt;
      $tts=mysql_query($tt);
      
      
      	header("Location:cn.php");
      

      

 
 
?>