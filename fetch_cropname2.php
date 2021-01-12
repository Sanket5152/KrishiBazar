<?php

session_start();
require("configure.php");
$type_id = ($_REQUEST["country_id"] <> "") ? trim($_REQUEST["country_id"]) : "";
if ($type_id <> "") {
    $sql="select distinct crop_name,crop_id from m_price WHERE type_id = :cid order by crop_name";
   // $sql = "SELECT * FROM crop WHERE type_id = :cid ORDER BY crop_name";
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
        <label for="Croptype">Crop Name:</label> 
            <select name="crop" onchange="showCity(this);" class="form-control" >
                <option value="">--Select--</option>
                <?php foreach ($results as $rs) { ?>
                    <option value="<?php echo $rs["crop_id"]; ?>"><?php echo $rs["crop_name"]; ?></option>
                <?php } ?>
            </select>
        <?php
    }
}
?>