<?php 
include "aphead.php";
?>

<form  action="exadd.php" method="POST"
           enctype="multipart/form-data">
              <?php
								if (isset($_GET["msg"]))
								{
									echo"<div class='alert alert-danger' role='alert' style='width=20%
    									background: #dddddd;border-radius:15px;font-size:20px;vertical-align:center; text-align: center;''>";
									echo "<b>Invalid User Name and Password";
									echo"</div>";
								}
								
							?>
<div class="input-group" style="width:80%;padding-left: 200px;">
    <span class="input-group-btn">
		<button id="fake-file-button-browse" type="button" class="btn btn-default">
			<span class="glyphicon glyphicon-file"></span>
		</button>
	</span>
	<input type="file" id="files-input-upload" style="display:none" name="file">
	<input type="text" id="fake-file-input-name" disabled="disabled" placeholder="File not selected" class="form-control">
	<span class="input-group-btn">
		
	
	
	</span>
</div>
<br>
<div id=abc align="center">
<input type= "submit" value ="Upload" ></div>
</form>
<script type="text/javascript">
// Fake file upload
document.getElementById('fake-file-button-browse').addEventListener('click', function() {
	document.getElementById('files-input-upload').click();
});

document.getElementById('files-input-upload').addEventListener('change', function() {
	document.getElementById('fake-file-input-name').value = this.value;
	
	document.getElementById('fake-file-button-upload').removeAttribute('disabled');
});
</script>


  