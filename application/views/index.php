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

    <title>Home - IPAE</title>
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
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
   

    
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
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->


  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    

    <?php 	$i="0";


foreach($slider as $row):?>
<?php $i=$i+1;?>

    <div class="item <?php if($i==1) { ?>active<?php } ?>">
       <a href="<?php echo $row->url; ?>"> <img class="center-block" src="<?php echo $row->slider_image_path; ?>" style="width:100%;" alt="<?php echo $row->slider_name; ?>"></a>
     
    </div>
  <?php endforeach; ?>
	
  
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="clearfix"></div>


<!-- <div class = "row well" >
  
   <div class = "col-sm-6 col-md-3">
    
      <a href = "<?php //echo base_url()?>category/iphone" class = "thumbnail">
    <h5 class="text-center">Iphone</h5>
         <img src = "<?php //echo base_url();?>assests/iphone.png"  style="height:300px; width:300px;" alt = "Generic placeholder thumbnail">
      </a>
   </div>
    <div class = "col-sm-6 col-md-3">
    
      <a href = "<?php //echo base_url()?>category/accessories" class = "thumbnail">
    <h5 class="text-center">Accessories</h5>
         <img src = "<?php //echo base_url();?>assests/acceserious.png" style="height:300px; width:300px;" alt = "Generic placeholder thumbnail">
      </a>
   </div>
    <div class = "col-sm-6 col-md-3">
    
      <a href = "#" class = "thumbnail">
    <h5 class="text-center">Support</h5>
         <img src = "<?php //echo base_url();?>assests/support.png" style="height:300px; width:300px;" alt = "Generic placeholder thumbnail">
      </a>
   </div>
    <div class = "col-sm-6 col-md-3">
    
      <a href = "<?php //echo base_url();?>Contact-Us" class = "thumbnail">
    <h5 class="text-center">Contact us</h5>
         <img src = "<?php //echo base_url();?>assests/contactus.png" style="height:300px; width:300px;" alt = "Generic placeholder thumbnail">
      </a>
   </div>

   
   
   
</div> -->

 <!--   <div class="row">
<div class="main_portfolio_content">
                                <div class="col-md-3 col-sm-4 col-xs-12 single_portfolio_text" id="hello">
                                    <img src="<?php echo base_url();?>assests/iphone.JPG" alt="" />
                                    <div class="portfolio_images_overlay text-center">
                                        <h6>iPhone</h6>
                                        
                                        <a href="<?php echo base_url()?>category/iphone" class="btn btn-primary">Click here</a>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-12 single_portfolio_text" id="hello">
                                    <img src="<?php echo base_url();?>assests/acceserious.JPG" alt="" />
                                    <div class="portfolio_images_overlay text-center">
                                        <h6>Accessories</h6>
                                      
                                        <a href="<?php echo base_url()?>category/accessories" class="btn btn-primary">Click here</a>
                                    </div>                
                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-12 single_portfolio_text" id="hello">
                                    <img src="<?php echo base_url();?>assests/support.JPG" alt="" />
                                    <div class="portfolio_images_overlay text-center">
                                        <h6>Support</h6>
                                        
                                        <a href="#" class="btn btn-primary">Click here</a>
                                    </div>                
                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-12 single_portfolio_text" id="hello">
                                    <img src="<?php echo base_url();?>assests/contactus.jpg" alt="" />
                                    <div class="portfolio_images_overlay text-center">
                                        <h6>contact</h6>
                                        
                                        <a href="<?php echo base_url();?>Contact-Us" class="btn btn-primary">Click here</a>
                                    </div>                
                                </div>
                              
                             
                           
          
            
            
            
              
             
          </div>
          
          
          
   
   
</div> -->



 
	
	
	<!--footer-->


 <?php include("index_footer.php");?>

    
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




</body>
</html>
