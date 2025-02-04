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
             <div class="text-center" style=" font-weight: 800; font-size: +25px; margin-bottom: 20px;" ><b>CHECKOUT </b></div>
               <div class="row">
                  
                  <div class="col-xs-12 col-md-12 col-sm-12">
                     <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                     
                        <?php  if($total == 0) {  ?>

                        <div class="panel panel-default">
                           <div class="panel-heading" role="tab" id="headingTwo">
                              <h4 class="panel-title">
                                 <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#" aria-expanded="false" aria-controls="collapseTwo">
                                 <span>1</span>
                                 SHIPPING INFORMATION
                                 </a>
                              </h4>
                           </div>
                           <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false" >

         <form name="registration" class="sa-innate-form"  method="post" action="<?php echo base_url();?>ipae/Checkout_Address">
                              <div class="panel-body">
                              <input type="hidden" name="user_id" value="<?php echo $user_id;?>">
                                 <div class="row">
                                  <div class="col-md-6">
                                       <p class="form-row">
                                          <label for="firstname">First Name<span class="required error">*</span></label>
                                          <input class="alphaonly" type="text" name="firstname" id="firstname" value="<?php echo $firstName;?>"  required >
                                           
                                       </p>
                                    </div>
                                    <div class="col-md-6">
                                       <p class="form-row">
                                          <label for="lastname">Last Name<span class="required error">*</span></label>
                                          <input class="alphaonly" type="text" name="lastname" id="lastname" value="<?php echo $lastName;?>" required >
                                           
                                       </p>
                                    </div>
                                    <div class="col-md-6">
                                       <p class="form-row">
                                        <label for="address" >Street Address<span class="required error">*</span></label>
                                         <textarea  name="address" id="address" rows="4" cols="50" placeholder="Enter your Street Address" required></textarea>
                                           
                                       </p>
                                    </div>
                                     <div class="col-md-6">
                                       <p class="form-row">
                                        <label for="suite" >Apt, suite, etc. (optional)</label>
                                         <textarea name="suite" id="suite" rows="4" placeholder="Enter your Apt, suite, etc. (optional)" cols="50" ></textarea>
                                           
                                       </p>
                                    </div>

                                  
                                    <div class="col-md-6">
                                       <p class="form-row">
                                          <label for="city" >City<span class="required error">*</span></label>
                                          <input type="text" name="city" id="city" placeholder="Enter your City" required >
                                           
                                       </p>
                                    </div>
                                      <div class="col-md-6">
                                      

                                       <p class="form-row">

                                         <label for="stateid" >Emirates<span>*</span></label>
                                            <select name="stateid" id="stateid">

                                             <option value="">--select the state--</option>
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
                                          <label for="" >Contact Number<span class="required error">*</span></label>
                                        <input class="contact1" style="font-weight:bold;color: #000" type="tel"  name="+971" placeholder="+971" disabled="true" required/>
                                           
                                       </p>
                                      
                                    </div>

                                          <div class="col-md-4">
                                      

                                         <p class="form-row">
                                          <label for="phone" ><span class="required error">*</span></label>
                                          <input class="contact1" type="tel"  id="phone" name="phone" value="<?php echo $contact;?>" required/>
                                           
                                       </p>
                                      
                                    </div>

                                
                                    <div class="col-md-6">
                                      
                                          <p class="form-row">
                                          <label for="email" >Email Id<span class="required error">*</span></label>
                                          <input type="email" name="email" value="<?php echo $Email;?>" required >
                                           
                                       </p>
                                       </div>
                                       </div>
                                    
                                      
                                   
                                    

                                    <div class="col-md-6">
                                       <p class="form-row">
                                         
                                         <button type="submit" class="btn-primary" style="width: 160px;
                                          margin-left: -19px;" >Submit</button>
                                       </p>
                                    </div> 
                                    </form>                  
                           </div>
                        </div>

                        <?php } else {   ?>
                

                    <div class="panel panel-default">
                           <div class="panel-heading" role="tab" id="headingOne">
                              <h4 class="panel-title">
                                 <a role="button" data-toggle="collapse" data-parent="#accordion" href="#" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
                                 <span>1</span>
                                SHIPPING DETAILS
                                 </a>
                              </h4>
                           </div>
                         <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" >
                              <div class="panel-body">
                                    
                    

                     <!-- Modal -->
                  <div id="addAddress" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header bg-primary">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title text-center" style=" font-weight:700;">Add Shipping Address</h4>
                        </div>

              <form method="post" action="<?php echo base_url(); ?>ipae/add_address">
                        <div class="modal-body">
                        <input type="hidden" name="user_id" value="<?php echo $user_id; ?>" required>
                         <div class="form-group">
                        <label for="usr">First Name<span class="required error"> *</span></label>
                        <input type="text" maxlength="30" name="firstName" class="form-control" placeholder="Enter your First Name" required >
                      </div>
                      <div class="form-group">
                        <label for="usr">Last Name:</label>
                        <input type="text" name="lastName" placeholder="Enter your Last Name" maxlength="30" class="form-control" required>
                      </div>
                      <div class="form-group">
                        <label for="usr">Email:</label>
                        <input type="email" name="email" placeholder="Enter your Email" class="form-control" required>
                      </div>
                      <div class="form-group">
                        <label for="usr">Phone:</label>
                        <input type="tel" maxlength="10" placeholder="Enter your Phone Number" minlength="10" name="phone" class="form-control" required >
                      </div>
                      <div class="form-group">
                        <label for="usr">Street Address:</label>
                        <input type="text" name="address" class="form-control" placeholder="Enter your Street Address" required>
                      </div>

                      <div class="form-group">
                      <label for="usr">Suit, Apt:</label>
                     
                      <textarea name="suit" placeholder="Enter your Suit, Apt" class="form-control"></textarea>
                    </div>

                      <div class="form-group">
                        <label for="usr">City:</label>
                        <input type="text" name="city" placeholder="Enter your City Name" class="form-control" required>
                      </div>

                      <div class="form-group">
      <label for="usr">Emirates:</label>
       <select name="stateid" id="state_id2" required>
                                             
                                           <option value="Dubai">Dubai </option>
                                            <option value="Abu Dhabi">Abu Dhabi</option>
                                            <option value="Al Ain">Al Ain</option>
                                            <option value="Ajman ">Ajman </option>
                                            <option value="Fujairah  ">Fujairah    </option>
                                            <option value="Sharjah ">Sharjah    </option>
                                            <option value="Ras Al Khaimah">Ras Al Khaimah   </option>
                                            <option value="Um Al Quiwan">Um Al Quiwan </option>
                                          </select>
    </div>
                 
                      
                        <div class="form-group">
                         
                          <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                        </div>
                        </form>
                        <div class="modal-footer bg-primary">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </div>

                    </div>
                  </div>


                  <br/>  
                <?php
                if($new_user_table){ ?>
                  
                   <br/>  <div class="table-responsive"><table class="table">
                    <thead class="thead-inverse">
                      <tr>
                        
                        
                        <th>Name</th>
                        <th>Full Address</th>
                        
                        
                        <th>Email</th>
                        <th>Phone</th>  
                        <th>Action</th>      
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                         if(count($new_user_table) == 1){
                          $checked = "checked";
                         }
                         else{
                          $checked = ""; 
                         }
                      ?> 
                    <?php foreach($new_user_table as $address){ ?>
                      <tr>
                    
                        <td><?php echo $address->firstName." ".$address->lastName; ?></td>
                        <td><?php echo $address->full_address.", ".$address->city." - ".$address->suit.", ".$address->zone_id; ?></td>
                        <td><?php echo $address->email_id; ?></td>
                        <td><?php echo $address->contact; ?></td>
                        <td><span style="display:none">   <input type="radio" name="address" id="address" value="<?php echo $address->id; ?>" <?php echo $checked; ?>></span>
                         <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal<?php echo $address->id; ?>"><i class="fa fa-pencil"></i></button> </td>
                       
                      </tr>

                    <!-- Modal -->
<div id="myModal<?php echo $address->id; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">
<?php
  $address_details = getAddressDetailsById($address->id);
  $country_details = getCountryById($address_details['country_id']);
  $city_details = getCityById($address_details['zone_id']);

?>
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center" style="color:black; font-weight:700;">Edit Shipping Address</h4>
      </div>

      <form method="post" action="<?php echo base_url(); ?>ipae/update_address">
      <input type="hidden" name="adrs_id" value="<?php echo $address_details['id']; ?>">
      <div class="modal-body">
     
       <div class="form-group">
      <label for="usr">First Name<span class="error">*</span></label>
      <input type="text" name="firstName" class="form-control" value="<?php echo $address_details['firstName']; ?>" required>
    </div>
    <div class="form-group">
      <label for="usr">Last Name<span class="error">*</span></label>
      <input type="text" name="lastName" class="form-control" value="<?php echo $address_details['lastName']; ?>" required >
    </div>
    <div class="form-group">
      <label for="usr">Email<span class="error">*</span></label>
      <input type="text" name="email" class="form-control" value="<?php echo $address_details['email_id']; ?>" required>
    </div>
 <label for="usr">Phone<span class="error">*</span></label>
    <div class="row">

      <div class="col-md-2">

      <div class="form-group">
        
       <input type="text" class="form-control" value="+971" readonly>
      
      </div>
      </div>
      <div class="col-md-10">
        <div class="form-group">
        
       
       <input type="text" name="phone" maxlength="9" class="form-control" value="<?php echo $address_details['contact']; ?>" required>
      </div>
      </div>
      
    </div>

     <div class="form-group">
      <label for="usr">Street Address<span class="error">*</span></label>
    <!--   <input type="text" name="address" class="form-control" value="" required> -->
      <textarea name="address" class="form-control"><?php echo $address_details['full_address']; ?></textarea>
    </div>

     <div class="form-group">
      <label for="usr">Suit, Apt:</label>
     <!--  <input type="text" name="suit" class="form-control" value="<?php echo $address_details['suit']; ?>" required> -->
      <textarea name="suit" class="form-control"><?php echo $address_details['suit']; ?></textarea>
    </div>

    <div class="form-group">
      <label for="usr">City<span class="error">*</span></label>
      <input type="text" name="city" class="form-control" value="<?php echo $address_details['city']; ?>" required>
    </div>
   
    


        <div class="form-group">
      <label for="usr">Emirates</label>
       <select name="stateid" id="state_id2" required>
                                             <option value="<?php echo $address_details['zone_id']; ?>"><?php echo $address_details['zone_id'];?></option>
                                           <option value="Dubai">Dubai </option>
                                            <option value="Abu Dhabi">Abu Dhabi</option>
                                            <option value="Al Ain">Al Ain</option>
                                            <option value="Ajman ">Ajman </option>
                                            <option value="Fujairah  ">Fujairah    </option>
                                            <option value="Sharjah ">Sharjah    </option>
                                            <option value="Ras Al Khaimah">Ras Al Khaimah   </option>
                                            <option value="Um Al Quiwan">Um Al Quiwan </option>
                                          </select>
    </div>

        
    <div class="form-group">
     
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
      </div>
      </form>
      <div class="modal-footer bg-primary">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


                    <?php
                     }
                     ?>
                    </tbody>
                    </table>
                    </div>
                <?php
                }
                ?>
                                    <div class="buttons-set">
                                       <button class="btn btn-primary" id='continue1'>CONTINUE</button>
                                    </div>
                           </div>

                        </div>
                        </div> 
                        <?php } ?>

                        <div id="panel2">
                        <div class="panel panel-default">
                           <div class="panel-heading" role="tab" id="headingFour">
                              <h4 class="panel-title">
                                 <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#" aria-expanded="false" aria-controls="collapseFour">
                                 <span>2</span>
                                 MODE OF PAYMENT
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
    font-weight: 300; color: #000;" >Debit/Credit Card</p> </label>
                                          </li>
                                          <li class="control">
                                             <input type="radio" class="radio" title="Cash on Delivery" name="payment" id="p_method_ccsave" value='cod' checked>
                                             <label for="p_method_ccsave"><p style="font-family: inherit; font-size: 15px;
    font-weight: 300;color: #000;">Cash on Delivery (AED 1  will be charged)</p></label>
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
    font-weight: 300;color: #000;">1 day Delivery(AED 50  will be charged)</p></label>
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
                                 <span>3</span>
                                 PAYMENT INFORMATION
                                 </a>
                              </h4>
                           </div>




                           <div id="collapseFive" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingFive" aria-expanded="true">
                              <div class="panel-body no-padding">

                              <form  role="form" method="post" action="<?php echo base_url();?>ipae/order_list">


                              <input type="hidden" name="payment_method" id='payment_method' value=''>
                              <input type="hidden" name="delivery_method" id='delivery_method' value=''>
                              
                              <input type="hidden" name="shipping_address_id" id='shipping_address_id' value="" >
                              
 <div class="order-review" id="checkout-review">
                                    <div class="table-responsive" id="checkout-review-table-wrapper">
                                       <div class="table-responsive">
                                           <br/>
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
                                                   <td class="text-right" colspan="4"><strong>Cash on Delivery Charge</strong></td>
                                                   <td class="text-right" id="flat_ship"></td>
                                                </tr>

                                                <tr id="shipping_rate2">
                                                   <td class="text-right" colspan="4"><strong>Shipping Charge</strong></td>
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
                                                   <td class="text-right" colspan="4"><strong>Sub Total</strong></td>
                                                   <td class="text-right" id="grandTotal"></td>
                                                </tr>
                                                <tr>
                                                   <td class="text-right" colspan="4"><strong>VAT</strong></td>
                                                   <td class="text-right" id="vat">AED 0 </td>
                                                </tr>
                                                <tr>
                                                   <td class="text-right" colspan="4"><strong>Grand Total</strong></td>
                                                   <td class="text-right" id="grandTotal2"></td>
                                                </tr>
                                             </tfoot>
                                          </table>
                                       </div>
                                    </div>
                                    <div id="checkout-review-submit">
                                       <div class="cart-btn-3" id="review-buttons-container">
                                          <p class="left">Forgot an Item? <a href="<?php echo base_url(); ?>ipae/Bag">Edit Your Cart</a></p>
                                         <!--  <a href="<?php //echo base_url(); ?>"> 
                                         <button type="button" title="Place Order" class="btn btn-primary"><span>Continue shopping</span></button> <a/> -->
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




<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Shipping Address</h4>
      </div>

      <form method="post" <?php echo form_open("ipae/update_address");?>>
      <div class="modal-body">
      <input type="hidden" name="user_id" value="<?php echo $user_id;?>">
       <div class="form-group">
      <label for="usr">First Name:</label>
      <input type="text" name="firstName" class="form-control" value="<?php echo $update[0]->firstName; ?>" required>
    </div>
    <div class="form-group">
      <label for="usr">Last Name:</label>
      <input type="text" name="lastName" class="form-control" value="<?php echo $update[0]->lastName; ?>" required>
    </div>
    <div class="form-group">
      <label for="usr">Email:</label>
      <input type="email" name="email" class="form-control" value="<?php echo $update[0]->email_id; ?>" required>
    </div>
    <div class="form-group">
      <label for="usr">Phone:</label>
      <input type="text" name="phone" class="form-control" value="<?php echo $update[0]->contact; ?>" required>
    </div>
    <div class="form-group">
      <label for="usr">Address:</label>
      <input type="text" name="address" class="form-control" value="<?php echo $update[0]->full_address; ?>" required>
    </div>
    <div class="form-group">
      <label for="usr">City:</label>
      <input type="text" name="city" class="form-control" value="<?php echo $update[0]->city; ?>" required>
    </div>
    <div class="form-group">
      <label for="usr">Postel code:</label>
      <input type="text" name="pin_number" class="form-control" value="<?php echo $update[0]->pin_code; ?>" required>
    </div>
    <div class="form-group">
      <label for="usr">Country:</label>
      <select name="country_id" id="country_id" onchange="return get_subcategory(this.value)"  required >

                                             <option value="<?php echo $update[0]->country_id;?>"><?php echo $update[0]->country_name;?></option>
                                               <?php foreach($country as $row):?>
                                             <option value="<?php echo $row->country_id;?>"><?php echo $row->country_name;?></option>
                                               <?php endforeach;?>
                                          </select>
    </div>
        <div class="form-group">
      <label for="usr">State/Zone:</label>
       <select name="stateid" id="state_id" required>
                                             <option value="<?php echo $update[0]->zone_id;?>"><?php echo $update[0]->state_name;?></option>
                                          <option value="">--Select the state/zone --</option>
                                               
                                          </select>
    </div>
    <div class="form-group">
     
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
      </div>
      </form>
      <div class="modal-footer bg-primary">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>



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
  $("form[name='registration']").validate({
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
</script>

</body>

</html>