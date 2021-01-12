<?php
                        

                        date_default_timezone_set ("Asia/Calcutta");
                        $date=date("d/m/Y", time());
if (isset($_POST  ["s1"])) {
  $cat=$_POST["category"];
  $ap=$_POST["category"];
  $from=$_POST["from"];
  $to=$_POST["to"];
  # code...
 echo$f="select ap_name,cmd_name,Max_Price,Min_Price from ap_price where cmd_name='$cat' and ap_name='$ap' and date BETWEEN '$from' and '$to'";

           // $rf=mysql_query($f);
     
    

            
              $count1=0;
                  echo"<div class='container'>";
                  echo"<table  align=center  class='table table-hover'><form>";
                  echo"<tr class='danger'><th>No</th><th>APMC Name</th><th>Commodity Name</th><th>Max price</th><th>Min Price</th></tr>";
                   while ($row=mysql_fetch_assoc($rf))

                  {
                 $count1++;
                   

                   echo"<tr class='default'>";
                   
                   echo"<td>".$count1."</td>";
                   
                    
                  
                       echo"<td>".$row["ap_name"]."</td>";
                   echo"<td>".$row["cmd_name"]."</td>";
                   echo"<td>".$row["Max_Price"]."</td>";
                   echo"<td>".$row["Min_Price"]."</td>";
                   
             
                   echo"</tr></form>";
                 }
                 echo "</table>";
                 echo"</div>";
               }
                 ?>