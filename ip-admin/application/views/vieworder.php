<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AI-AE ADMIN | Admin Details</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url();?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url();?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url();?>assets/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="<?php echo base_url();?>assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url();?>assets/build/css/custom.min.css" rel="stylesheet">

     <style>
    .invoice-box {
    max-width: 100%;
    margin: auto;
    padding: 30px;
    border: 1px solid #eee;
    box-shadow: 0 0 10px rgba(0, 0, 0, .15);
    font-size: 16px;
    line-height: 24px;
    font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    color: #555;
    background-color: #fff;
    margin-left: 230px;
    }
    
    .invoice-box table{
        width:100%;
        line-height:inherit;
        text-align:left;
    }
    
    .invoice-box table td{
        padding:5px;
        vertical-align:top;
    }
    
    .invoice-box table tr td:nth-child(2){
        text-align:right;
    }
    
    .invoice-box table tr.top table td{
        padding-bottom:20px;
    }
    
    .invoice-box table tr.top table td.title{
        font-size:45px;
        line-height:45px;
        color:#333;
    }
    
    .invoice-box table tr.information table td{
        padding-bottom:40px;
    }
    
    .invoice-box table tr.heading td{
        background:#eee;
        border-bottom:1px solid #ddd;
        font-weight:bold;
    }
    
    .invoice-box table tr.details td{
        padding-bottom:20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom:1px solid #eee;
    }
    
    .invoice-box table tr.item.last td{
        border-bottom:none;
    }
    
    .invoice-box table tr.total td:nth-child(2){
        border-top:2px solid #eee;
        font-weight:bold;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td{
            width:100%;
            display:block;
            text-align:center;
        }
        
        .invoice-box table tr.information table td{
            width:100%;
            display:block;
            text-align:center;
        }
    }



    </style>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <?php include("common/sidebar.php");?>

        <!-- top navigation -->
        <?php include("common/header.php");?>
        <!-- /top navigation -->

  <div style="margin-top: -8px;
    margin-right: 150px;" class="pull-right"><a href="#" target="_blank" data-toggle="tooltip" title="" class="btn btn-info" data-original-title="Print Invoice" style="
    margin: 10px -83px 7px 7px;
"><i class="fa fa-print"></i> <input type="button" onclick="printDiv()" value="print"/></a> </div>


    </div>

          <!-- page content -->


       <div class="invoice-box" >
       <div >


   <div class='topheader' style="background-color:#000;height:auto;"><img src='http://www.ip-ae.com/assests/img/logo1.png' style='
   margin: 3px 13px 13px 6px;'>
   <div class="contact" style="color:#fff;margin-left:10px;"></div></div>


 
  
<div id="print-content" class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-info-circle"></i>  <?php echo $order['0']->order_number;?></h3>
      </div>
      <div class="panel-body">
        <table class="table table-bordered">
          <thead>
            <tr>
              <td style="width: 50%;" class="text-left"></td>
                            <td style="width: 50%;" class="text-left"><b>Shipping Adress</b>                </td>

            </tr>
          </thead>
          <tbody>
            <tr>

              <td class="text-left"><b>Invoice #:</b> <?php echo $order['0']->order_number;?><br><b>  Created date:</b> <?php echo $order['0']->order_date;?><br><b> Payment Method :</b> <?php echo $order['0']->payment_method;?><br>
<b> Payment Status:</b> <?php $i=$order['0']->payment_status;

                              if($i == '0') { echo "Success"; } else { echo "Cancelled"; }?><br>
</td>


                            <td class="text-left"><b><?php echo $order['0']->customer_name;?></b><br><?php echo $order['0']->shipping_address;?><br>
                            <?php echo $order['0']->shipping_city;?><br><?php echo $order['0']->shipping_state;?><br><?php echo $order['0']->shipping_country;?><br></td>
                          </tr>
          </tbody>
        </table>
        <table class="table table-bordered">
          <thead>
            <tr>
              <td class="text-left">Product</td>
             <!--  <td class="text-left">Model</td> -->
              <td class="text-right">Quantity</td>
              <td class="text-right">Unit Price</td>
              <td class="text-right">Cod Charge</td>
              <td class="text-right">Sub Total</td>
            </tr>
          </thead>
          <tbody>
            <?php $total_sum=0; ?> 
            <?php foreach($order as $row):?>
                        <tr>
              <td class="text-left"><a href="#"><?php echo $row->product_name;?></a>
                </td>
              <!-- <td class="text-left">MN912AE/A</td> -->
              <td class="text-right"><?php echo $row->order_quantity;?></td>
              <td class="text-right"><?php echo $row->price;?></td>
<td class="text-right"><?php echo $row->order_quantity;?></td>
              <td class="text-right"><?php echo $row->subtotal;?></td>
            </tr>
            <?php
          
           $total_sum+=$row->subtotal+$row->order_quantity;

          ?>
          <?php endforeach;?>

                                                

                        <tr>
<td></td>
              <td colspan="3" class="text-right">Total</td>
              <td class="text-right"> <?php echo $total_sum;?></td>
            </tr>



                      </tbody>
        </table>
              </div>
              <h4 style="text-align: right;color: #000">Office No. 303,<br>
Ali Rashid Alabbar Al Marar, Deira,<br>
P.O. Box: 1272,<br>
Dubai-United Arab Emirates<br>
Email: namangeneraltradingllc@gmail.com <br>
Contact: +00971 5 44629333</h4>
    </div>

    </div>

<br>
<br>
<a href="<?php echo base_url();?>ip_admin/display_Order/"><button class="btn btn-primary">BackToOrder</button></a>
<br>
<br>


   <!--  <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-comment-o"></i> Order History</h3>
      </div>
      <div class="panel-body">
        
        <div class="tab-content">
          <div class="tab-pane active" id="tab-history">
            <div id="history">
    <table class="table table-bordered">
  <thead>
    <tr>
      <td class="text-left">Date Added</td>
     
      <td class="text-left">Status</td>
    </tr>
  </thead>
  <tbody>
            <tr>
      <td class="text-left">31/07/2017</td>
      
      <td class="text-left">Complete</td>
    </tr>
        
          </tbody>
</table>
<div class="row">
  <div class="col-sm-6 text-left"></div>
  <div class="col-sm-6 text-right">Showing 1 to 2 of 2 (1 Pages)</div>
</div>
</div> -->
            <br>
<fieldset>
  <legend>Update Order History</legend>
    <form class="form-horizontal" method="post" <?php echo form_open_multipart('ip_admin/update_order_status')?>
    <div class="form-group">
      <label class="col-sm-2 control-label" for="input-order-status">Order Status</label>
      <div class="col-sm-10">
   <select name="Status" id="input-order-status" class="form-control">

<option value="1">Canceled</option>
<option value="2" selected="selected">Complete</option>
<option value="3">Placed</option>
<option value="4">process</option>

</select>
    </div>
    </div>
   
 
</fieldset>
            <div class="text-right">

  <input type="hidden" value="<?php echo $order['0']->order_number;?>" name="id">
  <input type="submit" name="" value="add history">
   <!-- <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-plus-circle"></i> Add History </a> -->
            </div>
             </form>
          </div>
      </div>
      </div>
    </div>

    </div> 

        <!-- /page content -->

        <!-- footer content -->
       <?php include("common/footer.php");?>
        <!-- /footer content -->
      </div>

    <!-- jQuery -->
    <script src="<?php echo base_url();?>assets/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url();?>assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url();?>assets/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url();?>assets/vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url();?>assets/vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="<?php echo base_url();?>assets/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/jszip/dist/jszip.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url();?>assets/build/js/custom.min.js"></script>

    <script>
  
function doconfirm()
  {
  raj=confirm("are you sure to delete the permanently");
  if(raj!=true)
  {
    return false;
  }
}

</script>



<script>
  
  function printDiv()
{
  var divToPrint = document.getElementById('print-content');
 
 var popupWin = window.open('', '_blank', 'width=1200,height=600');
 popupWin.document.open();
 popupWin.document.write('<html><head><h2 style="margin-left:301px;"> Invoice</h2>');

 popupWin.document.write('</html></head>');

 popupWin.document.write('<html><head> <link href="<?php echo base_url();?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"></head><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
}
</script>

  </body>
</html>