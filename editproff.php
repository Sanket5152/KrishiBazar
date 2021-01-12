<?php
include"fhead.php";
include"connect.php";
  require"configure.php";
$f="select Recid,Name,Address,Village,Taluka,District,State,Phone,Email,Pincode from f_details where phone=".$_SESSION['mob']."";
            $rf=mysql_query($f);
            while ($rs=mysql_fetch_assoc($rf))
             {
              $id=$rs["Recid"];
                $name=$rs["Name"];
                $add=$rs["Address"];
                $vill=$rs["Village"];
                $tal=$rs["Taluka"];
                $dist=$rs["District"];
                  $stat=$rs["State"];
                    $phone=$rs["Phone"];
                    $email=$rs["Email"];
                    $pin=$rs["Pincode"];
            }

?>
<script>
  function mobileNumber(){

     var Number = document.getElementById('fphone').value;
     var IndNum = /^[0]?[789]\d{9}$/;

     if(IndNum.test(Number)){
        return;
    }

    else{
       alert( "Enter valid phone number");
        document.getElementById('fphone').focus();
    }

}
function pincode(){

     var Number = document.getElementById('fpincode').value;
     var IndNum = /^[1-9][0-9]{5}$/;

     if(IndNum.test(Number)){
        return;
    }

    else{
       alert( "Enter valid Pincode number");
        document.getElementById('fpincode').focus();
    }

}
function email(){

     var Number = document.getElementById('femail').value;
     var IndNum = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

     if(IndNum.test(Number)){
        return;
    }

    else{
       alert( "Enter Valid Email Address");
        document.getElementById('femail').focus();
    }

}
function namee(){

     var Number = document.getElementById('fname').value;
     var IndNum =/^([a-zA-Z]+\s?)*$/;

     if(IndNum.test(Number)){
        return;
    }

    else{
       alert("Enter Valid name ");
        document.getElementById('fname').focus();
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
                <form method="post" action="updatefprofile.php?id=<?php echo $id?>">                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Farmer Name:</td>
                        <td><input  type="text" id="fname" name="fname" placeholder="Enter the Full name"  class="form-control" data-trigger="manual" onchange="namee(this)" value="<?php echo $name ;?>"</td>
                      </tr>
                      <tr>
                        <td>Address:</td>
                        <td><input  type="text" id="fadd" name="fadd" placeholder="Enter the Address"  class="form-control" data-trigger="manual" onchange="isalpha(this)" value="<?php echo $add ;?>"</td>
                      </tr>
                      <tr>
                        <td>Village</td>
                        <td><input  type="text" id="fvillage" name="fvillage" placeholder="Enter the Village"  class="form-control" data-trigger="manual" onchange="isalpha(this)" value="<?php echo $vill ;?>"</td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Taluka</td>
                        <td><input  type="text" id="ftaluka" name="ftaluka" placeholder="Enter the Taluka"  class="form-control" data-trigger="manual" onchange="isalpha(this)" value="<?php echo $tal ;?>"</td>
                      </tr>
                        <tr>
                        <td>District</td>
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
                        <td><select class="form-control" name="fdistrict"  onChange="showState(this);">
                                            <option value=""> --Select--</option>
                                            <?php foreach ($results as $rs) { ?>
                                            <option value="<?php echo $rs["Did"];?>"<?php ($rs["District"]==$rs["Did"])?"selected":""?>><?php echo $rs["Dname"]; ?></option>
                                            <?php } ?>
                                        </select></td>
                      </tr>
                      <tr>
                        <td>State</td>
                        <td><select id="fstat" name="fstat" class="form-control">
                   
                 <option value="Gujarat"<?php ($rs["stat"]=="Gujarat")?"selected":""?>>Gujarat</option>
                  <option value="Rajasthan"<?php ($rs["stat"]=="Rajasthan")?"selected":""?>>Rajasthan</option>
                   <option value="Maharastra"<?php ($rs["stat"]=="Maharastra")?"selected":""?>>Maharastra</option>
                    <option value="Delhi"<?php ($rs["stat"]=="Delhi")?"selected":""?>>Delhi</option>
                     <option value="MadhyaPradesh"<?php ($rs["stat"]=="Elected")?"selected":""?>>MadhyaPradesh</option>
                   
                  
            </select></td>
                      </tr>
                      
                        
                          <tr>
                        <td>Pincode</td>
                        <td><input  type="text" id="fpin" name="fpin" placeholder="Enter the pincode"  class="form-control" data-trigger="manual" onchange="pincode(this)" value="<?php echo $pin ;?>"</td>
                      </tr>
                           
                          

                          <tr>
                        <td>Email</td>
                        <td><input  type="text" id="femail" name="femail" placeholder="Enter the Email"  class="form-control" data-trigger="manual" onchange="email(this)" value="<?php echo $email ;?>"</td>
                      </tr>
                      <tr>
                      <td colspan="2"><button type="submit" id="us1" name="us1" class="btn btn-primary" >Update</button></td>
                      </tr>
                     
                    </tbody>
                  </table>
                  </form>

                  
                
              </div>
            </div>
                
                 
          </div>

