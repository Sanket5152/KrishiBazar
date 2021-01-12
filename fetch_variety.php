<?php


require("configure.php");
$state_id = ($_REQUEST["state_id"] <> "") ? trim($_REQUEST["state_id"]) : "";
if ($state_id <> "") {
    $sql = "SELECT * FROM variety WHERE crop_id = :sid ORDER BY var_name";
    try {
        $stmt = $DB->prepare($sql);
        $stmt->bindValue(":sid", trim($state_id));
        $stmt->execute();
        $results = $stmt->fetchAll();
    } catch (Exception $ex) {
        echo($ex->getMessage());
    }
     if (count($results) > 0) {
        ?>
       <label for="Croptype"  class="col-md-4 control-label" style="text-align: right; padding-right: 40px;padding-bottom: 20px;">Crop Variety:</label> 
         <div class="col-sm-6">
            <select name="var" name="box" class="form-control" required>
                <option value="">--Select--</option>
                <?php foreach ($results as $rs) { ?>
                    <option value="<?php echo $rs["var_id"]; ?>"><?php echo $rs["var_name"]; ?></option>
                <?php } ?>
                
            </select>
            </div>
        <?php
    }
}
?>