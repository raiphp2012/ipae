<?php

error_reporting(0);

$url=current_url(); 
$this->session->set_userdata("url",$url);

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


    </style>
    
</head>
<body>     
  
    <!-- Start Navigation -->
      
   <?php 
          include("header.php");
    
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
 <div class="text-center" style=" font-weight: 800; font-size: +25px; margin-bottom: 20px;" ><b>CHECKOUT </b></div>
         

               <div class="row">
                  
                  <div class="col-xs-12 col-md-12 col-sm-12">
                     <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                     
                       

                        <div class="panel panel-default">
                           <div class="panel-heading" role="tab" id="headingTwo">
                              <h4 class="panel-title">
                                 <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                 <span>1</span>
                                 Shipping Information
                                 </a>
                              </h4>
                           </div>
                           <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false" >

         <form name="registration" class="sa-innate-form"  method="post" action='#'>
                              <div class="panel-body">
                              <input type="hidden" name="user_id" value="<?php echo $user_id;?>">
                                 <div class="row">
                                  <div class="col-md-6">
                                       <p class="form-row">
                                          <label for="firstName">First Name<span class="required">*</span></label>
                                          <input class="alphaonly" type="text" name="firstName" id="firstName" placeholder="Enter your first name."  required >
                                           
                                       </p>
                                    </div>
                                    <div class="col-md-6">
                                       <p class="form-row">
                                          <label for="lastName">Last Name<span class="required">*</span></label>
                                          <input class="alphaonly" type="text" name="lastName" id="lastName" placeholder="Enter your last name." required >
                                           
                                       </p>
                                    </div>
                                    <div class="col-md-6">
                                       <p class="form-row">
                                        <label for="address">Street Address<span class="required">*</span></label>
                                         <textarea  name="address" id="address" rows="4" cols="50" required></textarea>
                                           
                                       </p>
                                    </div>
                                     <div class="col-md-6">
                                       <p class="form-row">
                                        <label for="suite">Apt, suite, etc. (optional)<span cla>*</span></label>
                                         <textarea name="suite" id="suite" rows="4" cols="50" ></textarea>
                                           
                                       </p>
                                    </div>

                                  
                                    <div class="col-md-6">
                                       <p class="form-row">
                                          <label for="City">City<span class="required">*</span></label>
                                          <input type="text" name="city" id="city" placeholder="Enter your City" required >
                                           
                                       </p>
                                    </div>
                                      <div class="col-md-6">
                                      

                                       <p class="form-row">

                                         <label for="Emirates">Emirates<span class="required">*</span></label>
                                            <select name="stateid" id="state_id" required>
                                            <option value="Dubai">Dubai </option>
                                            <option value="Abu Dhabi">Abu Dhabi</option>
                                            <option value="Al Ain">Al Ain</option>
                                            <option value="Ajman ">Ajman </option>
                                            <option value="Fujairah  ">Fujairah    </option>
                                            <option value="Sharjah ">Sharjah    </option>
                                            <option value="Ras Al Khaimah">Ras Al Khaimah   </option>
                                            <option value="Um Al Quiwan">Um Al Quiwan </option>
                                          </select>
                                            
                                       </p>
                                    </div>
                                   
                           
                           </div>
                                            <div class="row">
                           <div class="col-md-2">
                                      

                                         <p class="form-row">
                                          <label for="phone">Contact Number<span class="required">*</span></label>
                                        <input class="contact1" style="font-weight:bold;color: #000" type="tel" maxlength="10" minlength="10" name="+971" placeholder="+971" disabled="true" required/>
                                           
                                       </p>
                                      
                                    </div>

                                          <div class="col-md-4">
                                      

                                         <p class="form-row">
                                          <label for="phone"><span class="required">*</span></label>
                                          <input class="contact1" type="tel" maxlength="10" minlength="10" id="phone" name="phone" placeholder="Phone" required/>
                                           
                                       </p>
                                      
                                    </div>

                                
                                    <div class="col-md-6">
                                      
                                          <p class="form-row">
                                          <label for="email">E-Mail ID<span class="required">*</span></label>
                                          <input type="email" name="email" id="email" placeholder="Enter your email." required >
                                           
                                       </p>
                                       </div>
                                       </div>
                                    
                                      
                                   
                                    

                                    <div class="col-md-6">
                                       <p class="form-row">
                                         
                                         <button type="submit" id="sub" name="sub" class="btn-default">Continue</button>
                                       </p>
                                    </div> 
                                    </form>
                           
                           </div>
                        </div>



                        <div id="panel2">
                        <div class="panel panel-default">
                           <div class="panel-heading" role="tab" id="headingFour">
                              <h4 class="panel-title">
                                 <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                 <span>2</span>
                                 PAYMENT METHOD
                                 </a>
                              </h4>
                           </div>
                           <div id="collapseFour" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingFour" aria-expanded="false" >
                              <div class="panel-body no-padding">
                                 <div class="payment-met">
                                    <form action="#" id="payment-form">
                                       <ul class="form-list">
                                         <br>
                                          <li class="control">
                                             <input type="radio" class="radio" title="Credit Card (saved)" name="payment" id="p_method_ccsave" value="Card">
                                      <label for="p_method_ccsave"><p style="font-family: inherit;font-size: 15px;
    font-weight: 300; color: #000;" >Card (saved)</p> </label>
                                          </li>
                                          <li class="control">
                                             <input type="radio" class="radio" title="Cash on Delivery" name="payment" id="p_method_ccsave" value='cod' checked>
                                             <label for="p_method_ccsave"><p style="font-family: inherit; font-size: 15px;
    font-weight: 300;color: #000;">Cash on Delivery(1 AED will be charged)</p></label>
                                          </li>
                                       </ul>
                                      
                                    </form>
                                     <div class="buttons-set">
                                           <button class="btn btn-primary" id='continue2'>CONTINUE</button>
                                       </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                       </div> <!--panel 2 ends-->




                  <!--  pannel 4  strat-->


          <div id="panel4">
                        <div class="panel panel-default">
                           <div class="panel-heading" role="tab" id="headingFour1">
                              <h4 class="panel-title">
                                 <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsesix" aria-expanded="false" aria-controls="collapseFour">
                                 <span>3</span>
                                 DELIVERY METHOD
                                 </a>
                              </h4>
                           </div>
                           <div id="collapsesix" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingFour1" aria-expanded="false" >
                              <div class="panel-body no-padding">
                                 <div class="payment-met">
                                    <form action="#" id="delivery-form">
                                       <ul class="form-list">
                                         <br>
                                          <li class="control">
                                    <input style="float: left;" type="radio" class="radio" title="Credit Card (saved)" name="delivery_type" id="delivery_type2" value="48-hours-delivery" checked>
                                      <label for="p_method_ccsave"><p style="font-family: inherit;font-size: 15px;
    font-weight: 300; color: #000;" >48 hours</p> </label>
                                          </li>
                                          <li class="control">
                                             <input style="float: left;" type="radio" class="radio" title="Cash on Delivery" name="delivery_type" id="delivery_type2" value='1-day-delivery' >
                                             <label for="p_method_ccsave"><p style="font-family: inherit; font-size: 15px;
    font-weight: 300;color: #000;">1 day Delivery(50 AED will be charged)</p></label>
                                          </li>
                                       </ul>
                                      
                                    </form>
                                     <div class="buttons-set">
                                           <button class="btn btn-primary" id='continue23'>CONTINUE</button>
                                       </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                       </div> <!--panel 2 ends-->



                   <!--  pannel 4  strat-->

























                        <div id="panel3">
                        <div class="panel panel-default">
                           <div class="panel-heading" role="tab" id="headingFive">
                              <h4 class="panel-title">
                                 <a class="" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                 <span>4</span>
                                 PAYMENT INFORMATION
                                 </a>
                              </h4>
                           </div>




                           <div id="collapseFive" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingFive" aria-expanded="true">
                              <div class="panel-body no-padding">

                              <form  role="form" method="post" action="<?php echo base_url();?>ipae/checkout_order_list">


                              <input type="hidden" name="payment_method" id='payment_method' value=''>
                              <input type="hidden" name="delivery_method" id='delivery_method' value=''>



                              <input type="hidden" name="firstName2" id='firstName2' value=''>
                              <input type="hidden" name="lastName2" id='lastName2' value=''>
                              <input type="hidden" name="address2" id='address2' value=''>
                              <input type="hidden" name="city2" id='city2' value=''>
                              <input type="hidden" name="stateid2" id='stateid2' value=''>
                              <input type="hidden" name="phone2" id='phone2' value=''>
                              <input type="hidden" name="email2" id='email2' value=''>
                              <input type="hidden" name="suite2" id='suite2' value=''>

                              
                            

                                 <div class="order-review" id="checkout-review">
                                    <div class="table-responsive" id="checkout-review-table-wrapper">
                                       <div class="table-responsive">
                                           <br/>
                                          <table class="table table-hover table-inverse">
                                             <thead class="thead-inverse">
                                                <tr class="table-reverse" style="font-weight: 800">
                                                   <td class="text-left"style="color:"><strong>S.No</strong></td>
                                                   <td class="text-left"><strong>Product name</strong></td>
                                                   <td class="text-right"><strong>Quantity</strong></td>
                                                   <td class="text-right"><strong>Unit Price</strong></td>
                                                   <td class="text-right"><strong>Total</strong></td>
                                                </tr>
                                             </thead>


                                             <tbody>

                                             <?php  $i=1; $grand_total=0; 
                                             $flat_ship_rate = 0;
                                             foreach($this->cart->contents() as $row):?>

                                                <tr>
                                                   <td class="text-left"><?php echo $i++;?></td>
                                                   <td class="text-left"><?php echo $row['name'];?></td>
                                                   <td class="text-right"><?php echo $row['qty'];?></td>
                                                   <td class="text-right">AED:<?php echo $row['price'];?></td>
               <td class="text-right">AED: <?php echo $subtotal=$row['price']*$row['qty']; ?> 

               <?php 
                   $grand_total = $grand_total + $subtotal;

                   $flat_ship_rate += $row['qty'];
               ?></td>
                                                </tr>

                                                 <?php endforeach; ?>
                                             </tbody>
                                             <tfoot>

                                              <tr id="shipping_rate">
                                                   <td class="text-right" colspan="4"><strong>Flat Shipping Rate:</strong></td>
                                                   <td class="text-right" id="flat_ship"></td>
                                                </tr>

                                                <tr id="delivery_rate" style="display:none;">
                                                   <td class="text-right" colspan="4"><strong>Delivery Rate:</strong></td>
                                                   <td class="text-right" id="delivery_ship"></td>
                                                </tr>

                                                <!-- <tr>
                                                   <td class="text-right" colspan="4"><strong>Sub-Total:</strong></td>
                                                              <td class="text-right">AED: <?php echo $grand_total;?></td>
                                                </tr>
                                                -->
                                                <tr>
                                                   <td class="text-right" colspan="4"><strong>Total:</strong></td>
                                                   <td class="text-right" id="grandTotal"></td>
                                                </tr>
                                             </tfoot>
                                          </table>
                                       </div>
                                    </div>
                                    <div id="checkout-review-submit">
                                       <div class="cart-btn-3" id="review-buttons-container">
                                          <p class="left">Forgot an Item? <a href="<?php echo base_url(); ?>ipae/Bag">Edit Your Cart</a></p>
                                          <a href="<?php echo base_url(); ?>"> <button type="button" title="Place Order" class="btn btn-primary"><span>Continue shopping</span></button> <a/>
                                          <button type="submit" title="Place Order" class="btn btn-default"><span>Place Order</span></button>
                                       </div>
                                    </div>
                                 </div>
                                 </form>
                              </div>




                           </div>
                        </div>
</div>  <!--panel 3 ends-->
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!--Check Out Area End-->
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
    $("#panel2").hide();
    $("#panel3").hide();
    $("#panel4").hide();
    
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
          
          
          $("#panel4").show();
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
         var y = $("input[name='delivery_type']:checked").val();
          if(x == 'cod' && y == '48-hours-delivery'){
              $("#flat_ship").html("AED <?php echo $flat_ship_rate; ?>");
              $("#shipping_rate").show();
              $("#delivery_rate").hide();
              $("#grandTotal").html("AED: <?php echo $grand_total + $flat_ship_rate; ?>");
           
          }
          else if(x == 'Card' && y == '48-hours-delivery'){
             $("#shipping_rate").hide();
             $("#delivery_rate").hide();
             $("#grandTotal").html("AED: <?php echo $grand_total; ?>");
          }
          else if(x == 'Card' && y == '1-day-delivery'){
             $("#delivery_ship").html("AED 50.00");
             $("#shipping_rate").hide();
             $("#delivery_rate").show();
             $("#grandTotal").html("AED: <?php echo $grand_total + 50; ?>");
          }
          else if(x == 'cod' && y == '1-day-delivery'){
             $("#delivery_ship").html("AED 50.00");
            $("#flat_ship").html("AED <?php echo $flat_ship_rate; ?>");
            $("#delivery_rate").show();
             $("#shipping_rate").show();
             $("#grandTotal").html("AED: <?php echo $grand_total + 50 + $flat_ship_rate; ?>");
          }

          $('#payment_method').val(x);
    });

    /*----------------------------------------*/



    $("input[name='delivery_type']").click(function(){
         var y2 = $("input[name='delivery_type']:checked").val();
         var x2 = $("input[name='payment']:checked").val();
        
          if(x2 == 'cod' && y2 == '48-hours-delivery'){

              $("#flat_ship").html("AED <?php echo $flat_ship_rate; ?>");
              $("#delivery_rate").hide();
              $("#shipping_rate").show();
              $("#grandTotal").html("AED: <?php echo $grand_total + $flat_ship_rate; ?>");
           
          }
          else if(x2 == 'Card' && y2 == '48-hours-delivery'){
            $("#delivery_rate").hide();
             $("#shipping_rate").hide();
             $("#grandTotal").html("AED: <?php echo $grand_total; ?>");
          }
          else if(x2 == 'Card' && y2 == '1-day-delivery'){
             $("#delivery_ship").html("AED 50.00");
             $("#shipping_rate").hide();
             $("#delivery_rate").show();
             $("#grandTotal").html("AED: <?php echo $grand_total + 50; ?>");
          }
          else if(x2 == 'cod' && y2 == '1-day-delivery'){
             $("#delivery_ship").html("AED 50.00");
            $("#flat_ship").html("AED <?php echo $flat_ship_rate; ?>");
            $("#delivery_rate").show();
             $("#shipping_rate").show();
             $("#grandTotal").html("AED: <?php echo $grand_total + 50 + $flat_ship_rate; ?>");
          }

          $('#delivery_type').val(y2);
    });



    /*-------------------------------------------*/

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
  $("form[name='registration']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      firstName: "required",
      lastName: "required",

      address: "required",
      pin_number: "required",

     /* country_id:"required",*/

   

   phone:"required",
 
  
   
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
   required:"plese enter value ",
   minlength:"minlength 10 digit",
   maxlength:"maxlenth 10 digit",
   },
   address:"Please enter a   address",
    pin_number:"Please enter a  pin number",
   
   
      
      email: "Please enter a valid email address"
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      abc();
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
                        $("#flat_ship").html("AED <?php echo $flat_ship_rate; ?>");
                        $("#grandTotal").html("AED: <?php echo $grand_total + $flat_ship_rate; ?>");

                    });
</script>

<script type="text/javascript">
function abc(){

  

  var fname = $("#firstName").val();
  var lname = $("#lastName").val();
  var address = $("#address").val();
  var city = $("#city").val();
  var stateid = $("#state_id").val();
  var phone = $("#phone").val();
  var suite = $("#suite").val();
  var email = $("#email").val();

  $("#firstName2").val(fname);
  $("#lastName2").val(lname);
  $("#address2").val(address);
  $("#city2").val(city);
  $("#stateid2").val(stateid);
  $("#phone2").val(phone);
  $("#suite2").val(suite);
  $("#email2").val(email);

      $("#panel2").show();
}
  
</script>

</body>

</html>