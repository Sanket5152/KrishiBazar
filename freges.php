<?php 	 
	include "head.php";
	require"configure.php";

?>
<style type="text/css">.thumb-image{float:left;width:100px;position:relative;padding:5px;}</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
$(document).ready(function() {
        $("#fileUpload").on('change', function() {
          //Get count of selected files
          var countFiles = $(this)[0].files.length;
          var imgPath = $(this)[0].value;
          var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
          var image_holder = $("#image-holder");
          image_holder.empty();
          if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
            if (typeof(FileReader) != "undefined") {
              //loop for each file selected for uploaded.
              for (var i = 0; i < countFiles; i++) 
              {
                var reader = new FileReader();
                reader.onload = function(e) {
                  $("<img />", {
                    "src": e.target.result,
                    "class": "thumb-image"
                  }).appendTo(image_holder);
                }
                image_holder.show();
                reader.readAsDataURL($(this)[0].files[i]);
              }
            } else {
              alert("This browser does not support FileReader.");
            }
          } else {
            alert("Pls select only images");
          }
        });
      });
</script>
<script>
  function mobileNumber(){

     var Number = document.getElementById('fphone').value;
     var IndNum = /^[0]?[789]\d{9}$/;

     if(IndNum.test(Number)){
        return;
    }

    else{
       alert( "Enter valid phone number");
        document.getElementById('fphone').focus();
    }

}
function pincode(){

     var Number = document.getElementById('fpincode').value;
     var IndNum = /^[1-9][0-9]{5}$/;

     if(IndNum.test(Number)){
        return;
    }

    else{
       alert( "Enter valid Pincode number");
        document.getElementById('fpincode').focus();
    }

}
function email(){

     var Number = document.getElementById('femail').value;
     var IndNum = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

     if(IndNum.test(Number)){
        return;
    }

    else{
       alert( "Enter Valid Email Address");
        document.getElementById('femail').focus();
    }

}
function namee(){

     var Number = document.getElementById('fname').value;
     var IndNum =/^([a-zA-Z]+\s?)*$/;

     if(IndNum.test(Number)){
        return;
    }

    else{
       alert("Enter Valid name ");
        document.getElementById('fname').focus();
    }

}
  function pass(){

       var Number = document.getElementById('fpass').value;
       var IndNum =/^(?=.*[A-Za-z])(?=.*\d)(?=.*[$@$!%*#?&])[A-Za-z\d$@$!%*#?&]{8,}$/;

       if(IndNum.test(Number)){
          return;
      }

      else{
         alert("Enter Valid Password  e.g san@1234");
          document.getElementById('fpass').focus();
      }

  }
  function check()
                  {
                      if(document.getElementById('fpass').value === document.getElementById('frepass').value)
                      {
                          
                      } 
                      else 
                      {
                          alert("Password and Confirm Password  do not match");
                          document.getElementById('trepass ').focus();
                      }
                  }
</script>


<div class="well well-sm" style="border: 2px solid #a1a1a1;
    margin-right:1%;
    margin-left: 1%;	
    background: #dddddd;
    width: 98%;
    border-radius: 15px;font-size:20px;vertical-align: center; text-align: center;
   font-family:Times New Roman, Georgia, Serif; align="center""><b>Farmer Registration</b>	</div>

		<div class="container">

			<form role="form" action="freges1.php" method="post" id="farmerregi" onsubmit="return validateform('farmerregi');" class="form-horizontal">
								<?php
								if (isset($_GET["msg"]))
								{
									echo"<div class='alert alert-danger' role='alert' style='width=20%
    									background: #dddddd;border-radius:15px;font-size:20px;vertical-align:center; text-align: center;''>";
									echo "<b> Mobile No Already Registered";
									echo"</div>";
								}
								?>
			

		<div class="form-group">
	  		<label class="col-md-4 control-label" for="Farmer name">Name:</label>  
	  			<div class="col-md-6">
	 			 <input  type="text" id="fname" name="fname" placeholder="Enter the Full name"  class="form-control" data-trigger="manual" onchange="namee(this)" required>
	  
	  </div>
</div>

		<div class="form-group">
  			<label class="col-md-4 control-label" for="Farmer Address">Enter the Address</label>  
  			<div class="col-md-6">
  			<textarea id="fadress" name="fadress" placeholder="Enter the Address" class="form-control input-md" type="text" onkeyup="isAdd(this)" required></textarea>
    </div>
</div>

		<div class="form-group">
	  		<label class="col-md-4 control-label" for="Farmer village">Village:</label>  
	  			<div class="col-md-2">
			 			 <input  type="text" id="fvillage" name="fvillage" placeholder="Village" class="form-control" onkeyup="isalpha(this)" required>
	 			 </div>
	  

	  		<label class="col-md-1 control-label" for="Farmer taluka">Taluka:</label>  
	  			<div class="col-md-2">
	 			 <input  type="text" id="ftaluka" name="ftaluka" placeholder="Taluka" class="form-control" onkeyup="isalpha(this)" required>
	  
	  </div>
	  </div>


     <div class="form-group">
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
	  		<label class="col-md-4 control-label" for="Farmer District">District:</label>  
	  			 <div class="col-md-2">
                 <select class="form-control" name="fdistrict"  onChange="showState(this);">
                                            <option value=""> --Select--</option>
                                            <?php foreach ($results as $rs) { ?>
                                            <option value="<?php echo $rs["Did"]; ?>"><?php echo $rs["Dname"]; ?></option>
                                            <?php } ?>
                                        </select>
      </div>

	  		<label class="col-md-1 control-label" for="Farmer State">State:</label>  
	  			<div class="col-md-2">
    				<select id="fstate" name="fstate" class="form-control" required>
      						 <option value="0">-- Select state --</option>
     						 <option value="Gujarat">Gujarat</option>
      						 <option value="Rajasthan">Rajasthan</option>
      						 <option value="Maharastra">Maharastra</option>
      						 <option value="Delhi">Delhi</option>
      						 <option value="MadhyaPradesh">Madhya Pradesh</option>
    				</select>
  				</div>
	  </div>
	                                       

     <div class="form-group">
	  		<label class="col-md-4 control-label" for="Farmer pincode">pincode</label>  
	  			<div class="col-md-2">
	 			 <input  type="text" id="fpincode" name="fpincode" placeholder="Pincode" class="form-control" onchange="pincode(this)" required>
	 			 </div>
	  

	  		<label class="col-md-1 control-label" for="Farmer Phoneno">Phone</label>  
	  			<div class="col-md-2">
	 			 <input  type="text" id="fphone" name="fphone" placeholder="Phone no" class="form-control" onchange="mobileNumber(this)" required>
	  
	  </div>
	  </div>
	    
	  <div class="form-group">
	  		<label class="col-md-4 control-label" for="Farmer email">Email</label>  
	  			<div class="col-md-4">
	 			 <input  type="email" id="femail" name="femail" placeholder="abc@gmail.com" class="form-control" onchange="email(this)" required>
	  
	 			 </div>
	 		</div>
	 	


		 		  <div class="form-group">
	  		<label class="col-md-4 control-label" for="Farmer password">Password</label>  
	  			<div class="col-md-3">
	 			 <input  type="Password" id="fpass" name="fpass" placeholder="Enter Password" class="form-control" onchange="pass(this)" required>
	 			 </div>
	 			 </div>
	 			

		 		  <div class="form-group">
	  		<label class="col-md-4 control-label" for="Farmer password"> Re-Enter Password</label>  
	  			<div class="col-md-3">
	 			 <input  type="Password" id="frepass" name="frepass" placeholder=" Re-Enter Password" class="form-control"  onchange="check()" required>
	 			 </div>
	 			 </div>

<!-- Button Submit -->
<div class="form-group">
</div>
<label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-1">
    <button id="fs1" name="fs1" class="btn btn-primary" >Submit</button>
  </div>
  <div class="col-md-1">
    <button id="cancle" name="cancle" class="btn btn-primary" onclick=history.go(-1)>Reset</button>
  </div>
</div>
</fieldset>
</form>

</div>

<?php
	include "footer.php";
?>