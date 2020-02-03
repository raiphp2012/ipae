<!DOCTYPE HTML>
<html>  
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">

    
    <title>Ipae iphone</title>
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
 

        

    <div class="container" style="margin-top: 20px; margin-bottom: 30px;">

  
     <div class="row">

    

     <div class="col-md-7 ">
     <h4 class="text-center " style="margin-bottom: ; margin-top: 100px;"> Your Shopping cart is empty<br>

<br>
<!-- <b>There are currently no items in your shopping cart.
Please click on 'CONTINUE SHOPPING' button below to continue</b> --></h4>
    <div class="button-set">
     <button class="btn btn-button  gray9-bg white center-block " style="color: white; font-weight: 800; " ><a href="<?= base_url();?>">CONTINUE SHOPPING</a></button>
     </div>
     </div>

     <div class="col-md-5">
    <img id="banner1" class="img-responsive" src="<?php echo base_url();?>assests/img/emptycart.png" alt="emptycard_image">
    </div>
                                
  </div>
        </div>

        <br>
        <br>

<?php include("footer.php");?>

    
    <!-- START JAVASCRIPT -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assests/js/bootstrap.min.js"></script>
    
    <!-- Bootsnavs -->
    <script src="<?php echo base_url();?>assests/js/bootsnav.js"></script>

</body>
</html>
