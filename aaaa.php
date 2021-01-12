<?php include"head.php";?>
<style type="text/css">
	.abc
	{
		width: 50%
	}
	.bcd
</style>

<div class="container">
	  		
<div class="row">
	
    		
			  	 <div class="col-sm-6 col-md-4 col-md-offset-4">
                <h1 class="text-center login-title" style="    font-family: "Times New Roman", Times, serif;
"> Trader Login</h1>
                <div class="account-wall">
                    <img src="./images/t11.jpg" align="text-center" class="img-circle" alt="Cinque Terre" width="300" height="250"> 

			  	<div class="panel-body">
			    	<form  method="post" action="floginchk.php">
			    	<?php
								if (isset($_GET["msg"]))
								{
									echo"<div class='alert alert-danger' role='alert' style='width=20%
    									background: #dddddd;border-radius:15px;font-size:20px;vertical-align:center; text-align: center;''>";
									echo "<b> Id and password not valid ";
									echo"</div>";
								}
								?>

                    <fieldset>
			    	+  	<div class="form-group"  style="background: white">
				<input type="text" class="form-control" name="tlogin" placeholder="Trader Id" aria-describedby="basic-addon1">
			    		</div>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="Password" name="tpwd" type="password" value="">
			    		</div>
			    		
			    	    </div>
			    		<input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
						&nbsp;
			    		<a href="tregs.php"><button type="button" class="btn btn-lg btn-success btn-block"> Registration </button></a>
			    		&nbsp;

			    	</fieldset>
			      	</form>
			    </div>
				
		</div>
	</div>
</div>


           		
							       			        </div>
					        </div>
					        
<?php include"footer.php"; ?>