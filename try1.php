                        <?php
                        include "head.php";
                        include "connect.php";
                        require("configure.php");
                        ?>


                        
                        

			<form role="form" action="apmcdetails.php" method="post" id="apmcregi"  class="form-horizontal">

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
                                            <option value="<?php echo $rs["Did"]; ?>"><?php echo $rs["Dname"]; ?></option>
                                            <?php } ?>
                                        </select>
      </div>
</div>

                                     <div class="form-group" >
                                        <div id="output1"></div>
                    
                                    </div>
                                    <div class="form-group">
                                        <?php

                                        $sql = "SELECT crop_name FROM crop ORDER BY crop_name";
                                        try {
                                            $stmt = $DB->prepare($sql);
                                            $stmt->execute();
                                            $results = $stmt->fetchAll();
                                        } catch (Exception $ex) {
                                            echo($ex->getMessage());
                                        }
                                        ?>
            <label class="col-md-4 control-label"for="select Catogory">Select Commodity</label>  
                    <div class="col-md-4">
                 <select class="form-control" name="type"  onChange="showState(this);">
                                            <option value=""> --Select--</option>
                                            <?php foreach ($results as $rs) { ?>
                                            <option value="<?php echo $rs["crop_name"]; ?>"><?php echo $rs["crop_name"]; ?></option>
                                            <?php } ?>
                                        </select>
      </div>
</div>
                              <div class="form-group">
                                                 <label class="col-md-4 control-label"for="select Catogory">Select Commodity</label>  
                    <div class="col-md-4">
                    <input type="text">
                    </div>
</div>

                                    <div class="form-group" >
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-1">
    <button id="fs1" name="fs1" class="btn btn-primary" >View Details</button>
  </div>
  <br>
  <br>
  <div align="center">
                                <a href="apregs.php"><button type="button" class="btn btn-default btn-lg">
  <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> ADD New APMC
</button></a>
                        </div>
  
  </form>
<br>
<br>

<script src="jquery-1.9.0.min.js">
  $('#sandbox-container input').datepicker({
    format: "dd/mm/yyyy",
    weekStart: 1,
    maxViewMode: 2,
    todayBtn: true
});
</script>
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

<?php
include"footer.php";
?>
