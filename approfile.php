<?php include"aphead.php";


	include"connect.php";


         $aa=$_SESSION["applace"];
           $qry="select * from apmc_details where ap_id='$aa'";
          
           $rs=mysql_query($qry);
           $rrs=mysql_fetch_assoc($rs);
         $id=$rrs["ap_id"];




              
?>


                        
                      
<div class=abc style="padding-left:20%;font-family:Arial;">

<table border=0		 width="70%" > 
<tr>
<td colspan="2" bgcolor="blue"><div align="center"><font color="white" size=5 ><b>General Information</b></font></div>		
</td>
</tr> 
<div> 	
<tr>
<td> <br> </td>
</tr>	
	
	<tr>

		  		<td align="right" width="40%"><font  size=4><b>Place:  </b></font>   </td>
		  		<td>&nbsp;&nbsp;<font  size=4><?php echo $rrs["ap_place"]?></font></td>
							
		</tr>
		<tr>
<td> <br> </td>
</tr>	

<tr>

	  		<td align="right" width="40%"><font  size=4><b>Full Postal Address:  </b></font>   </td>
	  		<td>&nbsp;&nbsp;<font  size=4><?php echo $rrs["ap_add"]?></font></td>
						
	</tr>
	<tr>
<td> <br> </td>
</tr>	
	
<tr>

	  		<td align="right" width="40%"><font  size=4><b>Year Of Establishment: </b></font>   </td>
	  		<td>&nbsp;&nbsp;<font  size=4><?php echo $rrs["ap_estayear"]?></font></td>
						
	</tr>	
	<tr>
<td> <br> </td>
</tr>	
 		<tr>
<td colspan="2" bgcolor="blue"><div align="center"><font color="white" size=5 ><b>Administration</b></font></div>		
</td>
</tr> 
<div> 	
<tr>
<td> <br> </td>
</tr>
<tr>

	  		<td align="right" width="40%"><font  size=4><b>Regulated/Unregulated :</b></font>   </td>
	  		<td>&nbsp;&nbsp;<font  size=4><?php echo $rrs["ap_regu"]?></font></td>
						
	</tr>	
	<tr>
<td> <br> </td>
</tr>	
 		
<tr>

	  		<td align="right" width="40%"><font  size=4><b>Name Of Market: </b></font>   </td>
	  		<td>&nbsp;&nbsp;<font  size=4><?php echo $rrs["ap_markname"]?></font></td>
						
	</tr>	
	<tr>
<td> <br> </td>
</tr>	
	
<tr>

	  		<td align="right" width="40%"><font  size=4><b>Mode Of Election APMC: </b></font>   </td>
	  		<td>&nbsp;&nbsp;<font  size=4><?php echo $rrs["ap_election"]?></font></td>
						
	</tr>	
	<tr>
<td> <br> </td>
</tr>	
	
<tr>

	  		<td align="right" width="40%"><font  size=4><b>Name Of Chairman/Administrator: </b></font>   </td>
	  		<td>&nbsp;&nbsp;<font  size=4><?php echo $rrs["ap_chairname"]?></font></td>
						
	</tr>	
	<tr>
<td> <br> </td>
</tr>	
 		<tr>

	  		<td align="right" width="40%"><font  size=4><b>ame Of Secretary: </b></font>   </td>
	  		<td>&nbsp;&nbsp;<font  size=4><?php echo $rrs["ap_secname"]?></font></td>
						
	</tr>	
	<tr>
<td> <br> </td>
</tr>
<tr>
<td colspan="2" bgcolor="blue"><div align="center"><font color="white" size=5 ><b>Market Charges</b></font></div>		
</td>
</tr> 
<div> 	
<tr>
<td> <br> </td>
</tr>	
<tr>

	  		<td align="right" width="40%"><font  size=4><b>Commission: </b></font>   </td>
	  		<td>&nbsp;&nbsp;<font  size=4><?php echo $rrs["ap_comm"]?></font></td>
						
	</tr>	
	<tr>
<td> <br> </td>
</tr>	<tr>

	  		<td align="right" width="40%"><font  size=4><b>Market Fee: </b></font>   </td>
	  		<td>&nbsp;&nbsp;<font  size=4><?php echo $rrs["ap_fee"]?></font></td>
						
	</tr>	
	<tr>
<td> <br> </td>
</tr>
<tr>
<td colspan="2" bgcolor="blue"><div align="center"><font color="white" size=5 ><b>Financial Position</b></font></div>		
</td>
</tr> 
<div> 	
<tr>
<td> <br> </td>
</tr>	
<tr>

	  		<td align="right" width="40%"><font  size=4><b>Annual Income: </b></font>   </td>
	  		<td>&nbsp;&nbsp;<font  size=4><?php echo $rrs["ap_ai"]?></font></td>
						
	</tr>	
	<tr>
<td> <br> </td>
</tr>	

<tr>

	  		<td align="right" width="40%"><font  size=4><b>Annual Expenditure: </b></font>   </td>
	  		<td>&nbsp;&nbsp;<font  size=4><?php echo $rrs["ap_ex"]?></font></td>
						
	</tr>	
	<tr>
<td> <br> </td>
</tr>	


<tr>

	  		<td align="right" width="40%"><font  size=4><b>Surplus/Deficit: </b></font>   </td>
	  		<td>&nbsp;&nbsp;<font  size=4><?php echo $rrs["ap_sur"]?></font></td>
						
	</tr>	
	<tr>
<td> <br> </td>
</tr>

	</table>
	</div>
</div>

	<div align="center">
                        		<a href="apedit1.php?id=<?php echo $id ?>"><button type="button" class="btn btn-default btn-lg">
  <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit Details
</button></a>
                        </div>
  
	
</div>
<br>
<?php include"footer.php";?>