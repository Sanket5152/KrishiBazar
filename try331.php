 <?php
 require"connect.php";
 session_start();
     $img=$_FILES["cphoto"]["name"];

    $print=strtoupper(substr($img,-4));
    //$dstfileA="product/"$print;
    echo $print;
                $dstfileA="product/".$img."";
                 move_uploaded_file($_FILES["cphoto"]["tmp_name"],$dstfileA);
                    if(isset($_POST['s1']))
       
     {

    //move_uploaded_file($_FILES["cphoto"]["tmp_name"],$dstfile);

                                           echo$qry3="insert into f_product(image,f_id,date,type_Id,crop_id,var_id,type_name,crop_name,var_name,ap_name) values('$dstfileA','$ab','$date','$type','$crop','$var','$tn','$cn','$vn','$apmc')";
                                       }

                 ?>