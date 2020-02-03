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

    <title>After Sales Support - IPAE</title>
    <link rel="icon" type="image/png"   href="<?php echo base_url();?>assests/img/favicon.png" />

    <!-- CSS -->
<link href='https://fonts.googleapis.com/css?family=Spectral' rel='stylesheet'>
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
 



<Style>.error{color:red}</Style>
     <nav class="navbar navbar-default navbar-sticky bootsnav">

        <!-- Start Top Search -->
        <div class="top-search">
            <div class="container">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
                    <input type="text" class="form-control" placeholder="Search">
                    <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                </div>
            </div>
        </div>
        <!-- End Top Search -->

        <div class="container">            


            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="Logo" href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assests/img/logo1.png" class="logo" alt=""></a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                    
                                    <li class="active" ><a href="<?php echo base_url();?>category/iphone" >iPhone</a></li>
                                     <li class=""><a href="<?php echo base_url();?>category/accessories">Accessories</a></li>
                  
      
                    <li class="button-dropdown">
                        <a href="javascript:void(0)" class="dropdown-toggle">
                              Support
                              
                        </a>
                   <ul class=" dropdown-menu ac-gn-bagview-nav-list ac-gn-bagview-nav-nobtn">
            <li class="ac-gn-bagview-nav-item ac-gn-bagview-nav-item-bag">
                <a href="<?php echo base_url();?>welcome/doa" class="ac-gn-bagview-nav-link ac-gn-bagview-nav-link-bag">
                     DOA (Dead on Arrival)
                </a>
            </li>
            <li class="ac-gn-bagview-nav-item ac-gn-bagview-nav-item-favorites">
                <a href="<?php echo base_url();?>welcome/warranty"  class="ac-gn-bagview-nav-link ac-gn-bagview-nav-link-bag">
                    Warranty
                </a>
            </li>
             <li class="ac-gn-bagview-nav-item ac-gn-bagview-nav-item-favorites">
                <a href="<?php echo base_url();?>welcome/sale_support" class="ac-gn-bagview-nav-link ac-gn-bagview-nav-link-bag">
                    After Sales Support
                </a>
            </li>
           </ul>
            </li>
            
           
            <li><a href="<?php echo base_url();?>contact-us">Contact Us</a></li>
      <li><a href="<?php echo base_url();?>Login" data-ac-autom="gn-bagview-link-favorites">
      <?php if(empty($this->session->userdata('logged_in'))){ ?>
                    <img src="<?php echo base_url();?>assests/img/signIn1.png" class="cart-thumb" alt=""> LogIn/SignUp
                </a></li>
        <?php } ?>        
                 
 <li class="button-dropdown">
                        <a href="javascript:void(0)" class="dropdown-toggle">
                            <i class="fa fa-shopping-bag" style="color:#fff;margin-top: 10px">      
                              1                            </i>
                            
                        </a>
<ul class="dropdown-menu ac-gn-bagview-nav-list ac-gn-bagview-nav-nobtn">
          <?php if(! empty($this->session->userdata('logged_in'))){ ?>
            <li class="ac-gn-bagview-nav-item ac-gn-bagview-nav-item-bag">
                <a href="" data-evar1="[pageName] |  | bag overlay |  | bag" class="ac-gn-bagview-nav-link ac-gn-bagview-nav-link-bag" data-ac-autom="gn-bagview-link-bag"><img src="<?php echo base_url();?>assests/img/signIn.png" class="cart-thumb" alt="">
                      <?php echo $this->session->userdata('logged_in')['name'];?></a>
            </li>
            <?php } ?>
            <li class="ac-gn-bagview-nav-item ac-gn-bagview-nav-item-favorites">
                <a href="<?php echo base_url();?>bag" data-evar1="[pageName] |  | bag overlay |  | favorites" class="ac-gn-bagview-nav-link ac-gn-bagview-nav-link-favorites" data-ac-autom="gn-bagview-link-favorites"><img src="<?php echo base_url();?>assests/img/bag1.png" class="cart-thumb" alt="">
                    Bag
                </a>
            </li>
       <!--     <li class="ac-gn-bagview-nav-item ac-gn-bagview-nav-item-orders">
                <a href="#" data-evar1="[pageName] |  | bag overlay |  | orders" class="ac-gn-bagview-nav-link ac-gn-bagview-nav-link-orders" data-ac-autom="gn-bagview-link-orders"><img src="http://www.ip-ae.com/assests/img/favorites (1).png" class="cart-thumb" alt="">
                    Favorites
                </a>
            </li>-->
            <?php if(! empty($this->session->userdata('logged_in'))){ ?>
            <li class="ac-gn-bagview-nav-item ac-gn-bagview-nav-item-account">
                <a href="<?php echo base_url();?>account" data-evar1="[pageName] |  | bag overlay |  | account" class="ac-gn-bagview-nav-link ac-gn-bagview-nav-link-account" data-ac-autom="gn-bagview-link-account"><img src="<?php echo base_url();?>assests/img/account (1).png" class="cart-thumb" alt="">
                    Account
                </a>
            </li>
            <li class="ac-gn-bagview-nav-item ac-gn-bagview-nav-item-signOut">
                <a href="<?php echo base_url();?>welcome/logout" data-evar1="[pageName] |  | bag overlay |  | signOut" class="ac-gn-bagview-nav-link ac-gn-bagview-nav-link-signOut" data-ac-autom="gn-bagview-link-signOut"><img src="<?php echo base_url();?>assests/img/signIn.png" class="cart-thumb" alt="">
                    Sign out 
                </a>
            </li>
            <?php } ?>
        </ul>
                    </li>
        
                </ul>
            </div><!-- /.navbar-collapse -->
      
        </div>   
    </nav>
 
    <!-- End Navigation -->

    <div class="clearfix"></div>
<div class="pld">
  <div class="check-out-area">
    <!-- Start Content -->
  <div class="container" ">
  <?php if(!empty($this->session->flashdata('message'))){ 
    ?> 
  <div class="alert alert-success" style="    text-align: center;">
  <?php
    echo $this->session->flashdata('message');

?>
</div>
<?php } ?>   
 <div class="chrd"><b>After Sales Support</b></div> 
<div class="row">
<div class="col-md-6 col-xs-12 col-sm-12">
<h4 class="pri-head ret-p">Option 1:</h4>
<h5 class="pri-head ret-p">Apple Stores:</h5> <p class="ret-p">You can visit your nearest Apple Store for warranty service</p>
<hr>
<h5 class="pri-head ret-p">Apple Store, Yas Mall</h5>
<p>Yas Mall <br>Yas Island, Abu Dhabi</p>
<hr>
<h5 class="pri-head">Apple Store, Dubai Mall</h5> 
<p>The Dubai Mall <br>Downtown, Dubai </p>
<hr>
<h5 class="pri-head">Apple Store, Mall of the Emirates</h5> 
<p>Mall of the Emirates <br>Al Barsha 1, Dubai </p>

<br><br>

<h4 class="pri-head ret-p">Option 2:</h4>
<h5 class="pri-head ret-p">Apple Authorized Service Providers:
</h5> <p class="ret-p"> You can also visit any of the Apple authorized service providers for warranty service</p>
<hr>
<h5 class="pri-head ret-p">MDS-Aar
</h5>
<p class="ret-p" >Silver Building - Muroor Road, Before Al Jazeera Club<br>
Abu Dhabi, 46613<br>
+971 2 404 6868
 </p>
<hr>

<h5 class="pri-head">Sharaf DG - Abu Dhabi Mall</h5> 
<p class="ret-p" >Tourist Club Area, Sharaf Dg Unit Number I Zone -42, level 2<br>
Abu Dhabi,<br>
800-344357
</p>
<hr>
<h5 class="pri-head">Makina Technologies LLC</h5> 

<p class="ret-p" >Saratoga Complex, Shop# 09 (Behind Holiday Inn) Street 4a<br>

Al Barsha 1, Dubai<br>
+971 4 392 8484<br>
</p>
<hr>
<h5 class="pri-head">Sharaf DG LLC</h5> 

<p class="ret-p" >Apple Authorized Service Provider<br>

Times Square Centre, Sheikh Zayed Road, P.O. Box 31064,Dubai<br>
800-344357<br>
</p>
<hr>
<h5 class="pri-head">Mediacast Trading LLC</h5> 

<p class="ret-p" >
G3 Emerald Building, Oud Metha Po Box 13973<br>
Dubai<br>
+971 4 388 9044
<br>
</p>
<hr>
<h5 class="pri-head">iStyle (ABM care)
</h5> 

<p class="ret-p" >
Unit F272 B1, East Atrium, New Ext. Sahara Centre<br>
Sharjah<br>
800-2262
<br>
</p>
<hr>
<h5 class="pri-head">ABM Care Computer Service LLC</h5> 

<p class="ret-p" >
Thuraya Telecom Twr, 7&8, Tecom P.O. box 50187<br>
Dubai<br>
800-2262
<br>
</p>



</div>



<div class="col-md-6 col-xs-12 col-sm-12">

<h4 class="pri-head ret-p">Option 3:</h4> 

<p class="ret-p" ><h5 class="pri-head">After Sales support by iP-ae.com:</h5>
You can contact us and we will have it collected, serviced and return it back to you.

</p>
<p class="ret-p text-justify">Please fill the details of the defective unit in the service form and send it to the below mail id. Also attach the proof of purchase (Customer invoice). We will arrange collection and delivery. Turn Around time is 10 – 15 working days depending on Apple Authorized Service Provider (AASP) TAT.</p>
<p class="ret-p">Email id - info@ip-ae.com  </p>
<br><br>
<form action="<?php  echo base_url('welcome/submit_support_form');?>" method="post" onsubmit="return validatersupport()" >
<p class="text-justify ret-p"><strong>You can claim warranty for your product in multiple ways:</strong></p>

<div class="form-group">
    <label for="exampleInputEmail1"> First Name <span class="error">*</span></label>
    <input type="text" class="form-control alphaonly" id="first_name" name="first_name" placeholder="Enter your First Name">
    <?php echo form_error('first_name','<div class="error">', '</div>'); ?>
    <p id="error_first_name" class="error"></p> 
  
  </div>
<div class="form-group">
    <label for="exampleInputEmail1">Last Name <span class="error">*</span></label>
    <input type="text" class="form-control alphaonly" id="last_name" name="last_name" placeholder="Enter your Last Name">
    <?php echo form_error('last_name','<div class="error">', '</div>'); ?>
    <p id="error_last_name" class="error"></p> 
  
  </div>  
<div class="form-group">
    <label for="exampleInputEmail1">IMEI <span class="error">*</span></label>
    <input type="text" class="form-control contact" id="imei" name="imei" placeholder="Enter your IMEI">
  <?php echo form_error('imei','<div class="error">', '</div>'); ?>
  <p id="error_imei" class="error"></p> 
  
  </div>
  <div class="form-group">
    <label for="serial_number">Serial Number <span class="error">*</span></label>
    <input type="text" class="form-control contact" id="serial_number" name="serial_number" placeholder="Enter your Serial Number">
  <?php echo form_error('serial_number', '<div class="error">', '</div>'); ?>
  <p id="error_serial_number" class="error"></p> 
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Model Description <span class="error">*</span></label>
    <input type="text" class="form-control " id="model_number" name="model_number" placeholder="Enter your Model Number">
  <?php echo form_error('model_number', '<div class="error">', '</div>'); ?>
  <p id="error_model_number" class="error"></p> 
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Invoice No <span class="error">*</span></label>
    <input type="text" class="form-control" id="order_id" name="order_id" placeholder="Enter your Invoice No">
  <?php echo form_error('order_id', '<div class="error">', '</div>'); ?>
  <p id="error_order_id" class="error"></p> 
  </div>

  


   <div class="row">
  <div class="form-group col-sm-3">
    <label for="exampleInputPassword1">Contact Number <span class="error">*</span></label>
  <select  class="contact1 form-control " id="country"  name="country" >
                      <option value="971" >+971</option>
                        <option value="91" >+91</option>
                      </select>
            <p></p>
  </div>
  <div class="form-group col-sm-9">
  <label for="exampleInputPassword1"> &nbsp; </label>
  <input type="text" class="form-control contact" id="contact_number" name="contact_number" minlength="9" maxlength="10" placeholder="Enter the Contact Number">
  <?php echo form_error('contact_number', '<div class="error">', '</div>'); ?>
  <p id="error_contact_number" class="error"></p> 
  
  </div>
  
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email Id<span class="error">*</span></label>
    <input type="email" class="form-control" id="email_id" name="email_id" placeholder="Enter the Email Id" maxlength="100">
   <?php echo form_error('email_id', '<div class="error">', '</div>'); ?>
   <p id="error_email_id" class="error"></p> 
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Exact Problem with Unit <span class="error">*</span></label>
    <textarea class="form-control" id='issue_per_unit' name="issue_per_unit" placeholder="Exact Problem with Unit"></textarea>
    <p id="error_issue_per_unit" class="error"></p>
  <?php echo form_error('issue_per_unit', '<div class="error">', '</div>'); ?>
  </div>
  
  <button type="submit" class="btn btn-default">Submit</button>
</div> 
</form>


</div>
</div>
</div> 


</div>

</div>
       
  
    <script type="text/javascript">
      function validatersupport(){
         var status=1;
        if($("#first_name").val()==""){
          $("#error_first_name").html("Enter your First name");
          status=0;

       }
        if($("#last_name").val()==""){
          $("#error_last_name").html("Enter your Last name");
          status=0;

       }
        if($("#imei").val()=="")
        {
          $("#error_imei").html("Enter your IMEI number");
          status=0;
        }
        if($("#contact_number").val()=="")
        {
          $("#error_contact_number").html("Enter your Contact Number");
          status=0;
        }
        
        if($("#serial_number").val()=="")
        {
          $("#error_serial_number").html("Enter your Serial Number");
          status=0;
        }
        if($("#model_number").val()=="")
        {
          $("#error_model_number").html("Enter your Model Number");
          status=0;
        }
        if($("#order_id").val()=="")
        {
          $("#error_order_id").html("Enter your Invoice No");
          status=0;
        }
        if($("#email_id").val()=="")
        {
          $("#error_email_id").html("Enter your Email Id");
          status=0;
        }
        if($("#issue_per_unit").val()=="")
        {
          $("#error_issue_per_unit").html("Enter your Issue Per Unit");
          status=0;
        }
        if(status==0)
          {return false;}
        else{
          return true;
        }


      }
    </script>
     <script type="text/javascript">


$('.alphaonly').bind('keyup blur',function(){ 
    var node = $(this);
    node.val(node.val().replace(/[^a-zA-Z]/g,'') ); }
);

$('.contact').bind('keyup blur',function(){ 
    var node = $(this);
    node.val(node.val().replace(/[^0-9]/g,'') ); }
);


</script>

   <!-- End Content -->
    
<?php include("footer.php");?>
    
    <!-- START JAVASCRIPT -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assests/js/bootstrap.min.js"></script>
    
    <!-- Bootsnavs -->
    <script src="<?php echo base_url();?>assests/js/bootsnav.js"></script>

</body>
</html>