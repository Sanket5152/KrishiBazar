        <?php
        include "thead.php";
        ?>
        <?php
        include "connect.php";

        //if($_SESSION["sps"]==null)
        //{

         //$_SESSION["sps"]=$_SERVER['REQUEST_URI'];
        //}
       // echo $_SESSION["sps"];
        ?>
        <div class="baner about-bnr">
            <div class="container">
                <div class="baner-grids">
                    <div class="col-md-6 baner-top">
                        <img src="images/fregi1.jpg" alt=""/>
                    </div>
                    <div class="col-md-6 baner-top">
                        <img src="images/fregi2.jpg" alt=""/>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <br/>
        <div class="col-md-12">
            <div align="center">
                <a href="welf.php"><img src="images/home_icon.gif" alt="" style="width: 100px; height:100px" /></a>
            </div>
        </div>  
        <br/><br/>
        <!--//baner-->
        <div class="about"> 
            <div class="container">
               <h3 class="title">તમારે વેચવું હોય તે ઉત્પાદન પસંદ કરો.</h3>
               <div align="center">
                <br/>
                <a href="mprice.php" class="more btn btn-1 btn-1b"><center>પાછા જાઓ</center></a>
            </div>
              <!--  <div class="about-text">
                    <div class="col-md-6 about-text-left">
                        <br/><br/><br/><br/><br/><br/>
                        
                        <img src="images/addp.jpg" class="img-responsive" alt=""/>
                    </div>-->
                    <div class="col-md-12 about-text-right">
                        <br/>
                        <div class="panel panel-danger">
                            <div class="panel-heading">ઉત્પાદન ઉમેરો........</div>
                            <div class="panel-body">
                                <?php
                                if (isset($_GET["msg1"]))
                                {

                                    echo"<div class='alert alert-success' role='alert'>";
                                    echo "<strong>અભિનંદન!!!!!</strong> &nbsp; તમારી અરજી મોકલાઈ ગયી છે.";
                                    echo"</div>";
                                }
                                elseif (isset($_GET["msg2"]))
                                {

                                    echo"<div class='alert alert-success' role='alert'>";
                                    echo "<strong>અભિનંદન!!!!!</strong> &nbsp; તમારી અરજી રદ થઈ ગયી છે.";
                                    echo"</div>";
                                }
                                elseif (isset($_GET["msg3"]))
                                {

                                    echo"<div class='alert alert-success' role='alert'>";
                                    echo "<strong>માફ કરશો !!!!!</strong> &nbsp;તમારી વિનંતિ વેપારી તરફ થી નકારવામાં આવી છે.";
                                    echo"</div>";
                                }
                                ?>
                                <?php
session_start();
$aa=$_SESSION['mob'];
                        $rr="select Recid from f_details Where Phone=$aa";
                        $rrs=mysql_query($rr);
                        $tt=mysql_num_rows($rr);
                        while ($tt=mysql_fetch_assoc($rrs))
                         {
                          $dd=$tt["Recid"];
                        }                                //  echo $select1;

                                
$qry="select f.image,f.f_id,f.p_id,f.date,f.type_name,f.crop_name,f.type_name,f.var_name,f.Qty,f.ap_name,b.add_p_status,b.t_name,b.price from f_product f
where f.f_id='$dd'";
                                $rs=mysql_query($qry);
                                $numRow = mysql_num_rows($rs);
                                unset($_SESSION["sps"]);
                    
                                    if($rs)
                                    {
                                          $tbl_name="f_product";    //your table name
  // How many adjacent pages should be shown on each side?
                                          $adjacents = 1;
                                          mysql_query("set character_set_results='utf8'");
  /* 
     First get total number of rows in data table. 
     If you have a WHERE clause in your query, make sure you mirror it hsere.
  */
     $num='num';
     $query = "SELECT COUNT(*) as $num FROM $tbl_name where f_id=".$_SESSION["fid"]." and  type_id=$t_id and crop_id=$c_id and Var_id=$v_id";
     $total_pages = mysql_fetch_array(mysql_query($query));
     $total_pages = $total_pages[$num];
     
   // echo $_SESSION["uri"];
     /* Setup vars for query. */
     if(!isset($_SESSION["sps"]))
     {
        $_SESSION["sps"]=$_SERVER['REQUEST_URI'];
    }
    $targetpage = $_SESSION["sps"];
 // echo $targetpage;
  $limit = 2;   //how many items to show per page
  if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
  if($page) 
    $start = ($page - 1) * $limit;      //first item to display on this page
else
    $start = 0;               //if no page var is given, set start to 0

/* Get data. */
$sql = "SELECT * FROM $tbl_name where f_id=".$_SESSION["fid"]." and  type_id=$t_id and crop_id=$c_id and Var_id=$v_id LIMIT $start, $limit";
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
        $pagination.= "<a href=\"$targetpage&page=$prev\"><< previous</a>";
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
          $pagination.= "<a href=\"$targetpage&page=$counter\">$counter</a>";         
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
    $pagination.= "<a href=\"$targetpage&page=$lpm1\">$lpm1</a>";
    $pagination.= "<a href=\"$targetpage&page=$lastpage\">$lastpage</a>";   
}
      //in middle; hide some front and some back
elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
{
    $pagination.= "<a href=\"$targetpage&page=1\">1</a>";
    $pagination.= "<a href=\"$targetpage&page=2\">2</a>";
    $pagination.= "...";
    for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
    {
      if ($counter == $page)
        $pagination.= "<span class=\"current\">$counter</span>";
    else
        $pagination.= "<a href=\"$targetpage&page=$counter\">$counter</a>";         
}
$pagination.= "...";
$pagination.= "<a href=\"$targetpage&page=$lpm1\">$lpm1</a>";
$pagination.= "<a href=\"$targetpage&page=$lastpage\">$lastpage</a>";   
}
      //close to end; only hide early pages
else
{
    $pagination.= "<a href=\"$targetpage&page=1\">1</a>";
    $pagination.= "<a href=\"$targetpage&page=2\">2</a>";
    $pagination.= "...";
    for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
    {
      if ($counter == $page)
        $pagination.= "<span class=\"current\">$counter</span>";
    else
        $pagination.= "<a href=\"$targetpage&page=$counter\">$counter</a>";         
}
}
}

    //next button
if ($page < $counter - 1) 
  $pagination.= "<a href=\"$targetpage&page=$next\">next >></a>";
else
  $pagination.= "<span class=\"disabled\">next >></span>";
$pagination.= "</div>\n";   
}

$count=0;

echo"<table  align=center  class='table table-hover'>";
echo"<tr class='danger'><th>ક્રમ</th><th>A ગ્રેડ ફોટો</th><th>B ગ્રેડ ફોટો</th><th>C ગ્રેડ ફોટો</th><th>D ગ્રેડ ફોટો</th><th>પાક નો પ્રકાર</th><th>પાક નું નામ</th><th>પાક ની જાત</th><th>A ગ્રેડ નો જથ્થો (૨૦ કિલો માં)</th><th>B ગ્રેડ નો જથ્થો (૨૦ કિલો માં)</th><th>C ગ્રેડ નો જથ્થો (૨૦ કિલો માં)</th><th>D ગ્રેડ નો જથ્થો(૨૦ કિલો માં)</th><th>અરજી મોકલો</th></tr>";
while($rec=mysql_fetch_assoc($result))
{
    $p_id1=$rec["p_id"];

    {
       $count++;

       echo"<tr class='default'>";


       echo"<td>".$count."</td>";
       $flnameA=$rec["imageA"];
       if (file_exists($flnameA))
         echo "<td><img height=60 width=60 src=$flnameA></td>";
     else
         echo "<td><img height=100 width=100 src=./images/user/noimage.jpg></td>";
     $flnameB=$rec["imageB"];
     if (file_exists($flnameB))
         echo "<td><img height=60 width=60 src=$flnameB></td>";
     else
         echo "<td><img height=100 width=100 src=./images/user/noimage.jpg></td>";
     $flnameC=$rec["imageC"];
     if (file_exists($flnameC))
         echo "<td><img height=60 width=60 src=$flnameC></td>";
     else
         echo "<td><img height=100 width=100 src=./images/user/noimage.jpg></td>";
     $flnameD=$rec["imageD"];
     if (file_exists($flnameD))
         echo "<td><img height=60 width=60 src=$flnameD></td>";
     else
         echo "<td><img height=100 width=100 src=./images/user/noimage.jpg></td>";
     echo"<td>".$rec["type_name"]."</td>";
     echo"<td>".$rec["crop_name"]."</td>";
     echo"<td>".$rec["var_name"]."</td>";
     echo"<td>".$rec["a_qty"]."</td>";
     echo"<td>".$rec["b_qty"]."</td>";
     echo"<td>".$rec["c_qty"]."</td>";
     echo"<td>".$rec["d_qty"]."</td>";





     $select1="select * from selling_approve where f_id=".$_SESSION["fid"]." and type_id=$t_id and crop_id=$c_id and var_id=$v_id and m_id=$id and p_id=$p_id1";
                             //  echo $select1;
     mysql_query("set character_set_results='utf8'");
     $result1=mysql_query($select1);
     $numRows = mysql_num_rows($result1);

     $select3="select * from notappflag where p_id=$p_id1 and m_id=$id";
                             //  echo $select1;
     mysql_query("set character_set_results='utf8'");
     $result3=mysql_query($select3);
     $numRows1 = mysql_num_rows($result3);
     $p_id=$rec["p_id"];
     $select4="select * from selling_approve where f_id=".$_SESSION["fid"]." and  m_id=$id and p_id=$p_id1 and status='મંજુર કર્યું'";
                                           // echo $select4;
     mysql_query("set character_set_results='utf8'");
     $result4=mysql_query($select4);
     $numRows4 = mysql_num_rows($result4);
                                           // echo $numRows4;
                                 //  echo "<br/> selling:".$p_id;
     if($numRows4 > 0) {
         echo "<td>વિનંતી મંજુર થઇ ગયી છે &nbsp;&nbsp;&nbsp; &nbsp;";
     }
     else if($numRows1>0)
     {
        echo"<td><a href='#' class='btn btn-success disabled'>અરજી મોકલો</a></td>";
    }
    elseif( $numRows > 0)
    {
     echo "<td>વિનંતી મોકલી &nbsp;&nbsp;&nbsp; &nbsp;  ";
     echo"<a href='canclerequest.php?id=$id&t_id=$t_id&c_id=$c_id&v_id=$v_id&mname=$mname&p_id=$p_id1&fid=$fid' class='btn btn-danger'>અરજી રદ કરો</a></td>";
 }

 else
 {
    echo"<td><a href='sendrequest.php?id=$id&t_id=$t_id&c_id=$c_id&v_id=$v_id&mname=$mname&p_id=$p_id1' class='btn btn-success'>અરજી મોકલો</a></td>";
}

}


}
echo"</tr>";
echo"</table>" ; 
}
echo"<div align='center'> $pagination</div>";



?>

</div>
</div>
</div>
<div class="clearfix"> </div>
</div>
</div>
</div>

<?php
include "footer.php";
?>



