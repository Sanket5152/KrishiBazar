 <?php
                        session_start();
                        include "connect.php";
                        $app_id=$_GET['id'];
                        $f="select app_id,pid,date,fid,tid,tname,t_add,ap_id,type_name,crop_name,var_name,price,qty,Total from sell_approve where app_id=$app_id";
                        

                        $count=0;
                        {
                        $rs1=mysql_query($rf);
                        $rec1=mysql_fetch_assoc($rs1);
                        $count++;
                        $rec1["app_id"];
                        $rec1["crop_id"];
                        $rec1["var_id"];
                        $fname= $rec1["f_name"];
                        $mname=$rec1["m_name"];
                        $rec1["f_id"];
                        $rec1["m_id"];
                        $rec1["p_id"];
                        $qry3="select * from deal_price where p_id= $rec1[p_id] and m_id=".$_SESSION['mid'].  "";
                           // echo $qry3;
                           //echo $qry;
                        $rs3=mysql_query($qry3);
                        $rec3=mysql_fetch_assoc($rs3);
                        $a=$rec3["aprice"];
                        $b=$rec3["bprice"];
                        $c=$rec3["cprice"];
                        $d= $rec3["dprice"];
                        $qry="select * from f_product where p_id= $rec1[p_id]";
                        $rs=mysql_query($qry);
                        $rec=mysql_fetch_assoc($rs);

                        $rec["type_name"];
                        $rec["crop_name"];
                        $rec["var_name"];
                        $aa=$rec["a_qty"];
                        $bb=$rec["b_qty"];
                        $cc=$rec["c_qty"];
                        $dd=$rec["d_qty"]; 
                        $atot=$a*$aa;
                        $btot=$b*$bb;
                        $ctot=$c*$cc;
                        $dtot=$d*$dd;
                        $tot=$atot+$btot+$ctot+$dtot;
                        ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sample Invoice</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <style>
    @import url(http://fonts.googleapis.com/css?family=Bree+Serif);
    body, h1, h2, h3, h4, h5, h6{
      font-family: 'Bree Serif', serif;
    }
    hr { 
      display: block;
      margin-top: 0.5em;
      margin-bottom: 0.5em;
      margin-left: auto;
      margin-right: auto;
      border-style: inset;
      border-width: 3px;
      color:black;
    }
  </style>
</head>

<body>
  <div class="col-xs-3" ></div>
  <div class="container col-xs-6" >
    <div class="row">
      <div class="col-xs-6">
      
      </div>
      <div class="col-xs-12 text-right" >
        <h1 align="center">KRISHI BAZAR</h1>
        
      </div>
      <div class="row">
        <div class="col-xs-12"> 
          <div class="span7">
           <hr>
         </div>
       </div>
     </div>
   </div>
   <div class="row">
     <div class="col-xs-12">
      <!--<div class="panel panel-default">
      <div class="panel-heading">-->
      
       <!-- </div>
       <div class="panel-body">-->
        <div class="col-xs-6 text-left">
          <table class="table table">
            <tr align="left">
              <td>
              Sanket Trading Co.<br>
              1 st Flor anklav appp

              </td>
              
            
            </tr>
          </table>
        </div>
        <div class="col-xs-6 text-right">
          <table class="table table">
            <tr align="left">
              <td>
            Bill No:
              </td>
              <td>
                rikin
              </td>
            </tr>
            <tr align="left">
              <td>
              Date:
             </td>
             <td>
              rikin
            </td>
          </tr > 
          
        </table>
      </div>
    <!--  </div>
  </div>-->
</div>
<div class="col-xs-2"></div>
</div>
<!-- / end client details section -->
<div class="row">
  <div class="col-xs-13"> 
    <div class="span7">
     <hr>
   </div>
 </div>
</div>
 <div class="row">
     <div class="col-xs-12">
      <!--<div class="panel panel-default">
      <div class="panel-heading">-->
      
       <!-- </div>
       <div class="panel-body">-->
        <div class="col-xs-12 text-left">
          <table class="table table">
            <tr align="left">
              <td>
             Name:Jayeah parmar

              </td>
              <td>
            Village Name:

              </td>

              
            
            </tr>
          </table>
        </div>
        
    <!--  </div>
  </div>-->
</div>
<table class="table table-bordered">
    <tr>
      <th>
        <h4>No.</h4>
      </th>
      <th>
        <h4>Type Name</h4>
      </th>
      <th>
        <h4>Crop Name</h4>
      </th>
      <th>
        <h4>Variety Name</h4>
      </th>
       <th>
        <h4>Qty</h4>
      </th>
       <th>
        <h4>Price</h4>
      </th>
        <th>
        <h4>Total</h4>
      </th>
    </tr>
    <tr>
      <td>1</td>
      <td>Cereals</td>
      <td>Wheat</td>
      <td>Gw-496</td>
      <td>20</td>
        <td>2000</td>
          <td>40000</td>
      
    </tr>
    
</table>
<div class="row">
  <div class="col-xs-14"> 
    <div class="span7">
     <hr>
   </div>
 </div>
</div>
<div class="row text-right">
  <div class="col-xs-2 col-xs-offset-8">
    <p>
     

      <b>Total:</b> <br>
       <b>Tax:</b> <br>
       <b>Total:</b> <br>
     
    </p>
  </div>
  <div class="col-xs-2">
     <b>200</b> <br>
       <b>300</b> <br>
       <b>400</b> <br>
  </div>
</div>
<div class="row">
  <div class="col-xs-14"> 
    <div class="span7">
     <hr>
   </div>
 </div>
</div>
<div class="col-xs-12">
 <table class="table table-bordered">
    <tr>
     <td align="center"> Thank For</td>
      
    </tr>
    
</table>
</div>
<div class="col-xs-2">
</div>
<div class="row">
  <div class="col-xs-14"> 
    <div class="span7">
     <hr>
   </div>
 </div>
</div>
</div>
</body>
</html>