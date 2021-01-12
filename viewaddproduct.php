                        <?php
                        include "fhead.php";
                        include "connect.php";
                        ?>
                        <div class="baner about-bnr">
                        

                        <?php
                        $aa=$_SESSION['mob'];


 $f="select image,date,type_name,crop_name,type_name,var_name,Qty,ap_name from f_product where f_id=1";
            $rf=mysql_query($f);
     
    

            
              $count1=0;
                  echo"<div class='container'>";
                  echo"<table  align=center  class='table table-hover'><form>";
                  echo"<tr class='danger'><th>No</th><th>Image</th><th>Date</th><th>Type name</th><th>crop name</th><th>Var name</th><th>Qty</th><th> ap_name</th></tr>";
                   while ($row=mysql_fetch_assoc($rf))

                  {
                 $count1++;
                   

                   echo"<tr class='default'>";
                   
                   echo"<td>".$count1."</td>";
                   
                    
                  
                   
                   echo"<td>".$row["image"]."</td>";
                    echo"<td>".$row["date"]."</td>";
                       echo"<td>".$row["type_name"]."</td>";
                   echo"<td>".$row["crop_name"]."</td>";
                   echo"<td>".$row["var_name"]."</td>";
                   echo"<td>".$row["Qty"]."</td>";
                   $qt=$row["ap_name"];
                   $q="select ap_place from apmc_details where ap_id=$qt";
                   $t=mysql_query($q);
                   while ($rr=mysql_fetch_assoc($t)) 
                   {
                     $aa=$rr["ap_place"];
                   }
                   echo"<td>$aa</td>";
             
                   echo"</tr></form>";
                 }
                 echo "</table>";
                 echo"</div>";
                 ?>


                 <?php
                 include "footer.php";
                 ?>