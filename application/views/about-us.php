<!DOCTYPE HTML>
 <html class="no-js" lang="de">  <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>About Us - IPAE</title>
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
 <div class="pld">
	<div class="check-out-area">
    <!-- Start Content -->
  <div class="container" ">   
 <div class="chrd"><b>About Us</b></div> 
<div class="row">
<div class="col-md-12 col-xs-12 col-sm-12">
<p>Do you get excited when you think of an iPhone, especially a new one? Whether you want to buy one for yourself or for a loved one</p>
<p>Yes…; well count yourself part of our club. </p>
<p>…but many of us have not had a good experience while acquiring one.</p>
<p>This gave birth to the idea of starting this platform <a href="http://www.ip-ae.com/" ><strong>www.iP-ae.com </strong> </a>to provide a secure buying experience where we are not bothered whether our exciting iPhone is a fake, an imitation, tempered with in anyway and most importantly whether it has been procured legally by the vendor approved by the local telecom regulatory authority of the land that I live in.</p>

<p>…and yes there are many options in town if one is prepared to venture out and stand in line at many brick and mortar stores; what about the convenience of my home, my office desk or on the go without having to spend more than 10 minutes procuring one.</p>
<p>Well this is where we come in as we are the only e-commerce platform exclusively dealing in authorized iPhone stocks amongst the 30+ other such websites (as on September 2017) including the market leaders.</p>
<p>Oops sorry, no we are not the only one, we are the second one but then the only other secure one cannot match our wonderful offers and pricing. <b> <a href="https://goo.gl/SGdXxC">Hot offer</a></b></p>
<p>So what are you waiting for, go ahead and enjoy a seamless shopping experience which combines the best of both worlds, security that comes from availability of only authorized stocks and pricing that even fly-by-night web operators cannot match consistently, day after day.</p>
<p>How do you know that our claims are correct. Well, all phones that we sell come with the TRA id marked on the phone.  <br><br>Please check this sticker when you buy yours <img src="assests/img/tid.jpg"></p>
<p>We at iP-ae.com are professionals with experience in Smart Phone and e-commerce industries, more importantly we are aware consumers like you who have gathered all the good and bad experiences in procuring iPhones for six straight years. This is our attempt to distill all the good experiences and bring a smile to your face when you buy one.</p>
<p class="monu" style="font-weight: bold;margin-top: 20px;">Happy Shopping!</p>
</div>
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