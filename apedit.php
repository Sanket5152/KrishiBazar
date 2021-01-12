<?php include"adhead.php";
	require("configure.php");
?>

	<?php require"connect.php";

   
 
           $qry="select * from apmc_details where ap_id=".$_GET["id"];
          $id=$_GET["id"];
           $rs=mysql_query($qry);
           $rrs=mysql_fetch_assoc($rs);
           ?>



               <div class="container">

			<form role="form" action="apupdate.php?id=<?php echo $id ?>"  method="post" id="apmcregi" class="form-horizontal">
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
<legend >General Information</legend>
</div>		



		<div class="form-group">
  			<label class="col-md-4 control-label" for="Traders Address">  Full Postal Address</label>  
  			<div class="col-md-4">
  			<input type="text" id="apadress" name="apadress" placeholder="EnterFull Postal the Address" class="form-control input-md" type="text" value="<?php echo $rrs["ap_add"]?>">
    </div>
</div>

		
		<div class="form-group">
	  		<label class="col-md-4 control-label" for="Traders village">Year Of Establishment </label>  
	  			<div class="col-md-4">
	 			 <input  type="text" id="apesyear" name="apesyear" placeholder="Year Of Establishment" class="form-control" value="<?php echo $rrs["ap_estayear"]?>">
	 			 </div>
	  
	  </div>
	  <div align="center">
	  <legend >Adminstration</legend>
</div>	  


	  <div class="form-group">
	  		<label class="col-md-4 control-label" for="Traders State">Regulated/Unregulated</label>  
	  			<div class="col-md-4">
    				<select id="apre" name="apre" class="form-control">
      						 
     						 <option value="Regulated"<?php ($rrs["ap_regu"]=="Regulated")?"selected":""?>>Regulated</option>
      						 <option value="Unregulated" <?php ($rrs["ap_regu"]=="Unregulated")?"selected":""?>>Unregulated</option>
      						
    				</select>
  				</div>
	  </div>
	  		<div class="form-group">
	  		<label class="col-md-4 control-label" for=" Market name">Name Of Market</label>  
	  			<div class="col-md-4">
	 			 <input  type="text" id="apmarket" name="apmarket" placeholder="Enter the Market name"  class="form-control" onchange="isalpha(this)" value="<?php echo $rrs["ap_markname"]?>">
	  
	  </div>
</div>
	  <div class="form-group">
	  		<label class="col-md-4 control-label" for="Traders State">Mode Of Election APMC</label>  
	  			<div class="col-md-4">
    				<select id="apelc" name="apelc" class="form-control">
      						 
     						 <option value="Elected"<?php ($rrs["ap_election"]=="Elected")?"selected":""?>>Elected</option>
      						 <option value="Nominated"  <?php ($rrs["ap_election"]=="Nominated")?"selected":""?>>Nominated</option>
      						 <option value="Superseded Elected"<?php ($rrs["ap_election"]=="Superseded Elected")?"selected":""?>>Superseded Elected</option>
      						
    				</select>
  				</div>
	  </div>
	  		<div class="form-group">
	  		<label class="col-md-4 control-label" for=" Market chairman name">Name Of Chairman/Administrator</label>  
	  			<div class="col-md-4">
	 			 <input  type="text" id="apchair" name="apchair" placeholder="Enter the Chairman name"  class="form-control" onchange="isalpha(this)" value="<?php echo $rrs["ap_chairname"]?>">
	 			 </div>
	 			 </div>

	  		<div class="form-group">
	  		<label class="col-md-4 control-label" for=" Market Secretary name">Name Of Secretary</label>  
	  			<div class="col-md-4">
	 			 <input  type="text" id="apsec" name="apsec" placeholder="Enter the Secretary name"  class="form-control" onchange="isalpha(this)" value="<?php echo $rrs["ap_secname"]?>">
	 			 </div>
	 			 </div>
	 			 <div align="center">
	 			 <legend >Market Charges</legend></div>
	  
	  

	  <div class="form-group">
	  		<label class="col-md-4 control-label" for="apmc Commission">Commission(in%)</label>  
	  			<div class="col-md-2">
	 			 <input  type="text" id="apcomm" name="apcomm" placeholder="Commission(in %)" class="form-control" value="<?php echo $rrs["ap_comm"]?>">
	 			 </div>
	 			 </div>


	  <div class="form-group">
	  		<label class="col-md-4 control-label" for="Market Charges">Market Fee(% Total)</label>  
	  			<div class="col-md-2">
	 			 <input  type="text" id="apmf" name="apmf" placeholder="Market Fee(in %)" class="form-control" value="<?php echo $rrs["ap_fee"]?>">
	 			 </div>
	 			 </div>
	 			 <div align="center">
	 			 <legend >Financial Position</legend></div>
	 			 <div class="form-group">
	  		<label class="col-md-4 control-label" for="Market Charges">Annual Income</label>  
	  			<div class="col-md-4">
	 			 <input  type="text" id="apin" name="apin" placeholder="Annual Income" class="form-control" value="<?php echo $rrs["ap_ai"]?>">
	 			 </div>
	 			 </div>
	 			 <div class="form-group">
	  		<label class="col-md-4 control-label" for="Market Charges">Annual Expenditure</label>  
	  			<div class="col-md-4">
	 			 <input  type="text" id="apex" name="apex" placeholder="Annual Expenditure" class="form-control" value="<?php echo $rrs["ap_ex"]?>">
	 			 </div>
	 			 </div>
	 			 <div class="form-group">
	  		<label class="col-md-4 control-label" for="Market Charges">Surplus/Deficit</label>  
	  			<div class="col-md-4">
	 			 <input  type="text" id="apsur" name="apsur" placeholder="Surplus/Deficit" class="form-control" value="<?php echo $rrs["ap_sur"]?>">
	 			 </div>
	 			 </div>
	  

	  		

	 			 <div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-1">
    <button id="us1" name="us1" class="btn btn-primary" >Update</button>
  </div>
  <div class="col-md-1">
    <button id="cancle" name="cancle" class="btn btn-primary" onclick=history.go(-1)>Reset</button>
  </div>
</div>