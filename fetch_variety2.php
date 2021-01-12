<?php

session_start();
require("configure.php");
$state_id = ($_REQUEST["state_id"] <> "") ? trim($_REQUEST["state_id"]) : "";
if ($state_id <> "") {
     $sql="select distinct var_name,var_id from m_price WHERE crop_id = :sid order by var_name";
   // $sql = "SELECT * FROM variety WHERE crop_id = :sid ORDER BY var_name";
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
       <label for="Croptype">પાક ની જાત:</label> 
            <select name="var" name="box" class="form-control">
                <option value="">કોઈ પણ એક પસંદ કરો.</option>
                <?php foreach ($results as $rs) { ?>
                    <option value="<?php echo $rs["var_id"]; ?>"><?php echo $rs["var_name"]; ?></option>
                <?php } ?>
                
            </select>
        <?php
    }
}
?>