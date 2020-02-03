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

    <title>FAQs - IPAE</title>
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
		<div class="chrd"><b>Frequently Asked Questions (FAQs)</b></div>

<h5 class="faq-head ">Q. I received a defective item, can I get a refund? </h5>
<p class="text-justify">In case the item you received is defective, you could return an item in the same condition as you received it with the original box and/or packaging intact. Once we
receive the returned item, we will inspect it and if the item is found to be defective (as 
per Apple Service Policy https://support.apple.com/en-ae/iphone/repair/service) we 
will process the refund along with any shipping fees incurred.
</p>
<h5 class="faq-head ">Q. I received a wrong item, how can I return it? </h5>
<p class="text-justify">In the unusual circumstance where the item received is wrong, you can return the item in the same condition you received and in the original box and/or packaging intact. Once we receive the returned item, we will process the refund along with free 7 day returns.
</p>
<h5 class="faq-head ">Q. When are ‘Returns’ not possible? </h5>
<p class="text-justify">There are a certain scenarios (below examples; but not limited to) where it is difficult for us to support returns:
</p>
<ul>
    <li>Return request is made after 7 days from delivery.



</li>
     <li>Product is not in the same condition as you received it.</li>
      <li>Products with tampered or missing serial numbers.</li>
       <li>Anything missing from the package you've received including price tags, labels, original packing, freebies and accessories.</li>
</ul>
<h5 class="faq-head ">Q. How long does it take the courier to collect the returned items? </h5>
<p class="text-justify">Typically, Courier representative will contact you within 3-5 days from the day you requested a return. However, it might sometimes take up to two weeks for a courier to collect the item.</p>
<h5 class="faq-head ">Q. I paid through Cash on Delivery, how will I receive a refund for my item?</h5>
<p class="text-justify">If you have paid through Cash on Delivery (COD), the money would be remitted to your UAE bank account and If you have paid through electronic means (Credit or Debit card), the paid amount will be refunded to your card. The amount paid may take up to a month to reflect in your card statement or Cash U, depending on your bank’s process.
</p>
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
