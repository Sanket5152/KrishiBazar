                        <?php
                        include "fhead.php";  
                        include "connect.php";
                        ?>
                        <div class="baner about-bnr">
                        

                        <?php
                        $aa=$_SESSION['mob'];
                        $rr="select Recid from f_details Where Phone=$aa";
                        $rrs=mysql_query($rr);



                        while ($tt=mysql_fetch_assoc($rrs))
                         {
                          $dd=$tt["Recid"];
                        }

$f="select f.image,f.f_id,f.p_id,f.date,f.type_name,f.crop_name,f.type_name,f.var_name,f.ap_name,b.add_p_status,b.t_name,b.price,b.t_id from f_product f
inner join bids b on b.pid=f.p_id where f.f_id='$dd' and b.add_p_status='1'";
            
              $rf=mysql_query($f);
     
    

            
              $count1=0;
                  echo"<div class='container'>";
                  echo"<table  align=center  class='table table-hover'><form>";
                  echo"<tr class='danger'><th>No</th><th>Trader name</th><th>Trader Address</th><th> APMC name</th><th>Type name</th><th>crop name</th><th>Var name</th><th>Price</th> <th>Approved</th> </tr>";
                   while ($row=mysql_fetch_assoc($rf))

                  {
                 $count1++;
                   

                   echo"<tr class='default'>";
                   
                   echo"<td>".$count1."</td>";
                    $tid=$row["t_id"];
                      $pid=$row["p_id"]; 
                    $oo=$row["t_name"];

                    $op="Select Address from t_details where name='".$oo."'";
                     $ot=mysql_query($op);
                     while ($opt=mysql_fetch_assoc($ot))
                      {
                     $optt=$opt["Address"];
                     }
                  
                   echo"<td>$oo</td>";
                    echo"<td>$optt</td>";
                    $qt=$row["ap_name"];
                   $q="select ap_place from apmc_details where ap_id=$qt";
                   $t=mysql_query($q);
                   while ($rr=mysql_fetch_assoc($t)) 
                   {
                     $aa=$rr["ap_place"];
                   }
                   $t_name=$row["type_name"];
                   $c_name=$row["crop_name"];
                   $v_name=$row["var_name"];
                   $price=$row["price"];
                   echo"<td>$aa</td>";
                       echo"<td>".$row["type_name"]."</td>";
                   echo"<td>".$row["crop_name"]."</td>";
                   echo"<td>".$row["var_name"]."</td>";
                  
                   echo"<td>".$row["price"]."</td>";
                      
                   echo" <td><div align=center><a href='confirmsbids.php?id=$pid&&fid=$dd&&tid=$tid&&tnm=$oo&&tadd=$optt&&tyname=$t_name&&cname=$c_name&&varname=$v_name&&price=$price&&apid=$qt'><button type='button' class='btn btn-info btn-lg' data-toggle='modal' data-target='#myModal' style=background-color: #006699>Approved</button></a></div></td>";
                
             
                   echo"</tr></form>";
                 }
                 echo "</table>";
                 echo"</div>";
               
                 ?>

  
                 <?php
                 include "footer.php";
                 ?>