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

    <title>Return Policy - IPAE</title>
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
		<div class="chrd"><b>Return Policy</b></div>
				
<h4 class="pri-head ">Quick and Easy Returns</h4>

<p class="text-justify ret-p">You can return any product purchased without worrying on the shipping cost Full Refund is guaranteed in case you receive a Defective / Dead on Arrival Unit.</p>
<h4 class="pri-head">7 Days Return Policy</h4>



<p class="text-justify ret-p">The refund request to be made within 7 days of accepting the delivery.</p>

<h4 class="pri-head">Guaranteed Authenticity</h4>
<p class="text-justify ret-p">If your purchase is found to be fake/counterfeit, you will receive a full refund along with any shipping fees paid.</p>


<h4 class="pri-head">Return Policy Process: </h4>
	
<img class="center-block" src="<?php echo base_url();?>assests/img/flowchart.png" alt="return policy" style="border:0px" >
</div>
</div>
</div>
       
    <!-- End Content -->
	
	

<?php echo include("footer.php");?>
    
	<!-- START JAVASCRIPT -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assests/js/bootstrap.min.js"></script>
    
    <!-- Bootsnavs -->
    <script src="<?php echo base_url();?>assests/js/bootsnav.js"></script>

</body>
</html>
