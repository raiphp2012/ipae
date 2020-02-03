<?php

$backurl=current_url();
$this->session->set_userdata("backLink",$backurl);

?>

<?php $subcatId=$product['0']->subcat_id;?>
<!DOCTYPE HTML>

<html class="no-js" lang="de"> 
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">

  <title><?php $row_subcat=gesubCatNameFromCatId($subcatId);
  echo $row_subcat['subcat_name']; ?>  - IPAE </title>

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

  input[type=text] {
    width: 130px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url("http://localhost/ip.com/assests/searchh.png");
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
  }

  input[type=text]:focus {
    width: 100%;
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
<div class="div-card" >

 
  <div class="container">

    <?php  $a=$this->uri->segment(1);  ?>

    <div class="row">
      <div class="col-md-4 text-left"><h3><?php     echo $row_subcat['subcat_name']; ?>  </h3></div>
      <div class="col-md-4 text-center">
	  <?php if($a == 'accessories' || $subcatId=='7') { }else { ?>
	  <p style="margin-top:17px">
	  <small style="font-size:18px">Facetime is not available in the UAE</small>
	  </p>
	  <?php } ?>
	  </div>




      <div   class="col-md-4  text-right">
	  <p style="margin-top:10px">
	  <a href="javascript:history.back()"><button class="btn btn-primary"><< Back </button></a>
	  
        <?php 
        if($a == 'accessories' || $subcatId=='7') { ?>
        <?php } else { ?>
        <a href="<?php echo base_url();?>tech-speces/<?php echo $this->uri->segment(3);?>"><button class="btn btn-primary">Tech Specs</button></a>
        <?php } ?>
		</p>
      </div>
    </div>


    <hr style="width: 100%;   height: 1px; background-color:#f1f1f1;margin-top:0px !important;" />


    <br>


 
    <div class="row" id="div1" >
      <?php $count = 1; ?>
      <?php foreach($product as $row):?>
      <?php
       $d = modifyString($row->product_name);      
       ?>
       <div class="col-xs-12 col-sm-4   <?php if( $subcatId=='27') { ?>col-md-6<?php } else if($subcatId=='28' || $subcatId=='29'){  ?>col-md-4<?php } else { ?>col-md-3<?php } ?>">
        <div class="card">
          <div class="card-contain well">           
            <img class="card-image center-block" src="<?php echo $row->product_image1;?>" >            
          </div>        
          <div class="card-content">          
			<div class="fixd">
				<h6 class="card-title text-center">             
				 <?php echo $row->product_name;?>    
			   </h6>
			</div>  
         <?php
         if($this->uri->segment(1) == "accessories" || $this->uri->segment(1) == "Accessories")
		 {
           $tra=$row->tra;
           if($tra) {
            if($count == 1){
              ?>
              
              <?php } } }?>
              
              <?php if( $subcatId=='27') 
			  {            
              ?>
               <div class="row" style="margin: 0px !important">     
                <div class="col-xs-12"> 
                  <h4 style="font-size: 14px;font-weight: bold; text-align:center; color:#333">Pre-order 27.10</h4>                  
                  <h4 style="font-size: 14px;font-weight: bold; text-align:center; color:#333">Available 04.11 </h4>                
                </div>
				</div>               
                <?php
              }   
              else 
			  {  
		  
		  
		         if($row->price1!=''   )
				 {
?>					 
                <div class="row" style="margin: 0px !important">
                 
                 <div class="col-xs-6"> 
                  <h4 class="aed">AED <?php echo $row->price1;?></h4>
				  <p class='delivery-message' style="">Delivery on  <?php if( $row->launchdate > date('Y-m-d')) 
				  {
					 $ndate=date('Y-m-d', strtotime($row->launchdate));  
					echo date('d.m', strtotime($ndate));    
				  } 
				  else 
				  { 
			         $date=date('Y-m-d');
					  $ndate=date('Y-m-d',date(strtotime("+1 day", strtotime($date))));	
					echo date('d.m',date(strtotime("+1 day", strtotime($date))));		  
					}   ?></p>
                </div>
                
                
                <div class="col-xs-6"><span class="input-group-btn">
                 <a href="<?php echo base_url(); ?>addcart/<?php echo $row->id; ?>/1" class="btn btn-danger" id="crt1" type="submit" tabindex="-1"><span class="" aria-hidden="true">Add to cart</span></a>
               </span></div>
             </div>  


				 <?php } ?>
 <?php if($row->price2!=''   )
				 {
?>					

             <div class="row" style="margin: 0px !important">
               
               <div class="col-xs-6"> 
                <h4 class="aed">AED <?php echo $row->price2;?></h4>
				<p class='delivery-message'  >Delivery by  <?php 
									echo  date('d.m',date(strtotime("+3 day", strtotime($ndate))));		  
									  ?></p>
              </div>
              
              
              <div class="col-xs-6"><span class="input-group-btn">
                <a href="<?php echo base_url(); ?>addcart/<?php echo $row->id; ?>/2" class="btn btn-danger" id="crt1" type="submit" tabindex="-1"><span class="" aria-hidden="true">Add to cart</span></a>
              </span></div>
            </div>  


 <?php } ?>
<?php if($row->price3!=''   )
				 {
?>	
            <div class="row" style="margin: 0px !important">
             
             <div class="col-xs-6"> 
              <h4 class="aed">AED <?php echo $row->price3;?></h4>
			  <p class='delivery-message' >Delivery by  <?php 
									echo  date('d.m',date(strtotime("+10 day", strtotime($ndate))));		  
									  ?></p>
            </div>
            
            
            <div class="col-xs-6"><span class="input-group-btn">
              <a href="<?php echo base_url(); ?>addcart/<?php echo $row->id; ?>/3" class="btn btn-danger" id="crt1" type="submit" tabindex="-1"><span class="" aria-hidden="true">Add to cart</span></a>
            </span></div>
          </div>  

<?php } ?>
      <div class="row" style="margin: 0px !important">
       
       
        <div class="col-xs-6"> 
          <h4 class="aed">AED <?php echo $row->product_price;?></h4>
          
          
        </div>
       
       <div class="col-xs-6">
  
      <?php if($row->stock <=0 && $row->launchdate!='0000-00-00')
      {
?>

<span  class="input-group-btn" style="height:35px;">&nbsp;</span>
        
        <?php 
}

else
{
    ?><span class="input-group-btn">
          <a href="<?php echo base_url(); ?>addcart/<?php echo $row->id; ?>/0" class="btn btn-danger" id="crt1" type="submit" tabindex="-1"><span class="" aria-hidden="true">Add to cart</span></a>
        </span>
        <?php
}
?>
</div>





      <?php
		  
               if($row->launchdate=='0000-00-00')
               {
                $stockMessage = getStockMessage($row->stock);
                echo "<p class='delivery-message'>".$stockMessage['message']."</p>";       
               }
               else
               
               {
               ?><p class="col-xs-12" style="font-size:12px">Delivery by   <?php 
									echo  date('d.m',date(strtotime("+0 day", strtotime($row->launchdate))));		  
									  ?></p>
								<p class="col-xs-12"  style="font-size:11px">	  <?php
									  
						 		  if($row->stock >="10") {  echo "Available Qty : <span class='text-success'>AVAILABLE</span> "; } else { if($row->stock <= "0") { echo "Available Qty : <span class='text-danger'> OUT OF STOCK</span>"; } else { echo "Available Qty  : <span class=' text-Success'>".$row->stock."</span>"; } }  ?></p><?php 
               }
		 ?>
		 
      </div>        
      
      
		 
          
        
     <?php  } ?>
      
      
      <?php  $a=$this->uri->segment(1);  if($a == 'accessories') { ?>

      <?php $tra=$row->tra; if($tra) { ?>
      <p class="delivery-message">TRA ID &nbsp;<?php echo $row->tra; ?></p>
      <?php } else { echo ""; }?>
      
      <?php } else { ?>
      <?php } ?>
      
      
      
              
                  
                </div>
                
              </div>

              <!-- </a> -->


              
            </div>
            <?php $count++; ?>
          <?php endforeach;?>

          
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

    
    <script type="text/javascript" src="<?php echo base_url(); ?>assests/js/rateyo.js"></script>
  </body>
  </html>
