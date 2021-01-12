
                     <?php
                        include "thead.php";
                        include "connect.php";
                          ?>
                        <div class="baner about-bnr">
                        

                        <?php
                        $aa=$_SESSION['user'];
                        $c="select recid,Name,Place from t_details where Username='".$aa."'";
                             $rf=mysql_query($c);
                               while ($row=mysql_fetch_assoc($rf))
                               {
                                $idt=$row["recid"];
                                $name=$row["Name"];
                                $ddd=$row["Place"];
                                
 
                         }
$f="select app_id,pid,date,fid,tid,tname,t_add,ap_id,type_name,crop_name,var_name,price from sell_approve where tid=$idt and Status=0";
        $rf=mysql_query($f);

// $f="select b_id,f_id,f_name,date,type_name,crop_name,type_name,var_name,Qty from bids where ap_id=$ddd and add_p_status=0"; 
  //          $rf=mysql_query($f);
     
    

            
              $count1=0;
                  echo"<div class='container'>";
                  echo"<table  align=center  class='table table-hover'><form>";
                  echo"<tr class='danger'><th>No</th><th>Date</th><th>Bill Id</th><th>Farmer Name</th><th>Farmar Village</th><th>Farmar Taluka   </th><th>Type name</th><th>crop name</th><th>Var name</th><th>Price</th><th align=center>ADD Qty</th></tr>";
                   while ($row=mysql_fetch_assoc($rf))

                  {
                 $count1++;
                   

                   echo"<tr class='default'>";
                   
                   echo"<td>".$count1."</td>";
                   
                    
                  
                $id=$row["app_id"];
                    $qt=$row["fid"];
                   $q="select Name,Village,Taluka from f_details where Recid=$qt";
                   $t=mysql_query($q);
                   while ($rr=mysql_fetch_assoc($t)) 
                   {
                     
                     $ab=$rr["Village"];
                     $ac=$rr["Taluka"];
                     $ad=$rr["Name"];
                   }
                  
                
                   echo"<td>".$row["date"]."</td>";
                     echo"<td align=newt_centered_window(width, height)>$id</td>";
                   echo"<td>$ad</td>";
                 
                   echo"<td>$ab</td>";
                   echo"<td>$ac</td>";

             
                       echo"<td>".$row["type_name"]."</td>";
                   echo"<td>".$row["crop_name"]."</td>";
                   echo"<td>".$row["var_name"]."</td>";
                         echo"<td>".$row["price"]."</td>";
                 
                   

                   
                   echo" <td align=center><div align=center><a href='addqty.php?id=$id'><button type='button' class='btn btn-info btn-lg' data-toggle='modal' data-target='#myModal' style=background-color: #006699>ADD Qty</button></a></div></td>";
                    
  
                  
             
                   echo"</tr></form>";
                 }
                 echo "</table>";
                 echo"</div>";
                 ?>

                
              </br>


                 <?php
                 include "footer.php";
                 ?>