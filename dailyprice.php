 
<?php


include"head.php";
include"connect.php";
require("configure.php");



?>
<script type="text/css">
  /*!
 * Datepicker for Bootstrap
 *
 * Copyright 2012 Stefan Petre
 * Licensed under the Apache License v2.0
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 */
.datepicker {
  top: 0;
  left: 0;
  padding: 4px;
  margin-top: 1px;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  /*.dow {
    border-top: 1px solid #ddd !important;
  }*/

}
.datepicker:before {
  content: '';
  display: inline-block;
  border-left: 7px solid transparent;
  border-right: 7px solid transparent;
  border-bottom: 7px solid #ccc;
  border-bottom-color: rgba(0, 0, 0, 0.2);
  position: absolute;
  top: -7px;
  left: 6px;
}
.datepicker:after {
  content: '';
  display: inline-block;
  border-left: 6px solid transparent;
  border-right: 6px solid transparent;
  border-bottom: 6px solid #ffffff;
  position: absolute;
  top: -6px;
  left: 7px;
}
.datepicker > div {
  display: none;
}
.datepicker table {
  width: 100%;
  margin: 0;
}
.datepicker td,
.datepicker th {
  text-align: center;
  width: 20px;
  height: 20px;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
}
.datepicker td.day:hover {
  background: #eeeeee;
  cursor: pointer;
}
.datepicker td.day.disabled {
  color: #eeeeee;
}
.datepicker td.old,
.datepicker td.new {
  color: #999999;
}
.datepicker td.active,
.datepicker td.active:hover {
  color: #ffffff;
  background-color: #006dcc;
  background-image: -moz-linear-gradient(top, #0088cc, #0044cc);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#0088cc), to(#0044cc));
  background-image: -webkit-linear-gradient(top, #0088cc, #0044cc);
  background-image: -o-linear-gradient(top, #0088cc, #0044cc);
  background-image: linear-gradient(to bottom, #0088cc, #0044cc);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff0088cc', endColorstr='#ff0044cc', GradientType=0);
  border-color: #0044cc #0044cc #002a80;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
  *background-color: #0044cc;
  /* Darken IE7 buttons by default so they stand out more given they won't have borders */

  filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
  color: #fff;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
}
.datepicker td.active:hover,
.datepicker td.active:hover:hover,
.datepicker td.active:focus,
.datepicker td.active:hover:focus,
.datepicker td.active:active,
.datepicker td.active:hover:active,
.datepicker td.active.active,
.datepicker td.active:hover.active,
.datepicker td.active.disabled,
.datepicker td.active:hover.disabled,
.datepicker td.active[disabled],
.datepicker td.active:hover[disabled] {
  color: #ffffff;
  background-color: #0044cc;
  *background-color: #003bb3;
}
.datepicker td.active:active,
.datepicker td.active:hover:active,
.datepicker td.active.active,
.datepicker td.active:hover.active {
  background-color: #003399 \9;
}
.datepicker td span {
  display: block;
  width: 47px;
  height: 54px;
  line-height: 54px;
  float: left;
  margin: 2px;
  cursor: pointer;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
}
.datepicker td span:hover {
  background: #eeeeee;
}
.datepicker td span.active {
  color: #ffffff;
  background-color: #006dcc;
  background-image: -moz-linear-gradient(top, #0088cc, #0044cc);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#0088cc), to(#0044cc));
  background-image: -webkit-linear-gradient(top, #0088cc, #0044cc);
  background-image: -o-linear-gradient(top, #0088cc, #0044cc);
  background-image: linear-gradient(to bottom, #0088cc, #0044cc);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff0088cc', endColorstr='#ff0044cc', GradientType=0);
  border-color: #0044cc #0044cc #002a80;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
  *background-color: #0044cc;
  /* Darken IE7 buttons by default so they stand out more given they won't have borders */

  filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
  color: #fff;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
}
.datepicker td span.active:hover,
.datepicker td span.active:focus,
.datepicker td span.active:active,
.datepicker td span.active.active,
.datepicker td span.active.disabled,
.datepicker td span.active[disabled] {
  color: #ffffff;
  background-color: #0044cc;
  *background-color: #003bb3;
}
.datepicker td span.active:active,
.datepicker td span.active.active {
  background-color: #003399 \9;
}
.datepicker td span.old {
  color: #999999;
}
.datepicker th.switch {
  width: 145px;
}
.datepicker th.next,
.datepicker th.prev {
  font-size: 21px;
}
.datepicker thead tr:first-child th {
  cursor: pointer;
}
.datepicker thead tr:first-child th:hover {
  background: #eeeeee;
}
.input-append.date .add-on i,
.input-prepend.date .add-on i {
  display: block;
  cursor: pointer;
  width: 16px;
  height: 16px;
}
</script>
<script>

        
  $(document).ready(function() {
    $( ".datepicker" ).datepicker();
    dateFormat: 'dd/mm/yy'
  });
  </script>
  <script>

        
  $(document).ready(function() {
    $( ".datepicker1" ).datepicker();
    dateFormat: 'dd/mm/yy'
  });
  </script>
<script type="text/javascript">
var objAjax;
  function getEmployee()
  {
    objAjax= new XMLHttpRequest();
    uname=document.getElementById("dist").value;
    url="getplace.php?u="+uname;
    objAjax.open("GET",url,true);
    objAjax.send();
    objAjax.onreadystatechange=fillEmp;
  }
  
    
    function fillEmp()
  {
  
    if (objAjax.readyState==4)
    {
      
      
      objCmb=document.getElementById("place");
      len=objCmb.length;
      for (i=0;i<=len;i++)
      {
        objCmb.remove(0);
      }     

      str=objAjax.responseText;
      eval(str);
  
    }

    }
  
  
  </script>

                  
                        
<div class="col-md-12" style="padding-bottom: 50px;">
                  
                  
                  <div class="col-md-10 job-advanced-search" style="float: center">
                  <form class="form-inline" id="location" action="dailyprice.php" method="post">
                          <div class="job-advanced-search-form">
                            <div class="form-group">
                              <label class="sr-only">Category</label>
                              <div class="advance-search-form-control">
                            
                                <select name="category" class="form-control" id="category" >
                                  <option value="">Category</option>
                                  <?php
                                  $rs="select distinct(cmd_name) from ap_price order by cmd_name";
                                  $rrs=mysql_query($rs);
                                  while($val=mysql_fetch_row($rrs))
                                  {
                                      $var=$val[0];
                                      echo"<option value=$var>$var</option>";
                                    } ?>
                                                             </select>
                              </div>
                            </div>
                           
                            
                            <div class="form-group">
                              <label class="sr-only">Select Distrct</label>
                <div class="advance-search-form-control">
                <select name="dist" class="form-control states" id="dist" onchange="getEmployee()">
                <option value="">Select District</option>
                  <?php
                                  $rs="select distinct(Dname) from district order by Dname";
                                  $rrs=mysql_query($rs);
                                  while($val=mysql_fetch_row($rrs))
                                  {
                                      $var=$val[0];
                                  
                                      echo"<option value=$var>$var</option>";
                                    } ?>
                </select>
                </div>
                </div>
                            <div class="form-group">
                              <label class="sr-only">Select City</label>
                    <div class="advance-search-form-control">
            <select name="place" class="form-control cities" id="place">
                                  <option value="">Select City</option>
                                </select>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="sr-only">From</label>
                    <div class="advance-search-form-control">
            From<input class="form-control margin-bottom-20 datepicker" type="date" name="from" required>

                              </div>
                            </div>
                              <div class="form-group">
                              <label class="sr-only">to</label>
                    <div class="advance-search-form-control">
            to<input class="form-control margin-bottom-20 datepicker1" type="date" name="to" required>                             </div>
                            </div>
                            <div class="form-group form-action">
                              <input type="submit" class="btn btn-primary btn-search-submit" name=s1 value="Search" />
                            </div>
                          </div>
                        </form>
                  </div></div>

                  <br><br>  
                        <?php
                        

                        date_default_timezone_set ("Asia/Calcutta");
                        $date=date("d/m/Y", time());
if (isset($_POST["s1"])) {
  $cat=$_POST["category"];
  $ap=$_POST["place"];
  $from=$_POST["from"];
  $to=$_POST["to"];
  # code...
 $f="select date,ap_name,cmd_name,Max_Price,Min_Price from ap_price where cmd_name='$cat' and ap_name='$ap' and date BETWEEN '$from' and '$to'";

           $rf=mysql_query($f);
     
    

            
              $count1=0;
                  echo"<div class='container'>";
                  echo"<table  align=center  class='table table-hover'><form>";
                  echo"<tr class='danger'><th>No</th><th>Date</th><th>APMC Name</th><th>Commodity Name</th><th>Max price</th><th>Min Price</th></tr>";
                   while ($row=mysql_fetch_assoc($rf))

                  {
                 $count1++;
                   

                   echo"<tr class='default'>";
                   
                   echo"<td>".$count1."</td>";
                   
                    
                  
                       echo"<td>".$row["date"]."</td>";
                       echo"<td>".$row["ap_name"]."</td>";
                   echo"<td>".$row["cmd_name"]."</td>";
                   echo"<td>".$row["Max_Price"]."</td>";
                   echo"<td>".$row["Min_Price"]."</td>";
                   
             
                   echo"</tr></form>";
                 }
                 echo "</table>";
                 echo"</div>";
               }
               else {

                        

                        date_default_timezone_set ("Asia/Calcutta");
                        $date=date("Y-m-d", time());
  
  # code...
 $f="select ap_name,cmd_name,Max_Price,Min_Price from ap_price where date='$date'";

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
              
                
 
                 # code...
               }
                 ?>

<?php  include"footer.php"?>				