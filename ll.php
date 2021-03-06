<?php
include "head.php";
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="text-xs-center">
              
                <font color=blue><b><h2 align=center>KRISHI BAZAR</h2></b>  </font>
            </div>
            <hr>
            <div class="row">
                <div class="col-xs-12 col-md-3 col-lg-3 float-xs-left">
                    <div class="card  height">
                        <div class="card-header">Trader Details</div>
                        
                    </div>
                </div>
                <div class="col-xs-12 col-md-3 col-lg-3">
                   
                </div>
                <div class="col-xs-12 col-md-3 col-lg-3">
                    
                </div>
                <div class="col-xs-12 col-md-3 col-lg-3 float-xs-right">
                    <div class="card  height">
                        <div class="card-header"><b>Bill No:</b></div>
                        <div class="card-header"><b>Date:</b></div>
                      
                    </div>
                </div>
              
            </div>

        </div>
    </div>
       <hr>
   
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <h3 class="text-xs-center"><strong>Order summary</strong></h3>
                </div>
                <div class="card-block">
                    <div class="table-responsive">
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <td><strong>Item Name</strong></td>
                                    <td class="text-xs-center"><strong>Item Price</strong></td>
                                    <td class="text-xs-center"><strong>Item Quantity</strong></td>
                                    <td class="text-xs-right"><strong>Total</strong></td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Samsung Galaxy S5</td>
                                    <td class="text-xs-center">$900</td>
                                    <td class="text-xs-center">1</td>
                                    <td class="text-xs-right">$900</td>
                                </tr>
                                <tr>
                                    <td>Samsung Galaxy S5 Extra Battery</td>
                                    <td class="text-xs-center">$30.00</td>
                                    <td class="text-xs-center">1</td>
                                    <td class="text-xs-right">$30.00</td>
                                </tr>
                                <tr>
                                    <td>Screen protector</td>
                                    <td class="text-xs-center">$7</td>
                                    <td class="text-xs-center">4</td>
                                    <td class="text-xs-right">$28</td>
                                </tr>
                                <tr>
                                    <td class="highrow"></td>
                                    <td class="highrow"></td>
                                    <td class="highrow text-xs-center"><strong>Subtotal</strong></td>
                                    <td class="highrow text-xs-right">$958.00</td>
                                </tr>
                                <tr>
                                    <td class="emptyrow"></td>
                                    <td class="emptyrow"></td>
                                    <td class="emptyrow text-xs-center"><strong>Shipping</strong></td>
                                    <td class="emptyrow text-xs-right">$20</td>
                                </tr>
                                <tr>
                                    <td class="emptyrow"><i class="fa fa-barcode iconbig"></i></td>
                                    <td class="emptyrow"></td>
                                    <td class="emptyrow text-xs-center"><strong>Total</strong></td>
                                    <td class="emptyrow text-xs-right">$978.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.height {
    min-height: 200px;
}

.icon {
    font-size: 47px;
    color: #5CB85C;
}

.iconbig {
    font-size: 77px;
    color: #5CB85C;
}

.table > tbody > tr > .emptyrow {
    border-top: none;
}

.table > thead > tr > .emptyrow {
    border-bottom: none;
}

.table > tbody > tr > .highrow {
    border-top: 3px solid;
}
</style>