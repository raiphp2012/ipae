<!DOCTYPE HTML>

 <html class="no-js" lang="de"> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">

   <title><?php echo $title;?> - IPAE</title>

    <!-- CSS -->
    <link href="<?php echo base_url();?>assests/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url();?>assests/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assests/css/bootsnav.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assests/css/style.css" rel="stylesheet">
     <link href="<?php echo base_url();?>assests/css/bootstrap.css" rel="stylesheet">
    
   

     <style type="text/css">
  .error{
    color: red;
  }

  .card-contain>.img-card{
  max-width: 100%;
  
  -moz-transition: all 0.3s;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
} 
 .card-contain:hover img {
  -moz-transform: scale(1.1);
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
}

#banner1
{
 width:100%;
 height:auto;
 margin-top:10px;
}
.text
{
 padding-top:100px;
 font-family:spectral;
 margin-left:
}


</style>
    
</head>
<body>     
        




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






 <div class="clearfix"></div>



<div class="container" style="margin-top: 100px; margin-bottom: 220px;">
   <div class="row" >
   <div class="col-md-7 ">
   <h3 class="text-center text"> We are working very hard to make this product available for you. 
Stay Tuned Something big is 
Coming Soon</h3></div>
  <div class="col-md-5">
      <img id="banner1" src="<?php echo base_url();?>assests/img/banner.png" alt="iPhone 7">
    </div>
  </div>
    </div>
















<?php include("footer.php");?>
    
    <!-- START JAVASCRIPT -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assests/js/bootstrap.min.js"></script>
    
    <!-- Bootsnavs -->
    <script src="<?php echo base_url();?>assests/js/bootsnav.js"></script>

    <script src="<?php echo base_url();?>assests/js/validation.js"></script>


<!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5970774421d83a55"></script> 


</body>
</html>
