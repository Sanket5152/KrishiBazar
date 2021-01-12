
<?php include"head.php";
require("configure.php");
include "connect.php";
?>
<style type="text/css">
	.abc
	{
		width: 50%
	}
	.bcd
</style>

<div class="panel panel-info" style="width: 50%;float: center;margin-left: 350px;" >
                    <div class="panel-heading">
                        <div class="panel-title">  <b>APMC Login</b></div>
                        
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>			    	
			    	<?php
								if (isset($_GET["msg"]))
								{
									echo"<div class='alert alert-danger' role='alert' style='width=20%
    									background: #dddddd;border-radius:15px;font-size:20px;vertical-align:center; text-align: center;''>";
									echo "<b> Apmc User Name and Password Not Valid ";
									echo"</div>";
								}
								?>


<form role="form" action="aploginchk.php" method="post" id="apmcregi"  class="form-horizontal">

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
            <label class="col-md-4 control-label" style="text-align: right; padding-right: 40px;" for="select Catogory">Select District</label>  
                    <div class="col-md-4">
                 <select class="form-control" name="dist"  onChange="showState(this);">
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
              <div class="form-group">
	  		<label class="col-md-4 control-label" for="Farme password">Password</label>  
	  			<div class="col-md-4">
	 			 <input  type="Password" id="appwd" name="appwd" placeholder="Enter Password" class="form-control"  required>
	 			 </div></div>

	 			 <div align="center">
	 			 <div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-1">
    <button id="tsubmit" name="tsubmit" class="btn btn-primary">Login</button>
  </div></div></div>		
	 			

</div></form></div></div>

                                   

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

 
					        
<?php include"footer.php"; ?>