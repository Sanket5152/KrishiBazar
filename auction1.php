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

                            date_default_timezone_set ("Asia/Calcutta");
                            $date=date("d/m/Y", time());
             $type=trim($_POST['type']);
               // echo $type."<br/>";
                $crop=trim($_POST['crop']);
               // echo $crop."<br/>";
                $var=$_POST['var'];
               // echo $var."<br/>";
                $a=trim($_POST['price']);
        
                $apmc=$_POST["apmc"];
                
                 $f="select Recid,Name from f_details where phone=".$_SESSION['mob']."";
                $rf=mysql_query($f);
                while ($rs=mysql_fetch_assoc($rf))
                 {
                    $ab=$rs["Recid"];
                    $fname=$rs["Name"];
    # code...
                }   

                $qry="select type_name from type where type_Id='$type'";
                               // echo $qry;
                mysql_query("set character_set_results='utf8'");
                $rs=mysql_query($qry);
                while($rec=mysql_fetch_assoc($rs))
                {
                    $tn=$rec["type_name"];
                  //  echo $tn."<br/>";
                }
                $qry1="select crop_name from crop where crop_id='".$_POST['crop']."'";
                $rs=mysql_query($qry1);
                while($rec=mysql_fetch_assoc($rs))
                {
                    $cn=$rec["crop_name"];
                    //echo $cn."<br/>";
                }
                $qry2="select var_name from variety where var_id='".$_POST['var']."'";
                $rs=mysql_query($qry2);
                while($rec=mysql_fetch_assoc($rs))
                {
                    $vn=$rec["var_name"];
                    //echo $vn."<br/>";
                }
                $qry3="insert into f_product(image,f_id,date,type_Id,crop_id,var_id,type_name,crop_name,var_name,ap_name) values('$dstfileA','$ab','$date','$type','$crop','$var','$tn','$cn','$vn','$apmc')";
                


                $rs=mysql_query($qry3);
                //$qry4="insert into bids(f_id,f_name,date,type_Id,crop_id,var_id,type_name,crop_name,var_name,ap_id,qty) values('$ab','$fname','$date','$type','$crop','$var','$tn','$cn','$vn','$apmc','$a')";
                //echo $qry3;
                //echo $qry3;
                //mysql_query($qry4);


            if($rs) {

                 header("Location:auction.php?msg=1");
            }
             else
             {
                //    echo mysql_error();
                header("Location: auction.php?msg1=1");
              } 
              
              }
             ?>  