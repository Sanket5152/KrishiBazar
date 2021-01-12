<?php


require("configure.php");
$place= ($_REQUEST["country_id"] <> "") ? trim($_REQUEST["country_id"]) : "";
if ($place <> "") {
    $sql = "SELECT * FROM apmc_details WHERE ap_dist = :cid ORDER BY ap_place";
    try {
        $stmt = $DB->prepare($sql);
        $stmt->bindValue(":cid", trim($place));
        $stmt->execute();
        $results = $stmt->fetchAll();
    } catch (Exception $ex) {
        echo($ex->getMessage());
    }
    if (count($results) > 0) {
        ?>
        <label  class="abc" style="vertical-align:center;"" > APMC</label> 
         <div class="col-sm-12">
            <select name="apmc"  class="form-control" >
                <option value="">--Select--</option>
                <?php foreach ($results as $rs) { ?>
                    <option value="<?php echo $rs["ap_id"]; ?>"><?php echo $rs["ap_place"]; ?></option>
                <?php } ?>
            </select>
            </div>
        <?php
    }
}
?>