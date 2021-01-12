<?php
include"connect.php";
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