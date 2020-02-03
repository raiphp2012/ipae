<!DOCTYPE HTML>
<html class="no-js" lang="de">  <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">

     <title><?php echo $title;?> - IPAE </title>

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

       <style type="text/css">
         
div.nav-wrapper{
    
  white-space: nowrap;
  overflow-x: auto;
  -webkit-overflow-scrolling: touch;
  -ms-overflow-style: -ms-autohiding-scrollbar;
  height: 116px; }



       </style>
    
    
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
  <?php foreach($subcat as $row):?>

                   
      <li>
      <figure>
       <a href="<?=base_url();?><?php echo $this->uri->segment(2); ?>/subcategory/<?php echo $row->subcat_slug;?>"> <img src="<?php echo $row->subcat_banner1_path;?>" style="height:70px;"/></a>
      </figure>
      <a href="<?=base_url();?><?php echo $this->uri->segment(2); ?>/subcategory/<?php echo $row->subcat_slug;?>">  <p style="color:white; font-weight: 700;" class="para"><?php echo $row->subcat_name;?> </p>
 <?php   if($row->tra) { ?>
      <span style="padding-top: 5px;font-size: 11px;">TRA&nbsp;ID&nbsp;<?php echo $row->tra;?></span>
      <?php } ?>
    </li>
  <?php endforeach;?>
</ul>

<hr>
</div>
<header class="section hero theme-dark" data-analytics-section-engagement="name:hero">
			<div class="">
                          <img class="center-block text-center img-responsive" src="<?php echo $Banner;?>">
				 		</div>
		</header>
		 


<?php include("footer.php");?>
    
	<!-- START JAVASCRIPT -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assests/js/bootstrap.min.js"></script>
    
    <!-- Bootsnavs -->
    <script src="<?php echo base_url();?>assests/js/bootsnav.js"></script>

</body>
</html>
