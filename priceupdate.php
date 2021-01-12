<?php
include"thead.php";
include "connect.php";

	$id=$_GET["id"];
	$fid=$_POST["fid"];
	$e="select  Name from f_details where recid=$fid";
	$ee=mysql_query($e);
	while ($eee=mysql_fetch_assoc($ee)) 
	{
		$t=$eee["Name"];
	}
			$place=$_POST["tname"];
			$price=$_POST["price"];
		$q1="select Recid from t_details where Name='$place'";
		$dd=mysql_query($q1);
		while($tt=mysql_fetch_assoc($dd))
				{
					$ttt=$tt["Recid"];
				}
				
                        $aa=$_SESSION['user'];
                        $c="select recid,Name,Place from t_details where Username='".$aa."'";
                             $rf=mysql_query($c);
                               while ($row=mysql_fetch_assoc($rf))
                               {
                                $idt=$row["recid"];
                                $name=$row["Name"];
                                $ddd=$row["Place"];
                                
 
                         }
			


		$qry="insert into bids(pid,f_id,f_name,t_id,t_name,price,ap_id,add_p_status) values ('$id','$fid','$t','$ttt','$place','$price','$ddd',1)";

		
	
		 
	$rs=mysql_query($qry);	
	if($rs)
		{
			 		
	$f="select f.image,f.f_id,f.p_id,f.date,f.type_name,f.crop_name,f.type_name,f.var_name,f.ap_name,b.add_p_status from f_product f
inner join bids b on b.pid=f.p_id where f.ap_name='$ddd' and b.t_id='$idt' and b.add_p_status='0'";
 $rf=mysql_query($f);	
  echo"<div class='container'>";
                  echo"<table  align=center  class='table table-hover'><form>";
                  echo"<tr class='danger'><th>No</th><th>Product Image</th><th>Auction Add Date</th><th>Farmer Name</th><th>Farmar Village</th><th>Farmar Taluka   </th><th>Type name</th><th>crop name</th><th>Var name</th><th>Qty(kg.)</th><th>ADD price</th></tr>";
               while ($row=mysql_fetch_assoc($rf))

                  {
                 $count1++;
                   

                   echo"<tr class='default'>";
                   
                   echo"<td>".$count1."</td>";
                   
                    
                  
                $id=$row["p_id"];
                    $qt=$row["f_id"];
                   $q="select Name,Village,Taluka from f_details where Recid=$qt";
                   $t=mysql_query($q);
                   while ($rr=mysql_fetch_assoc($t)) 
                   {
                     
                     $ab=$rr["Village"];
                     $ac=$rr["Taluka"];
                     $ad=$rr["Name"];
                   }
                   echo"<td>".$row["p_id"]."</td>";
                   echo"<td>".$row["date"]."</td>";
                   echo"<td>$ad</td>";
                 
                   echo"<td>$ab</td>";
                   echo"<td>$ac</td>";

             
                       echo"<td>".$row["type_name"]."</td>";
                   echo"<td>".$row["crop_name"]."</td>";
                   echo"<td>".$row["var_name"]."</td>";
                   echo"<td>".$row["Qty"]."</td>";
                   

                   
                   echo" <td><div align=center><a href='addprice.php?id=$id'><button type='button' class='btn btn-info btn-lg' data-toggle='modal' data-target='#myModal' style=background-color: #006699>ADD Price</button></a></div></td>";
                    
  
                  
             
                   echo"</tr></form>";
                 }
                 echo "</table>";
                 echo"</div>";
                
                
}

 

?>
<?php
include"footer.php";
?>