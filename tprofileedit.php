<?php
include"thead.php";
include"connect.php";
  require"configure.php";
$f="select Recid,Name,Address,District,Place,State,Phone,Email,Pincode from t_details where Username='".$_SESSION['user']."'";
            $rf=mysql_query($f);
            while ($rs=mysql_fetch_assoc($rf))
             {
              $id=$rs["Recid"];
                $name=$rs["Name"];
                $add=$rs["Address"];
                
                $place=$rs["Place"];
                $dist=$rs["District"];
                  $stat=$rs["State"];
                    $phone=$rs["Phone"];
                    $email=$rs["Email"];
                    $pin=$rs["Pincode"];
            }
            

?>
<script>
  function mobileNumber(){

     var Number = document.getElementById('tphone').value;
     var IndNum = /^[0]?[789]\d{9}$/;

     if(IndNum.test(Number)){
        return;
    }

    else{
       alert( "Enter valid phone number");
        document.getElementById('tphone').focus();
    }

}
function pincode(){

     var Number = document.getElementById('tpin').value;
     var IndNum = /^[1-9][0-9]{5}$/;

     if(IndNum.test(Number)){
        return;
    }

    else{
       alert( "Enter valid Pincode number");
        document.getElementById('tpin').focus();
    }

}
function email(){

     var Number = document.getElementById('temail').value;
     var IndNum = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

     if(IndNum.test(Number)){
        return;
    }

    else{
       alert( "Enter Valid Email Address");
        document.getElementById('temail').focus();
    }

}
function namee(){

     var Number = document.getElementById('tname').value;
     var IndNum =/^([a-zA-Z]+\s?)*$/;

     if(IndNum.test(Number)){
        return;
    }

    else{
       alert("Enter Valid name ");
        document.getElementById('tname').focus();
    }

}</script>
	<style type="text/css">
		.user-row {
    margin-bottom: 14px;
}

.user-row:last-child {
    margin-bottom: 0;
}

.dropdown-user {
    margin: 13px 0;
    padding: 5px;
    height: 100%;
}

.dropdown-user:hover {
    cursor: pointer;
}

.table-user-information > tbody > tr {
    border-top: 1px solid rgb(221, 221, 221);
}

.table-user-information > tbody > tr:first-child {
    border-top: 0;
}


.table-user-information > tbody > tr > td {
    border-top: 0;
}
.toppad
{margin-top:20px;
}

	</style>

		<div class="container" style="font-family:Arial;font-size:20px; ">
      <div class="row">
    
        <div class="col-xs-12 " >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Profile Info</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> </div>
                
                <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                  <dl>
                    <dt>DEPARTMENT:</dt>
                    <dd>Administrator</dd>
                    <dt>HIRE DATE</dt>
                    <dd>11/12/2013</dd>
                    <dt>DATE OF BIRTH</dt>
                       <dd>11/12/2013</dd>
                    <dt>GENDER</dt>
                    <dd>Male</dd>
                  </dl>
                </div>-->
                <div class=" col-md-9 col-lg-9 "> 
                <form method="post" action="tprofileupdate.php?id=<?php echo $id?>">                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Farmer Name:</td>
                        <td><input  type="text" id="tname" name="tname" placeholder="Enter the Full name"  class="form-control"  data-trigger="manual" onchange="namee(this)" value="<?php echo $name ;?>" required></td>
                      </tr>
                      <tr>
                        <td>Address:</td>
                        <td><input  type="text" id="tadd" name="tadd" placeholder="Enter the Address"  class="form-control" data-trigger="manual" onchange="isalpha(this)" value="<?php echo $add ;?>" required></td>
                      </tr>
                   
                        
                        <td>place</td>
                        
                        <td><input  type="text" id="tplace" name="tplace" placeholder="Enter the place"  class="form-control" data-trigger="manual" onchange="isalpha(this)" value="<?php echo $place ;?>" required readonly></td>
                      </tr>
                      <tr>
                        <td>State</td>
                        <td><select id="tstat" name="tstat" class="form-control" required>
                   
                 <option value="Gujarat"<?php ($rs["stat"]=="Gujarat")?"selected":""?>>Gujarat</option>
                  <option value="Rajasthan"<?php ($rs["stat"]=="Rajasthan")?"selected":""?>>Rajasthan</option>
                   <option value="Maharastra"<?php ($rs["stat"]=="Maharastra")?"selected":""?>>Maharastra</option>
                    <option value="Delhi"<?php ($rs["stat"]=="Delhi")?"selected":""?>>Delhi</option>
                     <option value="MadhyaPradesh"<?php ($rs["stat"]=="Elected")?"selected":""?>>MadhyaPradesh</option>
                   
                  
            </select></td>
                      </tr>
                      
                        
                          <tr>
                        <td>Pincode</td>
                        <td><input  type="text" id="tpin" name="tpin" placeholder="Enter the pincode"  class="form-control" data-trigger="manual" onchange="pincode(this)" value="<?php echo $pin ;?>" required></td>
                      </tr>
                           
                          <tr>
                        <td>Phone</td>
                        <td><input  type="text" id="tphone" name="tphone" placeholder="Enter the Phone"  class="form-control" data-trigger="manual" onchange="mobileNumber(this)" value="<?php echo $phone ;?>" required ></td>
                      </tr>

                          <tr>
                        <td>Email</td>
                        <td><input  type="text" id="temail" name="temail" placeholder="Enter the Email"  class="form-control" data-trigger="manual" onchange="email(this)" value="<?php echo $email ;?>" required></td>
                      </tr>
                      <tr>
                      <td colspan="2"><button type="submit" id="us1" name="us1" class="btn btn-primary" >Update</button></td>
                      </tr>
                     </tr>
                    </tbody>
                  </table>
                  </form></div></div></div></div></div></div></div>
                 

<?php
include"footer.php";
?>