<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="de">  <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <meta name="description" content="">
  <meta name="keywords" content="">

    <title>Event - IP-AE</title>
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

       <div class="container" style="padding-top: 30px; padding-bottom: 30px;">
       <div class="row"><div class="col-xs-6"><h1 class="txt-deco">2016</h1></div>
       <div class="col-xs-6"><h1 class="txt-deco">2017</h1></div></div>
  <div class="row">
    <div class="col-sm-8">
      <section class="videosection">
            <div class="videodiv">
                <section class="videomac">
                   
                        <div class="videomac-container">
                            <div>
                                <iframe style="width: 240px; height: 130px;margin-left: 240px;" src="//www.youtube.com/embed/NS0txu_Kzl8" allowfullscreen="" frameborder="0"></iframe>
                            </div>
                        </div>
                  
                </section>
            </div>
        </section>
 
    </div>
     <div class="col-sm-4">
     <h4 class="txt-deco1">Watch the keynote live from the Steve Jobs Theater on September 12 at 09:00 p.m. UAE Time </h4>
     <img class="img-responsive center-block" style="width:160px;height:160px;" src="<?php echo base_url(); ?>assests/img/apple-small.png">
    </div>
  </div>
</div> 
    <!-- End Content -->
<!--     <section class="videosection">
            <div class="videodiv">
                <section class="videomac">
                    <div class="container">
                        <div class="videomac-container">
                            <div>
                                <iframe style="width: 100%; height: 300px" src="//www.youtube.com/embed/NS0txu_Kzl8" allowfullscreen="" frameborder="0"></iframe>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section>
  -->

<?php   include("footer.php");?>
    
  <!-- START JAVASCRIPT -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assests/js/bootstrap.min.js"></script>
    
    <!-- Bootsnavs -->
    <script src="<?php echo base_url();?>assests/js/bootsnav.js"></script>

</body>
</html>
