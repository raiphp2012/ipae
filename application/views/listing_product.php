<!DOCTYPE HTML>
<html>  
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>Apple iphone</title>

    <!-- CSS -->
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
 <div class="div-card">
 <div class="container">





    <div class="row">

    <?php

$total=count($product);
if($total>0)
    {
    ?>

    <?php foreach($product as $row):?>
        <div class="col-xs-12 col-sm-4 col-md-3">
            <div class="card">
			<div class="card-contain well">
                <a class="img-card" href="#">
                    <img class="card-image" src="<?php echo $row->product_image1;?>" class="img-responsive">
                </a>
			</div>
                <br />
                <div class="card-content">
                    <h4 class="card-title text-center">
                        <a href="#">
                         <?php echo $row->product_name;?>
                        </a>
                    </h4>
					<h4 class="card-title1 text-center">
                        <a href="#">
                            Storage:128 GB
                        </a>
                    </h4>
					<h4 class="card-title1 text-center">
                        <a href="#">
                          <?php echo $row->product_price;?>
                        </a>
                    </h4>
                    
                </div>
                
            </div>
        </div>

		    <?php endforeach;?>
<?php }
    else { ?>

    comming soon

    <?php } ?>
	
        </div>






		

</div>
 </div>
   




	
	
	
	<!--footer-->

<?php echo include("footer.php"); ?>


    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assests/js/bootstrap.min.js"></script>
    
    <!-- Bootsnavs -->
    <script src="<?php echo base_url();?>assests/js/bootsnav.js"></script>

</body>
</html>
