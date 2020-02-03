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

    <title>Thank You Page - IPAE</title>
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

    <!-- End Navigation -->

    <div class="clearfix"></div>

    <!-- Start Content -->
  
<div class="container" >


 <!--Check Box one-->                   

<div class="col-md-6 col-xs-12 col-sm-12">
    <div class="ae-body">
	<br><br><br>
<h1 class="text-center">Thank You.</h1>
<h3 class="text-center">Your order was completed successfully.</h3>
    </div>


</div>
<!--Check boxt 2-->


<!--Check box 3-->
<div class="col-md-6 col-xs-12 col-sm-12">

    <div class="ae-body text-left">
	 <p> <img src="<?php echo base_url();?>assests/img/sms.jpg" style="border:0px" /> <?php if ($this->session->flashdata('success')) { ?>
             <?= $this->session->flashdata('success') ?>  
            <?php } ?>
<p> You can the My Account page at any time to check the the status of your order. Or click here to <a href="<?php echo base_url();?>"><b>View Order details</b></a>.</p>
<br><br>
<a href="<?php echo base_url();?>"><button class="btn btn-warning" style="border-radius:5px;">View order</button></a>


<a href="<?php echo base_url();?>"><button class="btn btn-warning border-radius" style="border-radius:5px;">Continue Shopping</button></a>
    </div>

</div>
     
  



   </div>
</div>






 
	
	
	<!--footer-->


 <?php include("footer.php");?>

    
	<!-- START JAVASCRIPT -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assests/js/bootstrap.min.js"></script>
    
    <!-- Bootsnavs -->
    <script src="<?php echo base_url();?>assests/js/bootsnav.js"></script>

 <script type="text/javascript">

$(document).ready(function()
{
    $('.carousel').carousel({
      interval: 2000
    });

    $('.carousel').carousel('next');
});


</script>



</body>
</html>
