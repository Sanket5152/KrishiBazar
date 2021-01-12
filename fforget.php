

<div class="container">
    <div class="row">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="text-center">
                          <h3><i class="fa fa-lock fa-4x"></i></h3>
                          <h2 class="text-center">Forgot Password?</h2>
                          <p>You can reset your password here.</p>
                            <div class="panel-body">
                              
                              <form class="form">
                                <fieldset>
                                  <div class="form-group">
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                                      
                                      <input id="emailInput" placeholder="email address" class="form-control" type="email" name="to" oninvalid="setCustomValidity('Please enter a valid email address!')" onchange="try{setCustomValidity('')}catch(e){}" required="">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <input class="btn btn-lg btn-primary btn-block" value="Send My Password" type="submit">
                                  </div>
                                </fieldset>
                              </form>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
if(isset($_REQUEST['sendmail']))
{
  
  $to = $_REQUEST['to'];
  $mailcheck = spamcheck($to);
  if($mailcheck==true)
  {
    //query for table of database from which user name and password is fetched.
 $sel = "select * from f_details where Email = '$to'";
  
  $r = $conn->query($sel);
  echo $row = $r->num_rows;
  if($row>0)
  {
    $rec = $r->fetch_object();
    //Columns are fetched from table
    $user = $rec->Name;
    $pass = $rec->Password;
    $description = "<table width='250px'> <tr> <td>Username : $user </td>
<td>Password:$pass    </tr></table>";


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
    $mail->SetFrom("sanketundhad@gmail.com", "Password Notification");
    $mail->Subject = "Password Notification";
    $mail->IsHTML();
    $mail->Body = $description;
    $mail->AddAddress($to);
    if(!$mail->Send()) {
      $error = 'Mail error: '.$mail->ErrorInfo; 
      //return false;
    } else {
      $error = 'Message sent!';
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