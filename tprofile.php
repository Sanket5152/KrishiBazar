<?php
include"thead.php";
include"connect.php";
$f="select Name,Address,Place,District,State,Pincode,Phone,Email from t_details where Username='".$_SESSION['user']."'";

         $rf=mysql_query($f);        while ($rs=mysql_fetch_assoc($rf))
             {
                $name=$rs["Name"];
                $add=$rs["Address"];
                $p=$rs["Place"];
              $pin=$rs["Pincode"];
                $dist=$rs["District"];
                /*$tt="select Dname from district where Did=$dist";
                $ttf=mysql_query($tt);
                while ($ttm=mysql_fetch_assoc($ttf)) {
                  $dname=$ttm["Dname"];
                  # code...
                }*/
                
                  $stat=$rs["State"];
                    $phone=$rs["Phone"];
                    $email=$rs["Email"];
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
              <h3 class="panel-title">Trader Profile Info</h3>
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
                        <td>District</td>
                        <td><?php echo $dist;?></td>
                      </tr>
                      <tr>
                        <td>Apmc Name</td>
                        <td><?php echo $p ;?></td>
                      </tr>
                      <tr>
                        <td>State</td>
                        <td><?php echo $stat ;?></td>
                      </tr>
                      <tr>
                        <td>Pincode</td>
                        <td><?php echo $pin ;?></td>
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
                        		
                            <a href="tchangepass.php" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a><label>Change Password</label>
                            
                        </span>
                        
                        <span class="pull-right">
                        		<label>EDIT</label>
                            <a href="tprofileedit.php" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                            
                        </span>
                    </div>
            
          </div>
          </div></div></div></div>

<?php
include"footer.php";
?>		