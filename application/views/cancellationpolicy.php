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

    <title>Cancellation Policy - IPAE</title>
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
 <div class="pld">
	<div class="check-out-area">
    <!-- Start Content -->
  <div class="container" ">   
		<div class="chrd"><b>Cancellation Policy</b></div> 
<p class="cancel-head">It is Ok to change your mind!!!</p>
<p class="cancel-head"> You have already confirmed the order but want to cancel it?</p>
<p class="cancel-head">You can cancel it by clicking the below button if it has not been shipped already.</p>
<p class="cancel-head" >click Here<a href="#"><button style="margin-left:20px;" class="btn btn-danger">Cancel Your Order</button></a></p>
<p class="cancel-head">If the order is already shipped and in transit,then too you need not worry as we have a 7 days return policy<a href="#"><button style="margin-left:20px;" class="btn btn-danger">Return Policy</button></a>
</p>
</div>
</div>
</div>
       
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
