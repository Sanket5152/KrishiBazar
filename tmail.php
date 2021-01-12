<?php 
include"head.php";
	require("PHPMailer_v5.1/class.phpmailer.php");
	$conn=new MySQLi("localhost","root","","kribazar");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<p align="center"> <font size=6 color=red><b>Forgot Password</b></font></p>
<form method="post">
<table width="500px"  border="0" cellspacing="0" align=center>
  <tr>
    <td align="right"><font size=3><b>Email: </b></font></th>
    <td ><input type="text" name="to" placeholder="Enter the email address" size="50px" /></td>
  </tr>
  <tr>		

    <td colspan="2" align=center><input type="submit" name="sendmail"  value=Submit /></td>
  </tr>
</table>
</form>
</body>
</html>

<?php
if(isset($_REQUEST['sendmail']))
{
	
	$to = $_REQUEST['to'];
	$mailcheck = spamcheck($to);
	if($mailcheck==true)
	{
		//query for table of database from which user name and password is fetched.
 $sel = "select * from t_details where Email = '$to'";
	
	$r = $conn->query($sel);
	echo $row = $r->num_rows;
	if($row>0)
	{
		$rec = $r->fetch_object();
		//Columns are fetched from table
		$user =$rec->Username;
		$pass = $rec->Password;
		
		$description = "<table width='250px'> <tr><td>Username: $user </td> <td>Your Paasword : $pass </td> </tr></table>";


		$mail = new PHPMailer();
		$mail->Mailer = "smtp";
		$mail->IsSMTP();	
		$mail->SMTPDebug = 0;  // debugging: 1 = errors and messages, 2 = messages only
		$mail->SMTPAuth = true;  // authentication enabled
		$mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
		$mail->Host = 'smtp.gmail.com';
		$mail->Port = 587; 
		//here username is your email id
		$mail->Username = "sanketundhad@gmail.com";  
		//here password is your password of mail id
		$mail->Password = "San5152und2787";
		
		
		//$mail->AddAttachment($Path,$Path);           
		$mail->SetFrom("Sanketundhad@gmail.com", "Password Notification");
		$mail->Subject = "Krishibazar Reset Password";
		$mail->IsHTML();
		$mail->Body = $description;
		$mail->AddAddress($to);
		echo"sucessfull maiil sent";		
		if(!$mail->Send()) {
			$error = 'Mail error: '.$mail->ErrorInfo; 
			//return false;
		} else {
			$error = 'Message has been sent to your email';
			//return true;
		}
	}
	else
	{
		echo "You are not registered ";
	
	}		
	}
	else
	{
		echo  "Please enter valid email ";
	}
}

function spamcheck($fld) 
{
$field=filter_var($fld,FILTER_SANITIZE_EMAIL);
if(filter_var($field,FILTER_VALIDATE_EMAIL))
{
return true;
}
else
{
return false;
}
}
?>
<?php
include"footer.php";
?>