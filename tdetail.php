<?php 
include "aphead.php";


$aa=$_SESSION["applace"];
 include_once"connect.php";
	$ary="select recid,Name,Address,Phone,Username,Email,Status from  t_details where place='$aa'";
	$rs=mysql_query($ary);
 $count1=0;
                  echo"<div class='container'>";
                  echo"<table  align=center  class='table table-hover'><form>";
                  echo"<tr class='danger'><th>No</th><th>Name</th><th>Address</th><th>Phone</th><th>Email</th><th>Username</th><th>Status</th><th>Approved</th><th>Unapproved</th></tr>";
                   while ($rec=mysql_fetch_assoc($rs))

                  {
                 $count1++;
                   

                   echo"<tr class='default'>";
                    echo"<td width=300px >$count1</td>";
                   echo"<td width=300px >".$rec["Name"]."</td>";
	echo"<td width=300px>".$rec["Address"]."</td>";
	echo"<td >".$rec["Phone"]."</td>";
	echo"<td width=200px>".$rec["Email"]."</td>";
	echo"<td width=100px align=center >".$rec["Username"]."</td>";
	echo"<td >".$rec["Status"]."</td>";

	
	?>
	<td width=30px align=center><A href=active.php?id=<?=$rec["recid"] ?>
		onclick="return confirm('Are You Sure?')">&#x270E;</A></td>
		
<?php		echo "<td width=30px align=center>
<A href=anactive.php?id=".$rec["recid"]." >&#x2718;</A></td>";
		echo "</tr>";
	
	

                  
                   echo"</tr></form>";
                 }
                 echo "</table>";
                 echo"</div>";
                 ?>

    <div id=abc style="padding-bottom: 150px;">          
 <?php include "footer.php";?>
	
	
