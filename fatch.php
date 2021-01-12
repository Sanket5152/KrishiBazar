 <?php
 include"connect.php";
                  if(isset($_POST["s1"]))
                  {
                    $price=$_POST["price"];
                    $commodity=$_POST["category"];
                    $stat=$_POST["stat"];
                    $dist=$_POST["dist"];
                    $place=$_POST["place"];

                  echo"<iframe src='http://www.agmarknet.nic.in/agnew/NationalBEnglish/CommodityWiseDailyReport.aspx?ss=2&&drpDwnYear='$price'&&ddlCommodity='$commodity'&&ddlState='$stat'&&ddlDistrict='$dist'&&ddlMarket='$place' width=1000px height=1000px</iframe>";  
                }
                ?>