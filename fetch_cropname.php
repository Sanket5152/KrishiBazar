<?php


require("configure.php");
$type_id = ($_REQUEST["country_id"] <> "") ? trim($_REQUEST["country_id"]) : "";
if ($type_id <> "") {
    $sql = "SELECT * FROM crop WHERE type_id = :cid ORDER BY crop_name";
    try {
        $stmt = $DB->prepare($sql);
        $stmt->bindValue(":cid", trim($type_id));
        $stmt->execute();
        $results = $stmt->fetchAll();
    } catch (Exception $ex) {
        echo($ex->getMessage());
    }
    if (count($results) > 0) {
        ?>
        <label for="Croptype" class="col-md-4 control-label" style="text-align: right; padding-right: 40px;padding-bottom: 20px;" >Crop Name:</label> 
         <div class="col-sm-6">
            <select name="crop" onchange="showCity(this);" class="form-control" required>
                <option value="">--Select--</option>
                <?php foreach ($results as $rs) { ?>
                    <option value="<?php echo $rs["crop_id"]; ?>"><?php echo $rs["crop_name"]; ?></option>
                <?php } ?>
            </select>
            </div>
        <?php
    }
}
?>