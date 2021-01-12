<?php include"head.php";?>
<style type="text/css">
	.abc
	{
		width: 50%
	}
	.bcd
</style>

<div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title"> Admin Sign In</div>
                        
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                         
                        <form  method="post" action="adminlogin1.php">
                                    <?php
								if (isset($_GET["msg"]))
								{
									echo"<div class='alert alert-danger' role='alert' style='width=20%
    									background: #dddddd;border-radius:15px;font-size:20px;vertical-align:center; text-align: center;''>";
									echo "<b>Invalid User Name and Password";
									echo"</div>";
								}
								
								if (isset($_GET["aa"]))
								{
									echo"<div class='alert alert-danger' role='alert' style='width=20%
    									background: #dddddd;border-radius:15px;font-size:20px;vertical-align:center; text-align: center;''>";
									echo "<b> Sucessfully Log out ";
									echo"</div>";
								}
								?>

                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="adlogin" type="text" class="form-control" name="adlogin" value="" placeholder="username or email" required>                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="adpwd" type="password" class="form-control" name="adpwd" placeholder="password" required>
                                    </div>
                                    

                                
                            <div class="input-group">
                                      <div class="checkbox">
                                        <label>
                                          <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                                        </label>
                                      </div>
                                    </div>


                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                     <input type="submit" class="btn btn-primary" name= value="login">
                                   
                                   

                                    </div>
                                </div>
                                <br>
                               


                                  
                            </form>     



                        </div>                     
                    </div>  
        </div></div>

 					        
<?php include"footer.php"; ?>