<?php 
	include_once"adhead.php";
	require("configure.php");
    		
	?>
	<script>
  function yera(){

     var Number = document.getElementById('apesyear').value;
     var IndNum = /^(19|20)\d{2}$/;

     if(IndNum.test(Number)){
        return;
    }

    else{
       alert( "Enter valid  Year");
        document.getElementById('apesyear').focus();
    }

}
  function pass(){

       var Number = document.getElementById('appass').value;
       var IndNum =/^(?=.*[A-Za-z])(?=.*\d)(?=.*[$@$!%*#?&])[A-Za-z\d$@$!%*#?&]{8,}$/;

       if(IndNum.test(Number)){
          return;
      }

      else{
         alert("Enter Valid Password  e.g san@1234");
          document.getElementById('appass').focus();
      }

  }
  function check()
                  {
                      if(document.getElementById('appass').value === document.getElementById('aprepass').value)
                      {
                          
                      } 
                      else 
                      {
                          alert("Password and Confirm Password  do not match");
                          document.getElementById('aprepass ').focus();
                      }
                  }

</script>

<div class="well well-sm" style="border: 2px solid #a1a1a1;
    margin-right:1%;
    margin-left: 1%;	
    background: #dddddd;
    width: 98%;
    border-radius: 15px;font-size:20px;vertical-align: center; text-align: center;
   font-family:Times New Roman", Georgia, Serif; align="center""><b>APMC Registration</b>	</div>

		<div class="container">

			<form role="form" action="apregs1.php" method="post" id="apmcregi" onsubmit="return validateform('apmcregi');" class="form-horizontal">
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
</div>		<div class="form-group">
	  		<label class="col-md-4 control-label" for="Traders name">Place</label>  
	  			<div class="col-md-4		">
	 			 <input  type="text" id="applace" name="applace" placeholder="Enter the Place name"  class="form-control" onchange="isalpha(this)" required>
	  
	  </div>
</div>
<div class="form-group" >
                                         <?php
                                        $sql = "SELECT * FROM district ORDER BY Dname";
                                        try {
                                            $stmt = $DB->prepare($sql);
                                            $stmt->execute();
                                            $results = $stmt->fetchAll();
                                        } catch (Exception $ex) {
                                            echo($ex->getMessage());
                                        }
                                        ?>
                                        <div class="form-group">
            <label class="col-md-4 control-label" for="select district">Select District</label>  
                    <div class="col-md-4">
                 <select class="form-control" name="dist" >
                                            <option value=""> --Select--</option>
                                            <?php foreach ($results as $rs) { ?>
                                            <option value="<?php echo $rs["Dname"]; ?>"><?php echo $rs["Dname"]; ?></option>
                                            <?php } ?>
                                        </select>
      </div>
</div>



		<div class="form-group">
  			<label class="col-md-4 control-label" for="Traders Address">  Full Postal Address</label>  
  			<div class="col-md-4">
  			<textarea id="apadress" name="apadress" placeholder="EnterFull Postal the Address" class="form-control input-md" type="text" required></textarea>
    </div>
</div>

		
		<div class="form-group">
	  		<label class="col-md-4 control-label" for="Traders village">Year Of Establishment </label>  
	  			<div class="col-md-4">
	 			 <input  type="text" id="apesyear" name="apesyear" placeholder="Year Of Establishment" class="form-control" onchange="yera(this)" required >
	 			 </div>
	  
	  </div>
	  <div align="center">
	  <legend >Adminstration</legend>
</div>	  


	  <div class="form-group">
	  		<label class="col-md-4 control-label" for="Traders State">Regulated/Unregulated</label>  
	  			<div class="col-md-4">
    				<select id="apre" name="apre" class="form-control" required>
      						 
     						 <option value="Regulated">Regulated</option>
      						 <option value="Unregulated">Unregulated</option>
      						
    				</select>
  				</div>
	  </div>
	  		<div class="form-group">
	  		<label class="col-md-4 control-label" for=" Market name">Name Of Market</label>  
	  			<div class="col-md-4">
	 			 <input  type="text" id="apmarket" name="apmarket" placeholder="Enter the Market name"  class="form-control" onchange="isalpha(this)" required>
	  
	  </div>
</div>
	  <div class="form-group">
	  		<label class="col-md-4 control-label" for="Traders State">Mode Of Election APMC</label>  
	  			<div class="col-md-4">
    				<select id="apelc" name="apelc" class="form-control">
      						 
     						 <option value="Elected">Elected</option>
      						 <option value="Nominated">Nominated</option>
      						 <option value="Superseded Elected">Superseded Elected</option>
      						
    				</select>
  				</div>
	  </div>
	  		<div class="form-group">
	  		<label class="col-md-4 control-label" for=" Market chairman name">Name Of Chairman/Administrator</label>  
	  			<div class="col-md-4">
	 			 <input  type="text" id="apchair" name="apchair" placeholder="Enter the Chairman name"  class="form-control" onchange="isalpha(this)" required>
	 			 </div>
	 			 </div>

	  		<div class="form-group">
	  		<label class="col-md-4 control-label" for=" Market Secretary name">Name Of Secretary</label>  
	  			<div class="col-md-4">
	 			 <input  type="text" id="apsec" name="apsec" placeholder="Enter the Secretary name"  class="form-control" onchange="isalpha(this)" required>
	 			 </div>
	 			 </div>
	 			 <div align="center">
	 			 <legend >Market Charges</legend></div>
	  
	  

	  <div class="form-group">
	  		<label class="col-md-4 control-label" for="apmc Commission">Commission(in%)</label>  
	  			<div class="col-md-2">
	 			 <input  type="text" id="apcomm" name="apcomm" placeholder="Commission(in %)" class="form-control" required>
	 			 </div>
	 			 </div>


	  <div class="form-group">
	  		<label class="col-md-4 control-label" for="Market Charges">Market Fee(% Total)</label>  
	  			<div class="col-md-2">
	 			 <input  type="text" id="apmf" name="apmf" placeholder="Market Fee" class="form-control" required>
	 			 </div>
	 			 </div>
	 			 <div align="center">
	 			 <legend >Financial Position</legend></div>
	 			 <div class="form-group">
	  		<label class="col-md-4 control-label" for="Market Charges">Annual Income</label>  
	  			<div class="col-md-4">
	 			 <input  type="text" id="apin" name="apin" placeholder="Annual Income" class="form-control" onchange="isnum(this)" required>
	 			 </div>
	 			 </div>
	 			 <div class="form-group">
	  		<label class="col-md-4 control-label" for="Market Charges">Annual Expenditure</label>  
	  			<div class="col-md-4">
	 			 <input  type="text" id="apex" name="apex" placeholder="Annual Expenditure" class="form-control" onchange="isnum(this)" required>
	 			 </div>
	 			 </div>
	 			 <div class="form-group">
	  		<label class="col-md-4 control-label" for="Market Charges">Surplus/Deficit</label>  
	  			<div class="col-md-4">
	 			 <input  type="text" id="apsur" name="apsur" placeholder="Surplus/Deficit" class="form-control" onchange="isnum(this)" required>
	 			 </div>
	 			 </div>
	  

	  		
<div align="center">
	  <legend >Login Information</legend>
</div>	  	  
	  
		 		  <div class="form-group">
	  		<label class="col-md-4 control-label" for="apmc password">Password</label>  
	  			<div class="col-md-3">
	 			 <input  type="Password" id="appass" name="appass" placeholder="Enter Password" class="form-control" onchange="pass(this)" required>
	 			 </div>
	 			 </div>
	 			

		 		  <div class="form-group">
	  		<label class="col-md-4 control-label" for="apmc password"> Confirm Password</label>  
	  			<div class="col-md-3">
	 			 <input  type="Password" id="aprepass" name="aprepass" placeholder=" Re-Enter Password" class="form-control" onchange="check(this)"  onchange="check()" required>
	 			 </div>
	 			 </div>



<!-- Button Submit -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-1">
    <button id="fs1" name="fs1" class="btn btn-primary" >Submit</button>
  </div>
  <div class="col-md-1">
    <button id="cancle" name="cancle" class="btn btn-primary" onclick=history.go(-1)>Reset</button>
  </div>
</div><

</fieldset>
</div></form></div>
	 			

<?php
include"footer.php";
?>