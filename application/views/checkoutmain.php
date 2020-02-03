<?php
error_reporting(0);
$url=current_url(); 
 $this->session->set_userdata("url",$url);
$user_id=$this->session->userdata['logged_in']['id'];
$firstName=$this->session->userdata['logged_in']['name'];
$midName=$this->session->userdata['logged_in']['midName'];
$lastName=$this->session->userdata['logged_in']['lastName'];
$contact=$this->session->userdata['logged_in']['contact'];
$Email=$this->session->userdata['logged_in']['username'];
$update=$this->Ipae_model->getDatabyIdAddres($table="ipae_customer_address",$fname="customer_id",$user_id);
?>


<!DOCTYPE HTML <html>  
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">

    
    <title>Checkout - IPAE</title>
     <link rel="icon" type="image/png"   href="<?php echo base_url();?>assests/img/favicon.png" />

    <!-- CSS -->
    <link href="<?php echo base_url();?>assests/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url();?>assests/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assests/css/bootsnav.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assests/css/style.css" rel="stylesheet">
     <link href="<?php echo base_url();?>assests/css/bootstrap.css" rel="stylesheet">
    
    <style type="text/css">
      
        .error
        {
          color: red;
          font-weight: 700;
        }
        .from-row label{
              font-weight: bold !important ;
              color: #333 !important;
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

 ?>

 <?php

        $total=count($new_user_table);
        

 ?>

    <div class="clearfix"></div>

      <div class="pld" style="margin-bottom: 100px;">
         <!--Check Out Area Start-->
            <?php if ($this->session->flashdata('success')) { ?>
            <div id="alert" class="alert alert-success text-center"> 
            <?= $this->session->flashdata('success') ?></div>
            <?php } ?>
      <?php if ($this->session->flashdata('error')) { ?>
            <div class="alert alert-danger text-center"> 
            <?= $this->session->flashdata('error') ?> </div>
            <?php } ?>
        <div class="check-out-area">
            <div class="container">
            <div class="chrd"  ><b>CHECKOUT </b></div>
                                <form  name="order_list" role="form" method="post" action="<?php echo base_url();?>ipae/order_list">

  
               <div class="row">
                  

 <!--Check Box one-->                   


<div class="col-md-9 col-xs-12 col-sm-12">
  <div class="ae-card">
    <div class="ch"> <strong><i class="fa fa-file-text-o" aria-hidden="true"></i> Billing Information</strong> </div>
    <div class="ae-body">
   <?php       $data = $this->Ipae_model->getAllemiratesC();

 foreach($new_user_table as $address){ ?>   
  <?php
  $address_details = getAddressDetailsById($address->id);
 }
 ?>
    <!-- Modal content-->
    <div >
  

        <div class="modal-body">
     
  <div class="row">
        <div class="form-group col-sm-6">
          <label for="city">First Name</label>
          <input class="form-control alphaonly" id="firstname" class="alphaonly" name="firstname" placeholder="First Name" type="text" value="<?php echo $address_details['firstName'];?>">
        </div>
        <div class="form-group col-sm-6">
          <label for="postal-code">Last Name</label>
          <input class="form-control alphaonly" id="lastname"  placeholder="Last Name" type="text" name="lastname"  value="<?php echo $address_details['lastName'];?>">
        </div>
      </div>
    
      <div class="row">
        <div class="form-group col-sm-6">
          <label for="ccmonth">Emirates</label>
          <select class="form-control" name="emirates" id="emirates">
		  <option value="">Select Emirates</option>
    <?php foreach($data as $each){ ?>
        <option value="<?php echo $each->zone_id; ?>"><?php echo $each->state_name; ?></option>';
    <?php } ?>
</select>
        </div>
        <div class="form-group col-sm-6">
          <label for="areas">Area</label>
          <select class="form-control" id="updatebyajax" name="area">
             <option value="">Select Emirates First</option>
           </select>
        </div>
      </div>
      <div class="row">
        <div class="form-group col-sm-12">
          <label for="city">Street Name/No.</label>
          <textarea id="streetname" name="streetname" rows="1" class="form-control" placeholder="Street Name/No."></textarea>
        </div>
        <div class="form-group col-sm-12">
          <label for="postal-code">Building Name/No.</label>
          <input class="form-control" id="buildingname" name="buildingname" placeholder="Building Name/No." type="text">
        </div>
      </div>
       
      </div>
      
      
    </div>
<?php   ?>

    </div>

  </div>
</div>
<!--Check boxt 2-->


<!--Check box 3-->
<div class="col-md-3 col-xs-12 col-sm-12">
  <div class="ae-card">
    <div class="ch"> <strong><i class="fa fa-credit-card" aria-hidden="true"></i> Payment Methods</strong> </div>
<div class="ae-body">      
 	  
	   <div class="form-group">
        <br>
        <label class="radio-inline" for="inline-radio1">
         <input type="radio" class="radio" title="Credit Card (saved)" name="payment" id="p_method_ccsave" value="Card">Debit/Credit Card</label>
         <br>
        <label class="radio-inline" for="inline-radio2">
          <input type="radio" class="radio" title="Cash on Delivery" name="payment" id="p_method_ccsave" value='cod' checked>Cash on Delivery (AED 1  will be charged) </label>
      </div>
	   <div class="form-group">
        <img src="assests/img/card_sm_visa.gif" />   <img src="assests/img/card_sm_masterc.gif" />
      </div>

      <!--/.row-->
      
      
    </div>

  </div>
</div>

<!--Check Out Area End-->



  <div class="col-md-12 col-xs-12 col-sm-12">                     


                           <div >
                              <div class="panel-body no-padding">



                              <input type="hidden" name="payment_method" id='payment_method' value=''>
                              <input type="hidden" name="delivery_method" id='delivery_method' value=''>
                              
                              <input type="hidden" name="shipping_address_id" id='shipping_address_id' value="" >
                              
 <div class="order-review" id="checkout-review">
                                    <div class="table-responsive" id="checkout-review-table-wrapper">
                                       <div class="table-responsive">
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


                                             <tbody>

                                             <?php  $i=1; $grand_total=0; 
                                             $flat_ship_rate = 0;
                                             foreach($this->cart->contents() as $row):?>

                                                <tr>
                                                   <td class="text-center"><?php echo $i++;?></td>
                                                   <td class="text-left"><?php echo $row['name'];?><small><?php if($row['part_number']!='') { ?><br>Part Number : <?php echo $row['part_number'];?><?php } ?><br>
                               <?php if($row['upc']!='') { ?>UPC/EAN :  <?php echo $row['upc'];?><?php } ?></small></td>
                                                             <td class="text-center"><img src="<?php echo base_url();?><?php echo $row['img'];?>" style="width:50px; height:50px;" alt="<?php echo $row['name'];?>" title="<?php echo $row['name'];?>"></td>
                                                             
                                                   <td class="text-center"><?php echo $row['qty'];?></td>
                                                   <td class="text-center">AED <?php echo $row['price'];?> </td>
                       <?php 
                        $subtotal=$row['price']*$row['qty'];
                   $grand_total = $grand_total + $subtotal;
                    $flat_ship_rate += $row['qty'];
               ?>                             
               <td class="text-right">AED <?php echo $subtotal; ?>  
              </td>
                                                </tr>

                                                 <?php endforeach; ?>
                                             </tbody>
                                             <tfoot>

                                              <tr id="shipping_rate">
                                                   <td class="text-right" colspan="5"><strong>Cash on Delivery Charge</strong></td>
                                                   <td class="text-right" id="flat_ship"></td>
                                                </tr>

                                                <tr id="shipping_rate2">
                                                   <td class="text-right" colspan="5"><strong>Shipping Charge</strong></td>
                                                   <td class="text-right" id="flat_ship">AED 0 </td>
                                                </tr>

                                               <!--  <tr id="delivery_rate" style="display:none;">
                                                  <td class="text-right" colspan="4"><strong>Delivery Rate:</strong></td>
                                                  <td class="text-right" id="delivery_ship"></td>
                                               </tr> -->

                                                <!-- <tr>
                                                   <td class="text-right" colspan="4"><strong>Sub-Total:</strong></td>
                                                              <td class="text-right">AED: <?php echo $grand_total;?></td>
                                                </tr>
                                                -->
                                                <tr>
                                                   <td class="text-right" colspan="5"><strong>Sub Total</strong></td>
                                                   <td class="text-right" id="grandTotal"></td>
                                                </tr>
                                                <tr>
                                                   <td class="text-right" colspan="5"><strong>VAT</strong></td>
                                                   <td class="text-right" id="vat">AED 0 </td>
                                                </tr>
                                                <tr>
                                                   <td class="text-right" colspan="5"><strong>Grand Total</strong></td>
                                                   <td class="text-right" id="grandTotal2"></td>
                                                </tr>
                                             </tfoot>
                                          </table>
                                       </div>
                                    </div>
                                    <div id="checkout-review-submit">
                                       <div class="cart-btn-3" id="review-buttons-container">
                                          <p class="left">Forgot an Item? <a href="<?php echo base_url(); ?>bag">Edit Your Cart</a></p>
                                         <!--  <a href="<?php //echo base_url(); ?>"> 
                                         <button type="button" title="Place Order" class="btn btn-primary"><span>Continue shopping</span></button> <a/> -->
                                          <button type="submit" title="Place Order" class="btn btn-default" id="submitform"><span>Place Order</span></button>
                                       </div>
                                    </div>
                                 </div>
                                 </form>
                              </div>




                           </div>
           </div>            
</form>
</div>
</div>
</div>


</div>


   
<?php include("footer.php");?>

    
  <!-- START JAVASCRIPT -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assests/js/bootstrap.min.js"></script>
    
    <!-- Bootsnavs -->
    <script src="<?php echo base_url();?>assests/js/bootsnav.js"></script>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
    <script type="text/javascript">
   
      function get_subcategory(id) {
      //alert(id); exit();

        $.ajax({
          type:'POST',
            url: '<?php echo base_url();?>ipae/get_subcategory_product1/' ,
            data: {id:id},
            success: function(response)
            {
              //alert(response);
               
               jQuery('#state_id').html(response);
            }
          

        });
    }

    function get_subcategory2(id) {
      //alert(id); exit();

        $.ajax({
          type:'POST',
            url: '<?php echo base_url();?>ipae/get_subcategory_product1/' ,
            data: {id:id},
            success: function(response)
            {
              //alert(response);
               
               jQuery('#state_id2').html(response);
            }
          

        });
    }
      
    </script>


 


<script type="text/javascript">
$(document).ready(function(){
   
    
    $('#continue1').click(function(){
      if($("input[name='address']").is(':checked')) 
        { 
          var radioValue = $("input[name='address']:checked").val();
          //alert(radioValue); 
          
          
          $("#panel2").show();
          $('#shipping_address_id').val(radioValue);
        }
        else{
          alert('Please choose Shipping address first.');
        }
       
    });

    $('#continue2').click(function(){
      
      if($("input[name='payment']").is(':checked')) 
        { 
          var radioValue = $("input[name='payment']:checked").val();
          //alert(radioValue); 
          
          
          //$("#panel4").show();
          $("#panel3").show();
          $('#payment_method').val(radioValue);
        }
        else{
          alert('Please choose payment method first.');
        }
        
    });


   /* ----------------------------------------------------*/

 $('#continue23').click(function(){
      
      if($("input[name='delivery_type']").is(':checked')) 
        { 
          var radioValue2 = $("input[name='delivery_type']:checked").val();
        //  alert(radioValue2); 
          
          
          $("#panel3").show();
          $('#delivery_method').val(radioValue2);
        }
        else{
          alert('Please choose delivery method first.');
        }
        
    });






    /*----------------------------------------------------*/




    $("input[name='payment']").click(function(){
         var x = $("input[name='payment']:checked").val();
         //var y = $("input[name='delivery_type']:checked").val();
          if(x == 'cod'){
              $("#flat_ship").html("AED <?php echo $flat_ship_rate; ?>");
              $("#shipping_rate").show();
              //$("#delivery_rate").hide();
              $("#grandTotal").html("AED <?php echo $grand_total + $flat_ship_rate; ?> ");
              $("#grandTotal2").html("AED <?php echo $grand_total + $flat_ship_rate; ?> ");
           
          }
          else {
                           $("#flat_ship").html("AED <?php echo "0"; ?>");

             $("#grandTotal").html("AED <?php echo $grand_total; ?> ");
             $("#grandTotal2").html("AED <?php echo $grand_total; ?> ");
          }

          $('#payment_method').val(x);
    });


    $("input[name='address']").click(function(){
         var radioValue = $("input[name='address']:checked").val();
         
          $('#shipping_address_id').val(radioValue);
    })
       
        
});
  
</script>



   <!-- Load jQuery and jQuery-Validate scripts -->

  <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
      
        <script>
            // Wait for the DOM to be ready
   $(function() {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='order_list']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      firstName: "required",
      lastName: "required",

      address: "required",
      stateid: "required",

      suite:"required",

   

    phone: {
        required: true,
        maxlength:9,
      },
 
  
   
      email: {
        required: true,
        // Specify that email should be validated
        // by the built-in "email" rule
        email: true
      },
     
   
    },
    // Specify validation error messages
    messages: {
      firstName:"Please enter your firstname",
      lastName:"Please enter your lastname",
   
   phone:{
   required:"plese enter contact number ",
   minlength:"minlength 9 digit",
   maxlength:"maxlenth 9 digit",
   },
   address:"Please enter a Street  address",
    suite:"Please enter a  suit, flat details",
   
   stateid:"Please select the state first",
      
      email: "Please enter a valid email address"
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });
});
  </script>



 <script type="text/javascript">


$('.alphaonly').bind('keyup blur',function(){ 
    var node = $(this);
    node.val(node.val().replace(/[^a-zA-Z ]/g,'') ); }
);

$('.contact1').bind('keyup blur',function(){ 
    var node = $(this);
    node.val(node.val().replace(/[^0-9]/g,'') ); }
);


</script>


<script>
$(document).ready(function(){
    $("input").focus(function(){
        $(this).css("background-color", "#cccccc");
    });
    $("input").blur(function(){
        $(this).css("background-color", "#ffffff");
    });
});
</script>


<script type="text/javascript">

$(document).ready(function () {
 
window.setTimeout(function() {
    $("#alert").fadeTo(2000, 0).slideUp(2000, function(){
        $(this).remove(); 
    });
}, 1000);
 
});
</script>

<script type="text/javascript">
                      $(document).ready(function(){
                        $("input:radio[name=address]:first").attr('checked', true);
                        $("#flat_ship").html("AED <?php echo $flat_ship_rate; ?> ");
                        $("#grandTotal").html("AED <?php echo $grand_total + $flat_ship_rate; ?> ");
                        $("#grandTotal2").html("AED <?php echo $grand_total + $flat_ship_rate; ?> ");

                    });
					
					
					
					
					
					
 $(document).on("change", "#emirates", function(){
	 
var	id=$('#emirates').val();
	
 	  $.ajax({
                type:'POST',
                url:'<?php echo base_url("welcome/getcity"); ?>/'+id,
                data:{'id':id},
                success:function(data){
				// alert(data);
                    $('#updatebyajax').html(data);
                }
            });
	  
  }); // end of doc ready
  
  
  $(document).on("click", "#submitform", function()
  {
 
var	firstname=$('#firstname').val();
var	lastname=$('#lastname').val();
var	emirates=$('#emirates').val();
var	area=$('#updatebyajax').val();
var	streetname=$('#streetname').val();
var	buildingname=$('#buildingname').val();

if($.trim(firstname)==''){
 alert( "Please Enter First Name." );
   $("#firstname").focus();
   return false;   
}
if($.trim(lastname)==''){
 alert( "Please Enter Last Name." );
   $("#lastname").focus();
   return false;   
}
if($.trim(emirates)==''){
 alert( "Please Select Emirates." );
   $("#emirates").focus();
   return false;   
}
if($.trim(updatebyajax)==''){
 alert( "Please Select Area." );
   $("#updatebyajax").focus();
   return false;   
}
if($.trim(streetname)==''){
 alert( "Please Enter Street Name/No." );
   $("#streetname").focus();
   return false;   
}
if($.trim(buildingname)==''){
 alert( "Please Enter Building Name/No." );
   $("#buildingname").focus();
   return false;   
}

 })
 
 
$('.alphaonly').bind('keyup blur',function(){ 
    var node = $(this);
    node.val(node.val().replace(/[^a-zA-Z ]/g,'') ); }
);
  
</script>

</body>

</html>