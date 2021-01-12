
                     <?php
                        include "fhead.php";
                        include "connect.php";
                     ?>
                        <div class="baner about-bnr">
                        

                        <?php
                        $aa=$_SESSION['mob'];
                        $c="select recid  from f_details where Phone='".$aa."'";
                             $rf=mysql_query($c);
                               while ($row=mysql_fetch_assoc($rf))
                               {
                                $idt=$row["recid"];
                              
                                
 
                         }
$f="select app_id,pid,date,tid,tname,t_add,ap_id,type_name,crop_name,var_name,price,qty,Total from sell_approve where fid=$idt and Status=1";
        $rf=mysql_query($f);

// $f="select b_id,f_id,f_name,date,type_name,crop_name,type_name,var_name,Qty from bids where ap_id=$ddd and add_p_status=0"; 
  //          $rf=mysql_query($f);
     
    

            
              $count1=0;
                  echo"<div class='container'>";
                  echo"<table  align=center  class='table table-hover'><form>";
                  echo"<tr class='danger'><th>No</th><th>Date</th><th>Bill Id</th><th>Trader Name</th><th>Trader Address</th><th>Type Name</th><th>crop Name</th><th>Variety Name</th><th>Price</th><th align=center>Qty</th><th align=center>Total</ressth><th>View</th><th> PDF </th></tr>";
                   while ($row=mysql_fetch_assoc($rf))

                  {
                 $count1++;
                   

                   echo"<tr class='default'>";
                   
                   echo"<td>".$count1."</td>";
                   
                    
                  
                $id=$row["app_id"];
                  
                   
                  
                
                   echo"<td>".$row["date"]."</td>";
                     echo"<td align=center>$id</td>";
                    echo"<td>".$row["tname"]."</td>";
                   echo"<td>".$row["t_add"]."</td>";
             
                       echo"<td>".$row["type_name"]."</td>";
                   echo"<td>".$row["crop_name"]."</td>";
                   echo"<td>".$row["var_name"]."</td>";
                         echo"<td>".$row["price"]."</td>";
                           echo"<td>".$row["qty"]."</td>";
                             echo"<td>".$row["Total"]."</td>";
                 
                   

                   
                   echo" <td align=center><div align=center><a href='bill.php?id=$id'><button type='button' class='glyphicon glyphicon-eye-open' ></button></a></div></td>";
                    
                   echo" <td align=center><div align=center><a href='at.php?id=$id'><button type='button' class='glyphicon glyphicon-save' ></button></a></div></td>";
                   
  
                  
             
                   echo"</tr></form>";
                 }
                 echo "</table>";
                 echo"</div>";
                 ?>

                
              </br>


                 <?php
                 include "footer.php";
                 ?>