<!DOCTYPE HTML>
<html class="no-js" lang="de">  <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">

    <title>Apple iphone</title>
     <link rel="icon" type="image/png"   href="<?php echo base_url();?>assests/img/favicon.png" />

    <!-- CSS -->
    <link href="<?php echo base_url();?>assests/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url();?>assests/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assests/css/bootsnav.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assests/css/style.css" rel="stylesheet">
     <link href="<?php echo base_url();?>assests/css/bootstrap.css" rel="stylesheet">
       <!-- CSS -->
    
    
</head>
<body>     
        
     <!-- Start header-->

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


    <!-- End header -->

    <div class="clearfix"></div>

    <!-- Start Content -->
    <div class="nav-wrapper">
  <ul class="submenu">
    <!-- <li>
      <figure>
        <img src="https://images.apple.com/v/iphone/home/u/images/home/familybrowser/iphone7_dark_large.svg"/>
      </figure>
        <p class="para">iPhone 7<p>
    </li>
    <li>
    <figure>
        <img src="https://images.apple.com/v/iphone/home/u/images/home/familybrowser/iphone6s_dark_large.svg"/>
      </figure>
         <p class="para">iPhone 6s</p>
    </li>
    <li>
   <figure>
        <img src="https://images.apple.com/v/iphone/home/u/images/home/familybrowser/iphonese_dark_large.svg"/>
      </figure>
        <p class="para"> iPhone SE </p>
    </li> -->
    <li>
	<a href="#">
   <figure>
         <img src="https://images.apple.com/v/iphone/home/u/images/home/familybrowser/iphone_acc_dark_large.svg"/>
      </figure>
        <p class="para">Apple Accessories</p>
	</a>
    </li>
    <li>
   <figure>
        <img src="https://images.apple.com/v/iphone/home/u/images/home/familybrowser/iphone_acc_dark_large.svg"/>
      </figure>
         <p class="para">Accessories</p>
    </li>
    <li>
   <figure>
        <img src="https://images.apple.com/v/iphone/home/u/images/home/familybrowser/iphone_comp_dark_large.svg"/>
      </figure>
        <p class="para">Compare</p>
    </li>
  </ul>
</div>
<header class="section hero theme-dark" data-analytics-section-engagement="name:hero">
			<div class="section-content">
				<h2 class="image-hero-headline-eyebrow">iPhone</h2>
				<h2 class="fp-hero-headline">This is 7.</h2>
				<span class="fp-small-block-link">
					<a class="cta more nowrap typography-intro-text" href="#" data-analytics-region="learn more" data-analytics-title="iphone 7 hero - learn more">Learn more</a>
					<br>
					<a class="cta more nowrap typography-intro-text" href="#" data-analytics-region="learn more" data-analytics-title="iphone 7 hero - buy">Buy</a>
					
				</span>
				<a href="#" data-analytics-region="learn more" data-analytics-title="iphone 7 hero - learn more"><figure class="image-iphone7-hero"></figure></a>
			</div>
		</header>
		<section class="section section-gutters section-limited max-width theme-dark" data-analytics-section-engagement="name:product-limited">
			<div class="row row-limited">
				<div class="product-red-text-content column text-center large-6 large-push-6 medium-12 medium-push-0">
					<div class="text-wrapper text-wrapper-alt">
						<span class="violator violator-special">Special Edition</span>
						<h3 class="section-headline typography-section-headline" aria-hidden="true" aria-label=" " role="presentation">
						<span class="span-iphone" aria-hidden="true" aria-label=" " role="presentation">iPhone&nbsp;7 </span><figure class="product-red-logo"><span class="visuallyhidden" aria-hidden="true" aria-label=" " role="presentation">Product Red™</span></figure>
						</h3>
						<span class="visuallyhidden" role="heading" aria-level="3">iPhone 7 Product Red™</span>
						<div class="limited-links">
							<span class="fp-moreblock moreblock-centered">
								<a class="more" href="#" data-analytics-region="learn more">Learn more about&nbsp;(RED)®</a>
								<a class="more more-nowrap" href="#" data-analytics-region="learn more">Buy</a>
							</span>
						</div>
					</div>
				</div>
				<div class="product-red-graphic-content column large-6 large-pull-6 medium-12 medium-pull-0">
					<figure class="product-red-graphic"></figure>
				</div>
			</div>
		</section>
		<!--footer-->



<?php include("footer.php");?>
    
	<!-- START JAVASCRIPT -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assests/js/bootstrap.min.js"></script>
    
    <!-- Bootsnavs -->
    <script src="<?php echo base_url();?>assests/js/bootsnav.js"></script>

</body>
</html>
