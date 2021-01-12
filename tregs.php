<?php
	include "head.php";	
	require("configure.php");
?>
<script>
  function mobileNumber(){

     var Number = document.getElementById('tphone').value;
     var IndNum = /^[0]?[789]\d{9}$/;

     if(IndNum.test(Number)){
        return;
    }

    else{
       alert( "Enter valid phone number");
        document.getElementById('tphone').focus();
    }

}
function pincode(){

     var Number = document.getElementById('tpincode').value;
     var IndNum = /^[1-9][0-9]{5}$/;

     if(IndNum.test(Number)){
        return;
    }

    else{
       alert( "Enter valid Pincode number");
        document.getElementById('tpincode').focus();
    }

}
function email(){

     var Number = document.getElementById('temail').value;
     var IndNum = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

     if(IndNum.test(Number)){
        return;
    }

    else{
       alert( "Enter Valid Email Address");
        document.getElementById('temail').focus();
    }

}
function namee(){

     var Number = document.getElementById('tname').value;
     var IndNum =/^([a-zA-Z]+\s?)*$/;

     if(IndNum.test(Number)){
        return;
    }

    else{
       alert("Enter Valid name ");
        document.getElementById('tname').focus();
    }

}
function pass(){

     var Number = document.getElementById('tpass').value;
     var IndNum =/^(?=.*[A-Za-z])(?=.*\d)(?=.*[$@$!%*#?&])[A-Za-z\d$@$!%*#?&]{8,}$/;

     if(IndNum.test(Number)){
        return;
    }

    else{
       alert("Enter Valid Password       e.g san@1234");
        document.getElementById('tpass').focus();
    }

}
function check()
                {
                    if(document.getElementById('tpass').value === document.getElementById('trepass').value)
                    {
                        
                    } 
                    else 
                    {
                        alert("Password and Confirm Password  do not match");
                        document.getElementById('trepass ').focus();
                    }
                }
</script>
		<div class="container">
			
			<form class="form-horizontal" method="post" action="tregs1.php">
	
<div class="well well-sm" style="border: 2px solid #a1a1a1;
    margin-right:1%;
    margin-left: 1%;  
    background: #dddddd;
    width: 98%;
    border-radius: 15px;font-size:20px;vertical-align: center; text-align: center;
   font-family:Times New Roman, Georgia, Serif; align="center""><b>Trader Registration</b>  </div>
  		<div class="form-group">
	  		<label class="col-md-4 control-label" for="Traders name">Name:</label>  
	  			<div class="col-md-6">
    	 			 <input  type="text" id="tname" name="tname" placeholder="Enter the Full name"  class="form-control" onchange="namee(this)" required>
	  
	  </div>
</div>

		<div class="form-group">
  			<label class="col-md-4 control-label" for="Traders Address"> Address</label>  
  			<div class="col-md-6">
  			<textarea id="tadress" name="tadress" placeholder="Enter the Address" class="form-control input-md" type="text" onkeyup="isAdd(this)" required></textarea>
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
            <label class="col-md-4 control-label"  for="select Catogory">Select District</label>  
                    <div class="col-md-4">
                 <select class="form-control" name="tdist"  onChange="showState(this);" required>
                                            <option value=""> --Select--</option>
                                            <?php foreach ($results as $rs) { ?>
                                            <option value="<?php echo $rs["Dname"]; ?>"><?php echo $rs["Dname"]; ?></option>
                                            <?php } ?>
                                        </select>
      </div>
</div>

                                     <div class="form-group" >
                                        <div id="output1"></div>
                    
                                    </div>
                        

</div>		 
	  <div class="form-group">
	  		
	  

	  		<label class="col-md-4 control-label" for="Traders State">State:</label>  
	  			<div class="col-md-4">
    				<select id="tstate" name="tstate" class="form-control" required>
      						 <option value="">-- Select state --</option>
     						 <option value="Gujarat">Gujarat</option>
      						 <option value="Rajasthan">Rajasthan</option>
      						 <option value="Maharastra">Maharastra</option>
      						 <option value="Delhi">Delhi</option>
      						 <option value="Madhya Pradesh">Madhya Pradesh</option>
    				</select>
  				</div>
	  </div>
	  <div class="form-group">
	  		<label class="col-md-4 control-label" for="Traders pincode">pincode</label>  
	  			<div class="col-md-2">
	 			 <input  type="text" id="tpincode" name="tpincode" placeholder="Pincode" class="form-control" onchange="pincode(this)">
	 			 </div>
	  

	  		<label class="col-md-1 control-label" for="Traders Phoneno">Phoneno:</label>  
	  			<div class="col-md-2">
	 			 <input  type="text" id="tphone" name="tphone" placeholder="Phone no" class="form-control" onchange="mobileNumber(this)" required>
	  
	  </div>
	  </div>
	   <div class="form-group">
        <label class="col-md-4 control-label" for="Farmer email">Email:</label>  
          <div class="col-md-4">
         <input  type="email" id="temail" name="temail" placeholder="abc@gmail.com" class="form-control" onchange="email(this)" required>
    
         </div>
      </div>
	 		<div class="form-group">
	  		<label class="col-md-4 control-label" for="Traders name"> User Name:</label>  
	  			<div class="col-md-3">
	 			 <input  type="text" id="tuname" name="tuname" placeholder="Enter the User name"  class="form-control" onchange="isalpha(this)" required>
	  
	  </div>
</div>


	 		  <div class="form-group">
	  		<label class="col-md-4 control-label" for="Traders password">Password</label>  
	  			<div class="col-md-3">
	 			 <input  type="password" id="tpass" name="tpass" placeholder="Enter Password" class="form-control" onchange="pass(this)" required>
	 			 </div>
	 			 </div>
	 			  <div class="form-group">
	  		<label class="col-md-4 control-label" for="Farme password"> Re-Enter Password</label>  
	  			<div class="col-md-3"> 		 		
	 			 <input  type="Password" id="trepass" name="trepass" placeholder=" Re-Enter Password" class="form-control"  onchange="check()" required>
	 			 </div>
	 			 </div>



<!-- Button Submit -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-1">
    <button id="tsubmit" name="tsubmit" class="btn btn-primary">Submit</button>
  </div>
  <div class="col-md-1">
    <button id="tcancle" name="tcancle" class="btn btn-primary" onclick=history.go(-1)>Reset</button>
  </div>
</div>

</fieldset>
</form>
<script src="jquery-1.9.0.min.js"></script>
        <script>
            function showState(sel) {
                var country_id = sel.options[sel.selectedIndex].value;
                $("#output1").html("");
                $("#output2").html("");
                if (country_id.length > 0) {    

                    $.ajax({
                        type: "POST",
                        url: "fetchplace.php",
                        data: "country_id=" + country_id,
                        cache: false,
                        beforeSend: function() {
                            $('#output1').html('<img src="images/loader.gif" alt="" width="24" height="24">');
                        },
                        success: function(html) {
                            $("#output1").html(html);
                        }
                    });
                }
            }

            
        </script>

</div>
<?php
	include "footer.php";
?>