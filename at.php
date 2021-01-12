
 <?php                    include "connect.php";
 

                  
                        $app_id=$_GET['id'];
                        $f="select app_id,pid,date,fid,fname,tid,tname,t_add,ap_id,type_name,crop_name,var_name,price,qty,Total from sell_approve where app_id=$app_id ";
                        
                        $count=0;
                        $rs1=mysql_query($f);
                        while ($rec=mysql_fetch_assoc($rs1)) {
                        		$count++;
	                          $tt=$rec['fid'];
                          $app_id=$rec['app_id'];
                          $date=$rec['date'];
                          $tn=$rec['tname'];
                          $tadd=$rec['t_add'];
                          $fname=$rec['fname'];
                          $typename=$rec['type_name'];

                          $cropname=$rec['crop_name'];
                          $varname=$rec['var_name'];
                          $price=$rec['price'];
                          $qty=$rec['qty'];
                          $total=$rec['Total'];

                                    $tt="select Village from f_details where Recid=$tt";
                                $rtt=mysql_query($tt);
                                while($rmt=mysql_fetch_assoc($rtt))
                                {
                                  $r=$rmt["Village"];
                                }
                                
             
                          # code...
                   }   

$html=" 
<style>
	div { font-size: 12pt; font-family: freeserif;  color: white;}
	body, p{ font-size: 10pt; font-family: freeserif;}
	h1 { font-size: 22pt; font-family: freeserif;color: green; }
h2 { font-size: 18pt; font-family: freeserif;color: Red; }

	h3 { font-size: 16pt; font-family: freeserif;color: black; }
	h4 { font-size: 25pt; font-family: freeserif;color: red; margin-left: 220; align:center; }
</style>

<h1 align=center>KRSHIBAZAR</h1> 
<h1 align=center>$reg</h1>
<table  align=center width=99% height=100%  border=1><thead> 
<tr>
<td colspan=6>
 <h3>$tn</h3><br>
 <h3>$tadd</h3>
 
</td>
<td>
<h3>Bill No:$app_id</h3> <br>
<h3>Date:$date</h3> 
</td>

</tr>
<tr>
<td colspan=5><h3>Farmer name : $fname
</h3></td>
<td colspan=2><h3> Village:$r</h3></td>
</tr>

<tr>
<th><h3 align=center>No</h3></th>
<th><h3 align=center>Type Name</h3></th>
<th><h3 align=center>Crop Name</h3></th>
<th><h3 align=center>Variety Name<h3></th>
<th><h3 align=center>Qty<h3></th> 
<th><h3 align=center>Price<h3></th> 
<th><h3 align=center>Total<h3 ></th> 
</tr>
</thead><tbody>
	  
		<tr>
    <td align=center>".$count."</td>
    
		<td align=center>".$typename."</td>
		<td align=center>".$cropname."</td> 	
		<td align=center>".$varname."</td> 	
		<td align=center>".$price."</td> 
		<td align=center>".$qty."</td> 
		<td align=center>".$total."</td> 
		
		
	</tr>
  <tr>
<td colspan=6 align=right>
<h3>Total Amount:</h3>
</td>
<td align=center><h2>".$total."</h2></td>
</tr>

		 	 
 }
     
	
	</body></table>";
  

//==============================================================
//==============================================================
//============================================================== 

include("mpdf/mpdf.php");

$mpdf=new mPDF(''); 

$stylesheet1 = file_get_contents('mpdf\examples\mpdfstyleA4.css');
$mpdf->WriteHTML($stylesheet1,1);
	//$mpdf->WriteHTML($html);
// LOAD a stylesheet
$stylesheet = file_get_contents('mpdf\examples\mpdfstyletables.css');
$mpdf->WriteHTML($stylesheet,1);	// The parameter 1 tells that this is css/style only and no body/html/text

$mpdf->WriteHTML($html);
$mpdf->Output(' record.pdf','I');
exit;



//==============================================================
//==============================================================
//==============================================================


?>