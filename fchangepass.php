<?php
include"fhead.php";
include"connect.php";?>
<script>
	function passo(){

       var Number = document.getElementById('old').value;
       var IndNum =/^(?=.*[A-Za-z])(?=.*\d)(?=.*[$@$!%*#?&])[A-Za-z\d$@$!%*#?&]{8,}$/;

       if(IndNum.test(Number)){
          return;
      }

      else{
         alert("Enter Valid Password  e.g san@1234");
          document.getElementById('old').focus();
      }

  }
  function pass(){

       var Number = document.getElementById('new').value;
       var IndNum =/^(?=.*[A-Za-z])(?=.*\d)(?=.*[$@$!%*#?&])[A-Za-z\d$@$!%*#?&]{8,}$/;

       if(IndNum.test(Number)){
          return;
      }

      else{
         alert("Enter Valid Password  e.g san@1234");
          document.getElementById('new').focus();
      }

  }
  fu
  function check()
                  {
                      if(document.getElementById('new').value === document.getElementById('cnew').value)
                      {
                          
                      } 
                      else 
                      {
                          alert("Password and Re-enter Password  do not match");
                          document.getElementById('cnew').focus();
                      }
                  }
</script>
<div class="container" >

	  <div align="center">
                        		<a href="fprof.php"><button type="button" class="btn btn-default btn-lg">
  <span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home
</button></a>
                        </div>
                        <br>

		<div class="panel panel-danger" style="width:600px; margin-left: 200px" >
			<div class="panel-heading">Change Password</div>
			<div class="panel-body">
				<?php
				if(isset($_POST['submit']))
				{

					$npass=$_POST['new'];
					$opass=$_POST['old'];
					$select="select * from f_details where Password='$opass' and Phone=".$_SESSION['mob']."";
					$ress=mysql_query($select);
					$recs=mysql_fetch_row($ress);
					if($recs)
					{
						$cp="UPDATE f_details SET Password='$npass' where Password='$opass' and phone=".$_SESSION['mob']."";
						//echo $cp;
						$res=mysql_query($cp);
						if($res)
						{

							echo"<div class='alert alert-success' role='alert'>";
							echo "<strong>Succesfully Password Changed";
									echo"</div>	";
				//echo $msg;
						}
					}
					else
					{
						echo"<div class='alert alert-success' role='alert'>";
						echo "<strong>Sorry!!!!!</strong> &nbsp;Old password is Wrong";
						echo"</div>	";
					}
				}
				?>	

				<form role="form" action="fchangepass.php" method="post" id="cp" onsubmit="return cp('cp');">

					<div class="form-group" style="padding-bottom:10px;">
	  		<label class="col-md-4 control-label" for="Farme password"> Old Password</label>  
	  			<div class="col-md-6">
	 			 <input  type="Password" id="old" name="old" placeholder="Enter Password" class="form-control" onchange="passo(this)" required>
	 			 </div><br>
	 			 </div>
	 			 <div class="form-group" style="padding-bottom:10px;">
	  		<label class="col-md-4 control-label" for="Farme password">New Password</label>  
	  			<div class="col-md-6">
	 			 <input  type="Password" id="new" name="new" placeholder="Enter Password" class="form-control" onchange="pass(this)" required>
	 			 </div><br>
	 			 </div>	 
	 			 <div class="form-group" style="padding-bottom:40px; ">
	  		<label class="col-md-4 control-label" for="Farme password"> Re-Enter Password</label>  
	  			<div class="col-md-6">
	 			 <input  type="Password" id="cnew" name="cnew" placeholder=" Re-Enter Password" class="form-control" onchange="check(this)"  onchange="check1()" required>
	 			 </div>
	 			 </div>			

		 		  
					<div align="center"><button class="btn btn-success btn-lg btn-block" name="submit" style="width:150px;text-align: center;background-color:#006699 "><span class="glyphicon glyphicon-log-in"></span>&nbsp;Update</button></div>
				</form>
			</div>
		</div>
	</div>
	<div id="space" style="padding-bottom: 140px"></div>

<?php
include"footer.php";
?>