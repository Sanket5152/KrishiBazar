<?php
	include "connect.php";
	include "adhead.php";
?>
 <?php
                        $tbl_name="type";    //your table name
  // How many adjacent pages should be shown on each side?
                        $adjacents = 1;
                        mysql_query("set character_set_results='utf8'");
  /* 
     First get total number of rows in data table. 
     If you have a WHERE clause in your query, make sure you mirror it here.
  */
     $num='num';
     $query = "SELECT COUNT(*) as $num FROM $tbl_name";
     $total_pages = mysql_fetch_array(mysql_query($query));
     $total_pages = $total_pages[$num];

     /* Setup vars for query. */
                  $targetpage = "addcat.php";   //your file name  (the name of this file)
                  $limit = 5;   //how many items to show per page
                  if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
                  if($page) 
                    $start = ($page - 1) * $limit;      //first item to display on this page
                  else
                    $start = 0;               //if no page var is given, set start to 0
                  
                  /* Get data. */
                  $sql = "SELECT * FROM $tbl_name  LIMIT $start, $limit";
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

  <script type="text/javascript">
      function ct(id)
      {
       if(confirm('Are you Sure? '))
       {
        window.location.href='delt.php?ct='+id;
      }
    }
  </script>

<?php
echo"<div class='container' style='width:40%'>";




                

require("connect.php");
                  if(isset($_POST['s2']))
                  {
                    $ct=trim($_POST['ct']);
                    $qry="insert into type(type_name) values('$ct')";
                 // echo $qry;
                    $rs=mysql_query($qry);
                    if($rs)
                    {
                     echo"<div class='alert alert-success' role='alert'>";
                     echo "Sucessfully Catagory Type is Added.";
                     echo"</div>";
                   }
                 }

                 if (isset($_GET["msg"]))
                 {
                  echo"<div class='alert alert-success' role='alert'>";
                  echo "<strong>Sorry !!!!!</strong> &nbsp;Alredy add this catagory";
                  echo"</div>";
                }
                elseif (isset($_GET["msg1"]))
                {
                  echo"<div class='alert alert-danger' role='alert'>";
                  echo "<strong></strong> &nbsp;Catagory Type is removed";
                  echo"</div>";
                }
                echo"<table  align=center  class='table table-hover' ><form>";
                echo"<tr class='danger'><th>Catagory Type</th><th>Delete</th></tr>";

                while($row = mysql_fetch_array($result))
                {

                  echo"<tr class='default'>";
                 
                  echo"<td>".$row["type_name"]."</td>";
                  echo"<td><a href='javascript:ct($row[type_Id])' class='btn btn-success' style='background-color:#006699'>&#x2718;</a></td>";
                  echo"</tr></form>";  
                }

                echo "</table>";
                echo"<div align=center><a href='#' class='btn btn-success' data-toggle='modal' data-target='#nursary' style='background-color:#006699'>Add Catagory</a></div>";
                echo"</div>";

                ?>

    <?= "<center>".$pagination."</center>"?>
                <!-- model start-->
 
      <div class="modal fade" id="nursary" role="dialog">
                  <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add New Catagory</h4>
                      </div>

                      <div class="modal-body">
                        <form action="addcat.php" method="post" id="ct" onsubmit="return croptype('ct');">

                          <fieldset class="form-group">
                            <label>Catagory Type</label>
                            <input type="name" class="form-control"  placeholder="Add New Catagory" name="ct"  id="ct" onkeyup="isalpha(this)">
                          </fieldset>
                          <button class="btn btn-success btn-lg btn-block" style="background-color:#006699 " name="s2"><span class="glyphicon glyphicon-log-in"></span>&nbsp;ADD</button>
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>

                  </div>
                </div>
  </div>


</br>

<?php
include "footer.php";
?>