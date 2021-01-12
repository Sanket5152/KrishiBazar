   
        <?php
        require("configure.php");
        ?>
         <div class="container">

             
                    <div class=".col-md-6 .col-md-offset-3">
                 
                        <div class="panel panel-default">
                            <div class="panel-heading" style="text-align: center; font-size: 30px;background-color: #006699;text-decoration-color: white">Add Auction</div>
                            <div class="panel-body">
                                <form role="form" action="try331.php" method="post" enctype="multipart/form-data" id="add" onsubmit="return validateaddproduct('add');">
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
                                        

      

                                    <div class="form-group" style="padding-top: 50px;">
                                        <label class="col-md-4 control-label" style="text-align: right; padding-right: 40px;">Add Photo </label>
                                           <div class="col-sm-3 ">
                                        <input type="file" name="cphoto" id="cphoto" onchange="return ValidateFileUpload()" required/>
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

  <