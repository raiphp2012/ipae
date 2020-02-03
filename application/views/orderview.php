<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="de">  <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">

    <title>Apple iphone</title>
     <link rel="icon" type="image/png"   href="<?php echo base_url();?>assests/img/favicon.png" />

    <!-- CSS -->
<!-- CSS -->
    <link href="<?php echo base_url();?>assests/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url();?>assests/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assests/css/bootsnav.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assests/css/style.css" rel="stylesheet">
     <link href="<?php echo base_url();?>assests/css/bootstrap.css" rel="stylesheet">
    
    
    <style type="text/css">
  .error{
    color: red;
   
  }

.error{
    color: red;
  }

  .card-contain>.img-card{
  max-width: 100%;
  
  -moz-transition: all 0.3s;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
} 
 .card-contain:hover img {
  -moz-transform: scale(1.1);
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
}


</style>
    
</head>
<body>     
        
    <!-- Start Navigation -->

  <?php 

if(!isset($this->session->userdata['logged_in']))
        {

          include("header.php");
        }
    else
        {
            include("user_header.php");
        }

$grandSubtotal=0;
$cash_on_tot=0;
$grandtotal=0;
$count=0;
if(count($content)){
	

foreach ($content as $row)
{
   $grandSubtotal=$grandSubtotal+$row->subtotal;
   if($row->payment_method==0){
	$cash_on_tot=$cash_on_tot+$row->product_quantity;   
   }
   
   $grandtotal=$grandSubtotal+$cash_on_tot;
   $count=$count+1;
 ?>
 <div>&nbsp;&nbsp; </div>
<div class="container">
<?php if($count==1){?>
<div class="row"> <table class="table table-bordered"><tbody><tr>
    <th colspan="2">&nbsp;&nbsp;Order Details:<?php  echo $row->order_number;?>
	</th>
	
	
  </tr>
  <tr><th colspan="2"><button type="button" onClick="window.location.href='<?php echo base_url().'account'; ?>'" class="btn btn-success" id="backButton" >< Back</button>
	</th></tr></tbody></table> </div>
<div class="row">
<div>&nbsp;&nbsp; </div>
  <div class="col-md-4">
  <div class="brdr">
  <table class="table table-bordered">
   
  <tbody>
   <tr>
    <th colspan="2">Customer Profile</th>
  </tr>
     <tr>
    <td>Name</td>
    <td><?php echo $row->name.' '.$row->last_name; ?></td>
  </tr>
 
    <tr>
    <td>Address</td>
    <td><?php echo $row->address; ?></td>
  </tr>
   <tr>
    <td>Phone</td>
    <td><?php echo $row->country.'-'.$row->contact; ?></td>
  </tr>
    <tr>
    <td>Email</td>
    <td><?php echo $row->email_id; ?></td>
  </tr>
   
  </tbody>
</table>
</div></div>
    
    <div class="col-md-4">
    <div class="brdr">
      <table class="table table-bordered">
 
  <tbody>
   <tr>
    <th colspan="2">Shipping Address</th>
  </tr>
     <tr>
    <td>Name</td>
    <td><?php echo $row->shipingName; ?></td>
  </tr>
 
    <tr>
    <td>Address</td>
    <td><?php echo $row->shipingAddress; ?></td>
  </tr>
   <tr>
    <td>Phone</td>
    <td><?php echo $row->country.'-'.$row->contact; ?></td>
  </tr>
    <tr>
    <td>Email</td>
    <td><?php echo $row->email_id; ?></td>
  </tr>
   
  </tbody>
</table>
    </div></div>
      <div class="col-md-4">
      <div class="brdr">
        <table class="table table-bordered">
 
  <tbody>
   <tr>
    <th>Order Date</th><td><?php echo $row->order_date; ?></td>
  </tr>
     <tr>
    <td>Payment Status</td>
    <td><?php if($row->payment_method=="1") { if($row->transcation_id!="") { echo $row->message."- " .$row->transcation_id; } else { echo "Not Received";}  } else { echo "Pending "; }?></td>
  </tr>
  <tr>
    <td>Payment amount</td>
    <td><?php echo $row->total_amt; ?></td>
  </tr>
    <tr>
    <td>Payment type</td>
    <td><?php if($row->payment_method=="1") { echo "Card/Online"; } else { echo "COD "; }?></td>
  </tr>
    <tr>
    <td>Payment Message</td>
    <td><?php echo $row->message; ?></td>
  </tr>
   
  </tbody>
</table>
      </div></div>
	 
</div>
<form role="form" method="post" action="http://www.ip-ae.com/ipae/order_list">


                              <input name="payment_method" id="payment_method" value="cod" type="hidden">
                              <input name="delivery_method" id="delivery_method" value="" type="hidden">
                              
                              <input name="shipping_address_id" id="shipping_address_id" value="13" type="hidden">
                              

                                 <div class="order-review" id="checkout-review">
                                    <div class="table-responsive" id="checkout-review-table-wrapper">
                                       <div class="table-responsive">
                                      <div class="row"> <table class="table table-bordered"><tbody>
									  <tr><tr><th colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;</th> </tr>
    <th colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;Order items Details</th>
  </tr></tbody></table> </div>
  
                                           <br>
                                          <table class="table table-hover table-inverse">
                                             <thead class="thead-inverse">
                                                <tr class="table-reverse">
                                                  <td class="text-center">S. No </td>
                                                  <th class="text-left">Product Name</th>
                                                  <th class="text-center">Product Image</th>
                                                  <th class="text-center">Quantity</th>  
                                                 <th class="text-center">Unit Price</th>
                                 
                                                 <th class="text-right">Total</th>
                                                </tr>
                                             </thead>

<?php }?>   
                                             <tbody>

                                           
                                                <tr>
                                                   <td class="text-center"><?php echo $count;?></td>
                                                   <td class="text-left"><?php echo $row->product_name; ?><small><br>Part Number : <?php echo $row->part_number; ?><br>
                               UPC/EAN :  <?php echo $row->upc; ?>/<?php echo $row->ean; ?></small></td>
                                                             <td class="text-center"><img src="<?php echo base_url();?><?php echo $row->product_image; ?>" style="width:50px; height:50px;" alt="<?php echo $row->product_name; ?>" title="<?php echo $row->product_name; ?>"></td>
                                                             
                                                   <td class="text-center"><?php echo $row->product_quantity; ?></td>
                                                   <td class="text-center">AED <?php echo $row->price; ?> </td>
                                                    
               <td class="text-right">AED <?php echo $row->subtotal; ?> 
              </td>
                                                </tr>

                                                                                              </tbody>
        <?php }?>	
		
                                             <tfoot>

                                              <tr id="shipping_rate">
                                                   <td class="text-right" colspan="5"><strong>Cash on Delivery Charge</strong></td>
                                                   <td class="text-right" id="flat_ship">AED <?php echo $cash_on_tot;?></td>
                                                </tr>

                                                <tr id="shipping_rate2">
                                                   <td class="text-right" colspan="5"><strong>Shipping Charge</strong></td>
                                                   <td class="text-right" id="flat_ship1">AED 0</td>
                                                </tr>
                                                <tr>
                                                   <td class="text-right" colspan="5"><strong>Grand Total</strong></td>
                                                   <td class="text-right" id="grandTotal2">AED <?php echo $grandtotal;?> </td>
                                                </tr>
                                             </tfoot>
		 <?php }?>	
                                          </table>
                                       </div>
                                    </div>
                            
                                 </div>
                                 </form>
</div>



 

 <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5970774421d83a55"></script> 
  
  
  <!--footer-->


 <?php include("footer.php");?>

    
  <!-- START JAVASCRIPT -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assests/js/bootstrap.min.js"></script>
    
    <!-- Bootsnavs -->
    <script src="<?php echo base_url();?>assests/js/bootsnav.js"></script>




</body>
</html>