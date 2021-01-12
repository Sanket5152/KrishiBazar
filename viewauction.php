         
<script src='js/jquery-1.8.3.min.js'></script>
    <script src='js/jquery.elevatezoom.js'></script>

                        <?php
                        include "fhead.php";
                        include "connect.php";
                        ?>
                         <?php
                         $aa=$_SESSION['mob'];
                        $rr="select Recid from f_details Where Phone=$aa";
                        $rrs=mysql_query($rr);
                        while ($tt=mysql_fetch_assoc($rrs))
                         {
                          $dd=$tt["Recid"];
                        }
                        $tbl_name="f_product";    //your table name
  // How many adjacent pages should be shown on each side?
                        $adjacents = 2;
                        mysql_query("set character_set_results='utf8'");
  /* 
     First get total number of rows in data table. 
     If you have a WHERE clause in your query, make sure you mirror it here.
  */
     $num='num';
     $query = "SELECT COUNT(*) as $num FROM $tbl_name where f_id=$dd";
     $total_pages = mysql_fetch_array(mysql_query($query));
     $total_pages = $total_pages[$num];

     /* Setup vars for query. */
                  $targetpage = "viewauction.php";   //your file name  (the name of this file)
                  $limit =2;   //how many items to show per page
                  if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
                  if($page) 
                    $start = ($page - 1) * $limit;      //first item to display on this page
                  else
                    $start = 0;               //if no page var is given, set start to 0
                  
                  /* Get data. */
                  $sql = "SELECT * FROM $tbl_name  where f_id=$dd LIMIT $start, $limit";
                  $result = mysql_query($sql);
                  
                  /* Setup page vars for display. */
                  if ($page == 0) $page = 1;          //if no page var is given, default to 1.
                  $prev = $page - 1;              //previous page is page - 1
                  $next = $page + 1;              //next page is page + 1
                  $lastpage = ceil($total_pages/$limit);    //lastpage is = total pages / items per page, rounded up.
                  $lpm1 = $lastpage - 1;            //last page minus 1
                  
                  /* 
                    Now we apply our rules and draw the pagination object. 
                    We're actually saving the code to a variable in case we want to draw it more than once.
                  */
                    $pagination = "";
                    if($lastpage > 1)
                    { 
                      $pagination .= "<div class=\"pagination\">";
                    //previous button
                      if ($page > 1) 
                        $pagination.= "<a href=\"$targetpage?page=$prev\"><< previous</a>";
                      else
                        $pagination.= "<span class=\"disabled\"><< previous</span>";  

                    //pages 
                    if ($lastpage < 7 + ($adjacents * 2)) //not enough pages to bother breaking it up
                    { 
                      for ($counter = 1; $counter <= $lastpage; $counter++)
                      {
                        if ($counter == $page)
                          $pagination.= "<span class=\"current\">$counter</span>";
                        else
                          $pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";         
                      }
                    }
                    elseif($lastpage > 5 + ($adjacents * 2))  //enough pages to hide some
                    {
                      //close to beginning; only hide later pages
                      if($page < 1 + ($adjacents * 2))    
                      {
                        for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
                        {
                          if ($counter == $page)
                            $pagination.= "<span class=\"current\">$counter</span>";
                          else
                            $pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";         
                        }
                        $pagination.= "...";
                        $pagination.= "<a href=\"$targetpage?page=$lpm1\">$lpm1</a>";
                        $pagination.= "<a href=\"$targetpage?page=$lastpage\">$lastpage</a>";   
                      }
                      //in middle; hide some front and some back
                      elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
                      {
                        $pagination.= "<a href=\"$targetpage?page=1\">1</a>";
                        $pagination.= "<a href=\"$targetpage?page=2\">2</a>";
                        $pagination.= "...";
                        for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
                        {
                          if ($counter == $page)
                            $pagination.= "<span class=\"current\">$counter</span>";
                          else
                            $pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";         
                        }
                        $pagination.= "...";
                        $pagination.= "<a href=\"$targetpage?page=$lpm1\">$lpm1</a>";
                        $pagination.= "<a href=\"$targetpage?page=$lastpage\">$lastpage</a>";   
                      }
                      //close to end; only hide early pages
                      else
                      {
                        $pagination.= "<a href=\"$targetpage?page=1\">1</a>";
                        $pagination.= "<a href=\"$targetpage?page=2\">2</a>";
                        $pagination.= "...";
                        for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
                        {
                          if ($counter == $page)
                            $pagination.= "<span class=\"current\">$counter</span>";
                          else
                            $pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";         
                        }
                      }
                    }
                    
                    //next button
                    if ($page < $counter - 1) 
                      $pagination.= "<a href=\"$targetpage?page=$next\">next >></a>";
                    else
                      $pagination.= "<span class=\"disabled\">next >></span>";
                    $pagination.= "</div>\n";   
                  }
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


 $f="select image,date,type_name,crop_name,type_name,var_name,ap_name from f_product where f_id=$dd order By date DESC";
            $rf=mysql_query($f);
     
    

            
              $count1=0;
                  echo"<div class='container'>";
                  echo"<table  align=center  class='table table-hover'><form>";
                  echo"<tr class='danger'><th>No</th><th>Image</th><th>Date</th><th>Type name</th><th>crop name</th><th>Variety name</th><th> apmc name</th></tr>";
                   while ($row=mysql_fetch_assoc($rf))

                  {
                 $count1++;
                   

                   echo"<tr class='default'>";
                   
                   echo"<td>".$count1."</td>";
                   
                    
                  
                 echo"<td><img id='zoom' src='".$row["image"]."' width='100'  onmouseover='show(this);' onmouseout='hide(this);' height='100'/> </td>";                   echo"<td>".$row["date"]."</td>";
                       echo"<td>".$row["type_name"]."</td>";
                   echo"<td>".$row["crop_name"]."</td>";
                   echo"<td>".$row["var_name"]."</td>";
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
                   
 <div id="enlarge_images" style="position:absolute" z-index:2;top: 80px;right: 10;"></div>

                 <?php
                 include "footer.php";
                 ?><script type="text/javascript">
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
