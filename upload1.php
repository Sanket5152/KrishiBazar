<?php
include"aphead.php"; 
include"conn.php";
 $f="select ap_id,ap_place from apmc_details where ap_id=".$_SESSION['applace']."";
            $rf=mysql_query($f);
            while ($rs=mysql_fetch_assoc($rf))
             {
                $abb=$rs["ap_id"];
                $ab=$rs["ap_place"];
# code...
            }

                        date_default_timezone_set ("Asia/Calcutta");
                        $date=date("Y-m-d", time());

use Box\Spout\Reader\ReaderFactory;
use Box\Spout\Common\Type;
 
// Include Spout library
require_once 'library/spout-2.4.3/src/Spout/Autoloader/autoload.php';
 
// check file name is not empty
if (!empty($_FILES['file']['name'])) {
      
    // Get File extension eg. 'xlsx' to check file is excel sheet
    $pathinfo = pathinfo($_FILES["file"]["name"]);
     
    // check file has extension xlsx, xls and also check
    // file is not empty
   if (($pathinfo['extension'] == 'xlsx' || $pathinfo['extension'] == 'xls')
           && $_FILES['file']['size'] > 0 ) {
         
        // Temporary file name
        $inputFileName = $_FILES['file']['tmp_name'];
    
        // Read excel file by using ReadFactory object.
        $reader = ReaderFactory::create(Type::XLSX);
 
        // Open file
        $reader->open($inputFileName);
        $count = 1;
        $rows = array();
         
        // Number of sheet in excel file
        foreach ($reader->getSheetIterator() as $sheet) {
             
            // Number of Rows in Excel sheet
            foreach ($sheet->getRowIterator() as $row) {
 
                // It reads data after header. In the my excel sheet,
                // header is in the first row.
                if ($count > 1) {
 
                    // Data of excel sheet
                    $data['Market Center'] = $row[0];
                    $data['Maximum Price'] = $row[7];
                    $data['Minimum Price'] = $row[6];
                    
                     $insert="insert into ap_price(date,ap_id,ap_name,cmd_name,Max_Price,Min_Price) values('$date','$abb','$ab','".$row[0]."','".$row[7]."','".$row[6]."')";
                       //echo $insert; 
                        mysqli_query($conn,$insert);
                    // Push all data into array to be insert as
                    // batch into MySql database. 
                    array_push($rows, $data);
                }
                $count++;
            }
 
            // Print All data
           //    print_r($rows);
 
            // Now, here we can insert all data into database table.
 
        }
        echo"<div class='alert' role='alert' style='width=20%
                                        background: #dddddd;border-radius:15px;font-size:20px;vertical-align:center; text-align: center;''>";
                                    echo "<b>File Sucessfully Add</b>";
                                    echo"</div>";
 
        // Close excel file
        $reader->close();
        

    } else {
 
        
                echo"<div class='alert' role='alert' style='width=20%
                                        background: #dddddd;border-radius:15px;font-size:20px;vertical-align:center; text-align: center;''>";
                                    echo "<b>Please Select Valid Excel File</b>";
                                    echo"</div>";

    }
 
} else {
 
    //echo "Please Select Excel File";

        
                echo"<div class='alert' role='alert' style='width=20%
                                        background: #dddddd;border-radius:15px;font-size:20px;vertical-align:center; text-align: center;''>";
                                    echo "<b>Please Select Excel File</b>";
                                    echo"</div>";
     
}
?>  