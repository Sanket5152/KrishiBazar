<script src='js/jquery-1.8.3.min.js'></script>
    <script src='js/jquery.elevatezoom.js'></script>
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
$f="select f.image,f.f_id,f.p_id,f.date,f.type_name,f.crop_name,f.type_name,f.var_name,f.ap_name from f_product f
 where ap_name='$ddd' and Status=0";
            $rf=mysql_query($f);

// $f="select b_id,f_id,f_name,date,type_name,crop_name,type_name,var_name,Qty from bids where ap_id=$ddd and add_p_status=0"; 
  //          $rf=mysql_query($f);
     
    

            $i=0; 
              $count1=0;
                  echo"<div class='container'>";
                  echo"<table  align=center  class='table table-hover'><form>";
                  echo"<tr class='danger'><th>No</th><th>Product Image</th><th>Auction Add Date</th><th>Farmer Name</th><th>Farmar Village</th><th>Farmar Taluka   </th><th>Type Name</th><th>Crop Name</th><th>Variety Name</th><th>ADD Price</th></tr>";
                   while ($row=mysql_fetch_assoc($rf))

                  {
                  $i++;
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
                  
                   echo"<td><img id='zoom' src='".$row["image"]."' width='100'  onmouseover='show(this);' onmouseout='hide(this);' height='100'/> </td>";
                   //echo "zoom".$i;
                   echo"<td>".$row["date"]."</td>";
                   echo"<td>$ad</td>";
                 
                   echo"<td>$ab</td>";
                   echo"<td>$ac</td>";

             
                       echo"<td>".$row["type_name"]."</td>";
                   echo"<td>".$row["crop_name"]."</td>";
                   echo"<td>".$row["var_name"]."</td>";
                 
                   

                   
                   echo" <td><div align=center><a href='addprice.php?id=$id'><button type='button' class='btn btn-info btn-lg' data-toggle='modal' data-target='#myModal' style=background-color: #006699>ADD Price</button></a></div></td>";
                    
  
                  
             
                   echo"</tr></form>";
                 }

                 echo "</table>";
                 echo"</div>";
                 ?>
                 <div id="enlarge_images" style="position:absolute" z-index:2;top: 80px;right: 10;"></div>
  

                
              </br>

                 <?php
                 include "footer.php";
                 ?>

<script type="text/javascript">
        function show(_this) {
            document.getElementById("enlarge_images").innerHTML = "<img src='" + _this.src + "'+'width=300 height=250'>";
        }
        function hide(_this) {
            document.getElementById("enlarge_images").innerHTML = "";
        }
        function move_layer(event) {
            event = event || window.event;
            enlarge_images.style.left = event.clientX + document.body.scrollLeft + 10;
            enlarge_images.style.top = event.clientY + document.body.scrollTop + 10;
        }
        document.onmousemove = move_layer;
    </script>
                 <script>
function bigImg(x) {
    x.style.height = "250px";
    x.style.width = "250px";
}

function normalImg(x) {
    x.style.height = "100px";
    x.style.width = "100px";
}
</script>