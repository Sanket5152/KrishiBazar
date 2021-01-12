 
<?php


include"fhead.php";
require("configure.php");



?>

                        <div class="baner about-bnr">
                         

                        <?php
                        $aa=$_SESSION['mob'];
                        $rr="select *from f_details Where Phone=$aa";
                        $rrs=mysql_query($rr);
                        while ($tt=mysql_fetch_assoc($rrs))
                         {
                          $dd=$tt["Recid"];
                        }

                        date_default_timezone_set ("Asia/Calcutta");
                        $date=date("Y-m-d", time());

 $f="select ap_name,cmd_name,Max_Price,Min_Price from ap_price where date='$date' ORDER BY cmd_name ";
            $rf=mysql_query($f);
     
    

          
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
                 ?>

<?php  include"footer.php"?>				