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

    <title>Apple iphone</title>
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
<div class="check-out-area"> 
<div class="container">
  <div class="header-banner">

 <!--  <img src="<?php echo base_url();?>assests/ios/legal_large.jpg"; class="img-responsive" style=""> -->
  </div>
<div class="section" style="padding-top:20px">
<a href="<?php echo base_url();?>privacy-policy" style="color:#000"><h3 class="text-left btn-link">Privacy</h3><p class="text-justify">We value the trust you place in Naman General Trading LLC. That’s why we insist upon the highest standards for secure transactions and customer information privacy. Please read the following statement to learn about our information gathering and dissemination practices.</p><h5 style="text-align: right;color: red">Read More</h5></a>


<a href="<?php echo base_url();?>refund-policy" style="color:#000"><h3 class="text-left btn-link">Refund Policy</h3><p class="text-justify">The Return And Exchange Policy Of Naman General Trading LLC Is Formulated Keeping In Mind The Need And Requirement Of The Local And Common People. There Is No Hidden Terms And Conditions For This. Everything Is Written Clearly On The Website. According To This Policy, If You Wish To Return Or Exchange Any Item Purchased From Naman General Trading LLC, Then It Should Be Done Within 30 Days Of The Receipt.</p><h5 style="text-align: right;color: red">Read More</h5></a>


<a href="<?php echo base_url();?>term-condition" style="color:#000"><h3 class="text-left btn-link">Terms & Conditions</h3><p class="text-justify">These Standard Terms Of Sale (“Terms Of Sale”) Is An Electronic Record In The Form Of An Electronic Contract Formed Under Information Technology Act, 2000 And Rules Made Thereunder And The Amended Provisions Pertaining To Electronic Documents / Records In Various Statutes As Amended By The Information Technology Act, 2000. These Terms Of Sale Does Not Require Any Physical, Electronic Or Digital Signature.</p><h5 style="text-align: right;color: red">Read More</h5></a>



</div>
</div>
</div>



 

 <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5970774421d83a55"></script> 
  
  
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
