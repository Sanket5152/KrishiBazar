        <?php
        include "fhead.php";
        ?>
        <?php
        require("configure.php");
        ?>
        <SCRIPT language=Javascript>
          <!--
          function isNumberKey(evt)
          {
           var charCode = (evt.which) ? evt.which : event.keyCode
           if (charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

        return true;
    }
         function readURL(input) {
            }
        }

    
    
</SCRIPT>

<!--//baner-->
    <div class="container">

             
                    <div class=".col-md-6 .col-md-offset-3">
                 
                        <div class="panel panel-default">
                            <div class="panel-heading" style="text-align: center; font-size: 30px;background-color: #006699;text-decoration-color: white">Add Auction</div>
                            <div class="panel-body">
                                <form role="form" action="auction1.php" method="post" enctype="multipart/form-data" id="add" onsubmit="return validateaddproduct('add');">
                                    <?php
                                    if (isset($_GET["msg"]))
                                    {
                                        echo"<div class='alert alert-success' role='alert'>";
                                        echo "<strong>Sucessfully added the auction </strong>.";
                                        echo"</div>";
                                    }
                                    elseif (isset($_GET["msg1"]))
                                    {
                                        echo"<div class='alert alert-danger' role='alert'>";
                                        echo "<strong>Sorry</strong> &nbsp;Auction not added.";
                                        echo"</div>";
                                    }
                                    ?>
                                        <div class="form-group" >
                                           <?php
                                        $sql = "SELECT * FROM type ORDER BY type_name";
                                        try {
                                            $stmt = $DB->prepare($sql);
                                            $stmt->execute();
                                            $results = $stmt->fetchAll();
                                        } catch (Exception $ex) {
                                            echo($ex->getMessage());
                                        }
                                        ?>

   <div class="form-group">
            <label class="col-md-4 control-label" style="text-align: right; padding-right: 40px;" for="select Catogory">Select Catogory</label>  
                    <div class="col-md-6">
                 <select class="form-control" name="type"  onChange="showState(this);" required>
                                            <option value=""> --Select--</option>
                                            <?php foreach ($results as $rs) { ?>
                                            <option value="<?php echo $rs["type_Id"]; ?>"><?php echo $rs["type_name"]; ?></option>
                                            <?php } ?>
                                        </select>
      </div>
</div>
                                    
                                  
                                     <div class="form-group" style="padding-top: 50px;">
                                        <div id="output1"></div>
                    
                                    </div>
                                   
                              <div class="form-group" style="padding-top: 50px;" >
                                        <div id="output2"></div>
                                       </div>

      

                                    <div class="form-group" style="padding-top: 50px;">
                                        <label class="col-md-4 control-label" style="text-align: right; padding-right: 40px;">Add Photo </label>
                                           <div class="col-sm-3 ">
                                        <input type="file" name="cphoto" id="cphoto" onchange="return ValidateFileUpload()" required/>
                                        </div>
                                        </div>   
                                         <div class="form-group" style="padding-top: 50px;">
                                         <?php
                                        $sql = "SELECT * FROM apmc_details ORDER BY ap_place";
                                        try {
                                            $stmt = $DB->prepare($sql);
                                            $stmt->execute();
                                            $results = $stmt->fetchAll();
                                        } catch (Exception $ex) {
                                            echo($ex->getMessage());
                                        }
                                        ?>
                                        <div class="form-group">
            <label class="col-md-4 control-label" style="text-align: right; padding-right: 40px;" for="select Catogory">Select APMC</label>  
                    <div class="col-md-2">
                 <select class="form-control" name="apmc" required >
                                            <option value=""> --Select--</option>
                                            <?php foreach ($results as $rs) { ?>
                                            <option value="<?php echo $rs["ap_id"]; ?>"><?php echo $rs["ap_place"]; ?></option>
                                            <?php } ?>
                                        </select>
      </div>
</div>

                                    
                            
                                    <button class="btn btn-success btn-lg btn-block" name="s1" style="background-color:#006699 "><span class="glyphicon glyphicon-log-in"></span>&nbsp;ADD</button></div>
                                

                            </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <script src="jquery-1.9.0.min.js"></script>
         


<SCRIPT type="text/javascript">
    function ValidateFileUpload() {
        var fuData = document.getElementById('cphoto');		
        var FileUploadPath = fuData.value;


//To check if user upload any file
        if (FileUploadPath == '') {
            alert("Please upload an image");

        } else {
            var Extension = FileUploadPath.substring(
                    FileUploadPath.lastIndexOf('.') + 1).toLowerCase();

//The file uploaded is an image

if (Extension == "gif" || Extension == "png" || Extension == "bmp"
                    || Extension == "jpeg" || Extension == "jpg") {

// To Display
                if (fuData.files && fuData.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#blah').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(fuData.files[0]);
                }

            } 

//The file upload is NOT an image
else {
                alert("Photo only allows file types of GIF, PNG, JPG, JPEG and BMP. ");

            }
        }
    }
</SCRIPT>


        <script>
            function showState(sel) {
                var country_id = sel.options[sel.selectedIndex].value;
                $("#output1").html("");
                $("#output2").html("");
                if (country_id.length > 0) {    

                    $.ajax({
                        type: "POST",
                        url: "fetch_cropname.php",
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

            function showCity(sel) {
                var state_id = sel.options[sel.selectedIndex].value;
                if (state_id.length > 0) {
                    $.ajax({
                        type: "POST",
                        url: "fetch_variety.php",
                        data: "state_id=" + state_id,
                        cache: false,
                        beforeSend: function() {
                            $('#output2').html('<img src="images/loader.gif" alt="" width="24" height="24">');
                        },
                        success: function(html) {
                            $("#output2").html(html);
                        }
                    });
                } else {
                    $("#output2").html("");
                }
            }
        </script>
        <?php
        include "footer.php";
        ?>`