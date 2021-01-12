        <?php
        include "head.php";
        ?>
        <?php
        require("configure.php");
        ?>
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
            <label class="col-md-4 control-label" style="text-align: right; padding-right: 40px;" for="select Catogory">Select Catogory</label>  
                    <div class="col-md-2">
                 <select class="form-control" name="type"  onChange="showState(this);">
                                            <option value=""> --Select--</option>
                                            <?php foreach ($results as $rs) { ?>
                                            <option value="<?php echo $rs["Did"]; ?>"><?php echo $rs["Dname"]; ?></option>
                                            <?php } ?>
                                        </select>
      </div>
</div>

                                     <div class="form-group" style="padding-top: 50px;">
                                        <div id="output1"></div>
                    
                                    </div>
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
<input type="file" name="cphoto" id="cphoto" onchange="return ValidateFileUpload()" />
        <?php
        include "footer.php";
        ?>