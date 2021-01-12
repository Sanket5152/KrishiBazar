<?php 
include"thead.php";
	require("configure.php");
	include"connect.php";
	session_start();
	$kk=$_SESSION["user"];

$qry1="select Recid,Name from t_details where username='$kk'";
$dd=mysql_query($qry1);
$ddf=mysql_fetch_assoc($dd);

   
 $id=$_GET["id"];
           $qry="select f_id,type_name,crop_name,var_name from f_product where p_id=$id";
          
           $rs=mysql_query($qry);
           $rrs=mysql_fetch_assoc($rs);
          
          
           	
         

           ?>

           

               <div class="container">

			<form role="form" action="priceupdate.php?id=<?php echo $id ?>"  method="post" id="apmcregi" class="form-horizontal">
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
	 			 <input  type="text" id="fid" name="fid" placeholder="Enter the Place name"  class="form-control" onchange="isalpha(this)" value="<?php echo $rrs["f_id"] ?>" Readonly>
	  
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
	 			 <input  type="text" id="price" name="price" placeholder="Enter the Price (Rs/ Quintal) " class="form-control" onchange="isnum(this)" >
	  
	  </div>
</div>


	 			 <div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="us1" name="us1" class="btn btn-primary" >ADD</button>
  </div></div></form></div>


	  </form></div>




	
	