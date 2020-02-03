<?php

$url=current_url(); 
$this->session->set_userdata("url",$url);
?>


<!DOCTYPE HTML>
<html>  
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">

    
    <title>Cart Page - IPAE</title>
     <link rel="icon" type="image/png"   href="<?php echo base_url();?>assests/img/favicon.png" />

    <!-- CSS -->
    <link href="<?php echo base_url();?>assests/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url();?>assests/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assests/css/bootsnav.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assests/css/style.css" rel="stylesheet">
     <link href="<?php echo base_url();?>assests/css/bootstrap.css" rel="stylesheet">
    
    
    
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


 ?>

    <div class="clearfix"></div>
     
      <div class="pld">
         <!--Cart Page Area Start-->
         <div class="shopping-cart-area section-padding">
            <div class="container">
            <?php if ($this->session->flashdata('success')) { ?>
            <div class="alert alert-success text-center"> 
            <?= $this->session->flashdata('success') ?> </div>
            <?php } ?>
             <div class="row">
			  <div class="col-md-12">&nbsp;
			  <span class="error1"><span>
			   </div >
			  </div >
               <div class="row">
                  <div class="col-md-12">
                     <div class="wishlist-table-area table-responsive">
					 
                        <table class="table-bordered">
                           <thead> 
						   <tr><td colspan="7">
						   </td>
                              </tr>
                              <tr>
                              <th class="product-remove2">S. No </th>
                                 
                                 <th class="product-image">Product Name</th>
                                 <th class="product-image">Product Image</th>
                                 <!--  <th class="product-edit" style="display:none;">Edit</th> -->
                           <th class="product-quantity">Quantity</th>  
                                 <th class="product-unit-price">Unit Price</th>
                                 
                             <th class="product-subtotal">Total</th>
                                 <th class="product-remove">Remove</th>
                              </tr>
                           </thead>
                           <tbody>

     <?php  $i=1; $grand_total=0; $outStock=0;foreach($this->cart->contents() as $row):?>
<?php
$stock = getproductstock($row['id']);
$product = getproductdetail($row['id']);

?>


  <tr>


                               <td class="product-remove2"><?php echo $i++;?></td>
                               <td class="product-image"><?php echo $row['name'];?><small><?php if($row['part_number']!='') { ?><br>Part Number : <?php echo $row['part_number'];?><?php } ?><br>
                               <?php if($row['upc']!='') { ?>UPC/EAN :  <?php echo $row['upc'];?><?php } ?> 
							   <br>
							   <?php
          
               if($product['launchdate']=='0000-00-00')
               {
                $stockMessage = getStockMessage($row['stock']);
                echo '<span style="color:green;">'.$stockMessage['message']."</span>";       
               }
               else               
               {
               ?><span style="color:red;">Delivery by
			   <?php 
                 echo  date('d.m',date(strtotime("+0 day", strtotime($product['launchdate']))));?>
                  <?php   if($row['stock'] >="10") {  echo "Available"; } else { if($row['stock'] <= "0") { echo "Out of stock"; $outStock=$outStock+1;
				  
				  } else { echo "Available unit : ".$row['stock']; } }  ?><?php 
               }
         ?></span></small></td>
                               <td class="product-image"><img src="<?php echo base_url();?><?php echo $row['img'];?>" style="width:50px; height:50px;" alt="<?php echo $row['name'];?>" title="<?php echo $row['name'];?>"></td>
                                 <td class="product-remove2"><?php echo $row['qty'];?></td>
                                 <td class="product-unit-price">AED <?php echo $row['price'];?></td>
                                  <td class="product-unit-price">AED <?php echo $row['qty']*$row['price'];?></td>
                               <td class="product-remove">
                                    <a href="<?php echo base_url();?>ipae/cart_remove/<?php echo $row['rowid'];?>" onclick="return confirm('Do you want to delete?');">
                                    <i class="fa fa-trash-o"></i>
                                    </a>
                                 </td>
                              </tr>





 <?php   $subtotal=$row['price']*$row['qty']; ?><?php $grand_total = $grand_total + $subtotal;?>  

                               <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                              <script type="text/javascript">
          /*                        $(document).ready(function(){

     $('#plus_<?php echo $row['id']; ?>').click(function(){

        var value = $('#qty_<?php echo $row['id']; ?>').val();
        var inc_val = parseInt(value) + 1;
        if(inc_val > <?php echo $stock['stock']; ?>){
          alert('qty can not be greater than <?php echo $stock['stock']; ?>');
          return false;
        }

          else if(inc_val > 2){
          alert('Quantity can not be greater than 2');
          return false;
        }
        
        $('#qty_<?php echo $row['id']; ?>').val(inc_val);
     });

     $('#minus_<?php echo $row['id']; ?>').click(function(){

        var value = $('#qty_<?php echo $row['id']; ?>').val();
        if(value != 1){
            var inc_val = parseInt(value) - 1;
            $('#qty_<?php echo $row['id']; ?>').val(inc_val);
        }
        
       
     });


  });*/
                              </script>
<script type="text/javascript">
      
$(document).ready(function(){
    $("#qty_<?php echo $row['rowid'];?>").change(function(){
      var qty = $(this).val();
      var row_id = $("#qty_<?php echo $row['rowid'];?>").attr("rel1");
      var price = $("#qty_<?php echo $row['rowid'];?>").attr("rel2");
     
      $.ajax({
        url:'<?php echo base_url("ipae/update_card")?>',
        type:"post",
        data:{row_id:row_id,qty:qty,price:price},
        success:function(response)
        {
           var updated_subtotal = JSON.parse(response);
           $("#sub_<?php echo $row['rowid'] ?>").text("AED: "+updated_subtotal.subtotal);
           $("#grand_total").text("AED: "+updated_subtotal.grand_total);
        }

      });

    })
});
  



    </script> 


                            <?php endforeach; ?>




                         
                           </tbody>
                        </table>
                     </div>
                     <div class="shopingcart-bottom-area">
                     <a class="right-shoping-cart btn-primary" href="<?php echo base_url();?>ipae/cart_removeall" onclick="return confirm('Do you want to clear the shopping cart?');">CLEAR SHOPPING CART</a>
                        <div class="shopingcart-bottom-area pull-right">
                   <a class="left-shoping-cart btn-primary" href="<?= base_url();?>">CONTINUE SHOPPING</a>
                         <!--   <a class="right-shoping-cart" href="product-checkout840e.html?ref=designcollection">UPDATE SHOPPING CART</a> -->
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!--Cart Page Area End-->
         <!-- Discount Area Start -->
         <div class="discount-area">
            <div class="container">
               <div class="row">
                  <div class="col-md-6 col-sm-6">
                     
                  </div>
                  <div class="col-md-6 col-sm-6">
                     <div class="subtotal-main-area">
                       <!--  <div class="subtotal-area">
                          <h2>SUBTOTAL<span ><?php echo $grand_total;?> <small>AED</small></span></h2>
                       </div> -->
                        <div class="subtotal-area">
                           <h2>GRAND TOTAL<span id="grand_total"><?php echo $grand_total;?> <small>AED</small></span></h2>
                        </div>
						
						<?php if($outStock==0){?>
						<a id="hrefCheck"  class="btn-primary" href="<?= base_url()?>checkout">CHECKOUT</a>	
					    <?php }else{?>
                         <a id="hrefCheck" class="btn-primary">CHECKOUT</a>
						<?php } ?>
						
                       
                       <!--  <p>Checkout With Multiple Addresses</p> -->
                     </div>
                  </div>
               </div>
            </div>

         </div>
         <!-- Discount Area End -->
      </div>	
      <br>
	<!--footer-->


<input type="hidden" name="outStock" id="outStock" value="<?php echo $outStock;?>">

<?php include("footer.php");?>
  <script type="text/javascript" >
  
  $(document).on("click", "#hrefCheck", function()
  {
	var outStock=$('#outStock').val();
	if(outStock>0){
	$(".error1").html('<span class=error1 style="color:red">Some itemes are out of stock, please remove item.</span>');  	
	}
	
  });
  </script>

 
    
	<!-- START JAVASCRIPT -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assests/js/bootstrap.min.js"></script>
    
    <!-- Bootsnavs -->
    <script src="<?php echo base_url();?>assests/js/bootsnav.js"></script>

</body>
</html>
