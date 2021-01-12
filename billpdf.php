
 <?php                    include "connect.php";
 

                  
                        $app_id=$_GET['id'];
                        $f="select app_id,pid,date,fid,fname,tid,tname,t_add,ap_id,type_name,crop_name,var_name,price,qty,Total from sell_approve where app_id=$app_id ";
                        
                        $count=0;
                        $rs1=mysql_query($f);
                        while ($rec=mysql_fetch_assoc($rs1)) {

                          $tt=$rec['fid'];
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

                     
$html = "
<style>
  div { font-size: 9pt; font-family: freeserif;  color: blue;}

                
    @import url(http://fonts.googleapis.com/css?family=Bree+Serif);
    body, h1, h2, h3, h4, h5, h6{
      font-family: 'Bree Serif', serif;
    }
    hr { 
      display: block;
      margin-top: 0.5em;
      margin-bottom: 0.5em;
      margin-left: auto;
      margin-right: auto;
      border-style: inset;
      border-width: 3px;
      color:black;
    }
  </style>
                        
          

  <div class='col-xs-3' ></div>
  <div class='container col-xs-6 >
    <div class=row'>
      <div class='col-xs-6'>
      
      </div>
      <div class='col-xs-12 text-right' >
        <h1 align=center'>KRISHI BAZAR</h1>
        
      </div>
      <div class=row>
        <div class='col-xs-12'> 
          <div class='span7'>
           <hr>
         </div>
       </div>
     </div>
   </div>
   <div class='row'>
     <div class='col-xs-12'>
      <!--<div class='panel panel-default'>
      <div class='panel-heading'>-->
      
       <!-- </div>
       <div class='panel-body'>-->
        <div class='col-xs-6 text-left'>
          <table class='table table'>
            <tr align='left>
              <td>
              ". $rec['tname']."><br>".
               $rec['t_add']."
             

              </td>
              
            
            </tr>
          </table>
        </div>
        <div class='col-xs-6 text-right'>
          <table class=table table'>
            <tr align='left'>
              <td>
            Bill No:
              </td>
              <td>
                 ". $rec['app_id']."
             
              </td>
            </tr>
            <tr align='left'>
              <td>
              Date:
             </td>
             <td>
                ". $rec['date']."
             
            </td>
          </tr > 
          
        </table>
      </div>
    <!--  </div>
  </div>-->
</div>
<div class='col-xs-2'></div>
</div>
<!-- / end client details section -->
<div class='row'>
  <div class='col-xs-13'> 
    <div class='span7'>
     <hr>
   </div>
 </div>
</div>
 <div class='row'>
     <div class='col-xs-12'>
      <!--<div class='panel panel-default'>
      <div class='panel-heading'>-->
      
       <!-- </div>
       <div class='panel-body'>-->
        <div class='col-xs-12 text-left'>
          <table class='table table'>
            <tr align='left'>
              <td>
             Name:".$rec['fname'].
"             

              </td>
              
              <td>
            Village Name:$r
             

              </td>

              
            
            </tr>
          </table>
        </div>
        
    <!--  </div>
  </div>-->
</div>
<table class='table table-bordered'>
    <tr>
      <th>
        <h4>No.</h4>
      </th>
      <th>
        <h4>Type Name</h4>
      </th>
      <th>
        <h4>Crop Name</h4>
      </th>
      <th>
        <h4>Variety Name</h4>
      </th>
       <th>
        <h4>Qty</h4>
      </th>
       <th>
        <h4>Price</h4>
      </th>
        <th>
        <h4>Total</h4>
      </th>
    </tr>
    <tr>
      <td>  $count 
             </td>
      <td> ". $rec['type_name']."
             </td>
      <td>  ". $rec['crop_name']."
             </td>
      <td>  ". $rec['var_name']."             </td>
      <td>  ". $rec['qty']."
             </td>
        <td>  ". $rec['price']."
             </td>
          <td> ". $rec['Total']."
                </td>
      
    </tr>
    
</table>
<div class='row'>
  <div class='col-xs-14'> 
    <div class='span7'>
     <hr>
   </div>
 </div>
</div>
<div class='row text-right'>
  <div class='col-xs-2 col-xs-offset-8'>
    <p>
     

      <b>Total:</b> <br>
       <b>Tax:</b> <br>
       <b>Total:</b> <br>
     
    </p>
  </div>
  <div class='col-xs-2'>
     <b>".$rec['Total']."</b> <br>
       <b></b> <br>
       <b>".$rec['Total']."</b> <br>
  </div>
</div>
<div class='row'>
  <div class='col-xs-14'> 
    <div class='span7'>
     <hr>
   </div>
 </div>
</div>
<?php }?>
<div class='col-xs-12'>
 <table class='table table-bordered'>
    <tr>
     <td align='center'> Thank For</td>
      
    </tr>
    
</table>
</div>
<div class='col-xs-2'>
</div>
<div class='row'>
  <div class='col-xs-14'> 
    <div class='span7'>
     <hr>
   </div>
 </div>
</div>
</div>

</div>";


include("mpdf/mpdf.php");

$mpdf=new mPDF(''); 

$stylesheet1 = file_get_contents('mpdf\examples\mpdfstyleA4.css');
$mpdf->WriteHTML($stylesheet1,1);
  //$mpdf->WriteHTML($html);
// LOAD a stylesheet
$stylesheet = file_get_contents('mpdf\examples\mpdfstyletables.css');
$mpdf->WriteHTML($stylesheet,1);  // The parameter 1 tells that this is css/style only and no body/html/text

$mpdf->WriteHTML($html);
$mpdf->Output('farmer record.pdf','I');
exit;
?>