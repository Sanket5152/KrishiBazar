r<?php 
include"thead.php";
	require("configure.php");
	include"connect.php";
	session_start();
	$kk=$_SESSION["user"];

$qry1="select Recid,Name from t_details where username='$kk'";
$dd=mysql_query($qry1);
$ddf=mysql_fetch_assoc($dd);

   
 $id=$_GET["id"];
           $qry="select app_id,pid,date,fid,tid,tname,t_add,ap_id,type_name,crop_name,var_name,price from sell_approve where app_id=$id";
          
           $rs=mysql_query($qry);
           $rrs=mysql_fetch_assoc($rs);
          
          
           	
         

           ?>



               <div class="container">

			<form role="form" action="qtyupdate.php?id=<?php echo $id ?>"  method="post" id="apmcregi" class="form-horizontal">
								<?php
								if (isset($_GET["msg"]))
								{
									echo"<div class='alert alert-danger' role='alert' style='width=20%
    									background: #dddddd;border-radius:15px;font-size:20px;vertical-align:center; text-align: center;''>";
									echo "<b>This Id  Already Registered";
									echo"</div>";
								}
							?>
			<div align="center">
<legend >Add Price</legend>
</div>		<div class="form-group">
	  		<label class="col-md-4 control-label" for="Traders name">Farmer Id</label>  
	  			<div class="col-md-4		">
	 			 <input  type="text" id="fid" name="fid" placeholder="Enter the Place name"  class="form-control" onchange="isalpha(this)" value="<?php echo $rrs["fid"] ?>" Readonly>
	  
	  </div>
</div>

<div class="form-group">
	  		<label class="col-md-4 control-label" for="Traders name">Type Name</label>  
	  			<div class="col-md-4		">
	 			 <input  type="text" id="typename" name="typename" placeholder="Enter the Place name"  class="form-control" onchange="isalpha(this)" value="<?php echo $rrs["type_name"]?>" Readonly>
	  
	  </div>
</div>

<div class="form-group">
	  		<label class="col-md-4 control-label" for="Traders name">Crop Name</label>  
	  			<div class="col-md-4		">
	 			 <input  type="text" id="cropname" name="cropname" placeholder="Enter the Place name"  class="form-control" onchange="isalpha(this)" value="<?php echo $rrs["crop_name"]?>" Readonly>
	  
	  </div>
</div>

<div class="form-group">
	  		<label class="col-md-4 control-label" for="Traders name">variety Name</label>  
	  			<div class="col-md-4		">
	 			 <input  type="text" id="varietyname" name="varietyname" placeholder="Enter the Place name"  class="form-control" onchange="isalpha(this)" value="<?php echo $rrs["var_name"]?>" Readonly>
	  
	  </div>
</div>

<div class="form-group">
	  		<label class="col-md-4 control-label" for="Traders name">Trader Name</label>  
	  			<div class="col-md-4		">
	 			 <input  type="text" id="tname" name="tname" placeholder="Enter the Place name"  class="form-control" onchange="isalpha(this)" value="<?php echo $ddf["Name"]?>" Readonly>
	  
	  </div>
</div>
<div class="form-group">
	  		<label class="col-md-4 control-label" for="Traders name">Price (Rs/ Quintal)</label>  
	  			<div class="col-md-4		">
	 			 <input  type="text" id="price" name="price" placeholder="Enter the Qty" class="form-control" value="<?php echo $rrs["price"];?>" Readonly>
	  
	  </div>
</div>

<div class="form-group">
	  		<label class="col-md-4 control-label" for="Traders name">ADD Qty (Quintal)</label>  
	  			<div class="col-md-4">
	 			 <input  type="text" id="qty" name="qty" placeholder="Enter the Qty" class="form-control" >
	  
	  </div>
</div>


	 			 <div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="us1" name="us1" class="btn btn-primary" >ADD</button>
  </div></div></form></div>


	  </form></div>




	
	