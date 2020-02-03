


  <link rel="stylesheet" href="<?php echo base_url(); ?>assests/css/rateyo.css">
<div class="row" id="div1" >

 <?php $count = 1; ?>

    <?php foreach($product as $row):?>
<?php
 $p_id2 = $row->id; 
$this->load->helper("general_helper");

$rateInfo2 = getProductRating($p_id2);

if($rateInfo2['avg'] == ''){
  $rating2 = 0;
}
else{
  $rating2 = $rateInfo2['avg'];
}


                 $catName = getCatNameFromCatId($row->id);
                 $subcatName = gesubCatNameFromCatId($row->subid);

?>
                      
        <div class="col-xs-12 col-sm-4 col-md-3">

        <a href="<?php echo base_url();?><?php echo $catName['cat_slug']; ?>/<?php echo $subcatName['subcat_slug']; ?>/Product/<?php echo $row->product_slug; ?>">
            <div class="card">
            <div class="card-contain well">
                
                    <img class="card-image img-responsive" src="<?php echo $row->product_image1;?>" >
              
            </div>
              
                <div class="card-content">
                 <div id="rateyo_<?php echo $p_id2; ?>" style="margin-left: 60px;margin-top: -15px;"></div>
                    <h6 style="font-size: 13px;" class="card-title text-center">
                      
                         <?php echo $row->product_name;?>
                       
                    </h6>


 <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

 <script type="text/javascript" src="<?php echo base_url(); ?>assests/js/rateyo.js"></script>
                     <script>
    $(function () {
      // $('#myTab li:eq(1) a').tab('show');          

           $("#rateyo_<?php echo $p_id2; ?>").rateYo({                 
            rating: <?php echo $rating2; ?>,
            ratedFill: "#0072dc",    
            starWidth: "25px",              
            readOnly: true              
         });
    });
    </script>
                    <!-- <h4 class="card-title1 text-center">
                        <a href="#">
                            Storage:128 GB
                        </a>
                    </h4> -->
                    
                    
                    
                    
                    
                       <?php
                    if($catName['cat_slug'] == "accessories" || $catName['cat_slug'] == "Accessories"){
                         $tra=$row->tra;
                      if($tra) {
                        if($count == 1){
                    ?>
                     
                     <h5 style="font-size: 12px;" class="card-title1 text-center">
                     
                      <b>TRA ID : <?php echo $row->tra;?> </b>
                     
                     </h5>
                                <?php } } }?>
                    
                   
                    
                    <h4 style="font-size: 12px;" class="card-title1 text-center">
                      
                       <b class="btn btn-primary disable">AED <?php echo $row->product_price;?></b>

                   </h4>
                    
                </div>
                
            </div>

            </a>


            
        </div>
<?php $count++; ?>
            <?php endforeach;?>

    
        </div>
        
