
 <?php require"connect.php";?>
<?php
session_start();
        
                        $aa=$_SESSION['user'];
                        $c="select Place from t_details where Username='".$aa."'";
                             $rf=mysql_query($c);
                               while ($row=mysql_fetch_assoc($rf))
                               {
                                $ddd=$row["Place"];
                               }

?>
<div class="container">

      <form role="form" action="apupdate.php?id=<?php echo $id ?>"  method="post" id="apmcregi" class="form-horizontal">
                <?php
                if (isset($_GET["msg"]))
                {
                  echo"<div class='alert alert-danger' role='alert' style='width=20%
                      background: #dddddd;border-radius:15px;font-size:20px;vertical-align:center; text-align: center;''>";
                  echo "<b>This Id  Already Registered";
                  echo"</div>";
                }
                ?>
      <div align="center">
<legend >General Information</legend>
</div>    <div class="form-group">
        <label class="col-md-4 control-label" for="Traders name">Place</label>  
          <div class="col-md-4    ">
         <input  type="text" id="applace" name="applace" placeholder="Enter the Place name"  class="form-control" onchange="isalpha(this)" value="<?php echo $rrs["ap_place"]?>">
    
    </div>
</div>
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
            <label class="col-md-4 control-label" for="select district">Select District</label>  
                    <div class="col-md-4">
                 <select class="form-control" name="dist" >
                                            <op
                                            <?php foreach ($results as $rs) { ?>
                                            <option value= <?php" echo $rs["Did"]" ($rrs["ap_dist"]=="echo $rs["Did"]")?"selected":""?><?php echo $rs["Dname"]; ?></option>
                                            <?php } ?>
                                        </select>
      </div>
</div>



    <div class="form-group">
        <label class="col-md-4 control-label" for="Traders Address">  Full Postal Address</label>  
        <div class="col-md-4">
        <input type="text" id="apadress" name="apadress" placeholder="EnterFull Postal the Address" class="form-control input-md" type="text" value="<?php echo $rrs["ap_add"]?>">
    </div>
</div>

    
    <div class="form-group">
        <label class="col-md-4 control-label" for="Traders village">Year Of Establishment </label>  
          <div class="col-md-4">
         <input  type="text" id="apesyear" name="apesyear" placeholder="Year Of Establishment" class="form-control" value="<?php echo $rrs["ap_place"]?>">
         </div>
    
    </div>


     


 
<?php
	include "footer.php";

?>