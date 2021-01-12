<?php
include"fhead.php";
include"connect.php";
$f="select Name,Address,Village,Taluka,District,State,Phone,Email from f_details where phone=".$_SESSION['mob']."";
            $rf=mysql_query($f);
            while ($rs=mysql_fetch_assoc($rf))
             {
                $name=$rs["Name"];
                $add=$rs["Address"];
                $vill=$rs["Village"];
                $tal=$rs["Taluka"];
                echo$dist=$rs["District"];
                  $stat=$rs["State"];
                    $phone=$rs["Phone"];
                    $email=$rs["Email"];
               
            }
                  $q="select Dname from district where Did=$dist";
            $qq=mysql_query($q);
              while ($rst=mysql_fetch_assoc($qq)) {
                $dis=$rst["Dname"];
                # code...
              }
           

?>
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


		<div class="container">
      <div class="row">
      <div align="center">
                        		<a href="indexf.php"><button type="button" class="btn btn-default btn-lg">
  <span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home
</button></a>
                        </div>
                        <br>
    
        <div class="col-xs-12 " >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Profile Info</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center">  </div>
                
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
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Farmer Name:</td>
                        <td><?php echo $name ;?></td>
                      </tr>
                      <tr>
                        <td>Address:</td>
                        <td><?php echo $add ;?></td>
                      </tr>
                      <tr>
                        <td>Village</td>
                        <td><?php echo $vill ;?></td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Taluka</td>
                        <td><?php echo $tal ;?></td>
                      </tr>
                        <tr>
                        <td>District</td>
                        <td><?php echo $dis ;?></td>
                      </tr>
                      <tr>
                        <td>State</td>
                        <td><?php echo $stat ;?></td>
                      </tr>
                      <tr>
                        
                        <td>Email</td>
                        <td><?php echo $email ;?></td>
                      </tr></td>
                      </tr>
                        <td>Phone Number</td>
                        <td><?php echo $phone ;?>
                        </td>
                           
                      </tr>
                     
                    </tbody>
                  </table>
                  
                
              </div>
            </div>
                 <div class="panel-footer">
                  <span class="pull-left">
                        		
                            <a href="fchangepass.php" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a><label>Change Password</label>
                            
                        </span>
                        
                        <span class="pull-right">
                        		<label>EDIT</label>
                            <a href="editproff.php" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                            
                        </span>
                    </div>
            
          </div>
          </div></div></div></div>

<?php
include"footer.php";
?>		