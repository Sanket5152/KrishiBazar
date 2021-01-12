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
						set_include_path(get_include_path() . PATH_SEPARATOR . 'Classes/');
include 'PHPExcel/IOFactory.php';

      
    // Get File extension eg. 'xlsx' to check file is excel sheet
    $pathinfo = pathinfo($_FILES["file"]["name"]);
     
    // check file has extension xlsx, xls and also check
    // file is not empty

         
        // Temporary file name
        $inputFileName = $_FILES['file']['tmp_name'];
 

try {
	$objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
} catch(Exception $e) {
	die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
}


$allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
$arrayCount = count($allDataInSheet);  // Here get total count of row in that Excel sheet


for($i=2;$i<=$arrayCount;$i++){
$userName = trim($allDataInSheet[$i]["A"]);
$userMobile = trim($allDataInSheet[$i]["H"]);
$abc = trim($allDataInSheet[$i]["G"]);




 
$insertTable= mysql_query("insert into ap_price(date,ap_id,ap_name,cmd_name,Max_Price,Min_Price) values('$date','$abb','$ab','".$userName."', '".$userMobile."', '".$abc."');");




}

 ?>