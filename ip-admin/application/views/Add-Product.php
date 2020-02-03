<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  
    <title>Ip Admin! |Add Product </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url();?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url();?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url();?>assets/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="<?php echo base_url();?>assets/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="<?php echo base_url();?>assets/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="<?php echo base_url();?>assets/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="<?php echo base_url();?>assets/vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url();?>assets/build/css/custom.min.css" rel="stylesheet">

    <script>
  
  
     function get_subcategory(id) {
      //alert(id); exit();
      var x=id;
      //alert(x); exit();
      if(x=="8"){
        $('#hidden_div').hide();
      }
        else{
          $('#hidden_div').show();
        }
            
           
        
    }
</script>

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <?php include("common/sidebar.php");?>

        <!-- top navigation -->
        <?php include ("common/header.php");?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>ADD PRODUCT</h3>
              </div>

             
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>ADD PRODUCT <small>Add Product</small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
            <?php if ($this->session->flashdata('msg')) { ?>
            <div class="alert alert-success"> 
            <?= $this->session->flashdata('msg') ?> </div>
            <?php } ?>
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" <?php echo form_open_multipart('ip_admin/Add_Product')?>


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Category </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control parsley-error" required="" name="id" onchange="return get_subcategory(this.value)">
                            <option value="">Choose option</option>
                    <?php foreach ($cat as $row) {?>

                    <option value="<?php echo $row->id;?>"> <?php //echo $row->id;?> <?php echo $row->category_name;?></option>

                     <?php } ?>
                          </select>
                        </div>
                      </div>


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Sub Category </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control parsley-error" required="" name="subid">
                            <option value="">Choose option</option>
                    <?php foreach ($sucat as $row) {?>

                    <option required="required" value="<?php echo $row->subid;?>"> <?php echo $row->subcat_name;?></option> <?php } ?>
                          </select>
                        </div>
                      </div>

                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Color</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select  class="form-control parsley-error" required=""  name="id">
                            <option value="">Choose option</option>
                      <?php foreach ($color as $row) {?>

                      <option required="required" value="<?php echo $row->id;?>"> <?php echo $row->color_name;?></option> <?php } ?>
                          </select>
                        </div>
                      </div>

                     

                      <div id="hidden_div" class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Storage </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="id">
                            <option value="">Choose option</option>
                    <?php foreach ($storage as $row) {?>

                    <option value="<?php echo $row->id;?>"> <?php echo $row->capacity_unit;?></option> <?php } ?>
                          </select>
                        </div>
                      </div>

                      

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Product Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="product_name"  name="name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
                      
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Short Order <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" id="product_name"  name="order"  class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Description <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea name="Description" class="resizable_textarea form-control" placeholder="This text area automatically resizes ..."></textarea>
                        </div>
                      </div>

                     

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Price<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" name="price" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Quantity <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" name="Quantity" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Upc Model Name<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="upc" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ean Model Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name"  name="ean" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tra No:<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  name="tra" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Part Noumber <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name"  name="part" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      

                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">product_image1<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file"  name="img1"  required="required" class="form-control col-md-7 col-xs-12" >
                        </div>
                      </div>

                      

                         <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">product_image2<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" name="img2"  required="required" class="form-control col-md-7 col-xs-12" >
                        </div>
                      </div>

                     

                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">product_image3<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="email" name="img3"  required="required" class="form-control col-md-7 col-xs-12" >
                        </div>
                      </div>


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">product_image4<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="email" name="img4"  class="form-control col-md-7 col-xs-12" >
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">product_image5<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="email" name="img5"  class="form-control col-md-7 col-xs-12" >
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">product_image6<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="email" name="img6"  class="form-control col-md-7 col-xs-12" >
                        </div>
                      </div>



                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">product_banner1<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" name="banner1"  class="form-control col-md-7 col-xs-12" >
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">product_banner2<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file"  name="banner2"  class="form-control col-md-7 col-xs-12" >
                        </div>
                      </div>

                   
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                   <button class="btn btn-primary" type="reset">Reset</button>
               <button type="submit" class="btn btn-success">Submit</button>
                  </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>

            

             

          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
      <?php include("common/footer.php");?>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url();?>assets/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url();?>assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url();?>assets/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url();?>assets/vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url();?>assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url();?>assets/vendors/iCheck/icheck.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url();?>assets/vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="<?php echo base_url();?>assets/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="<?php echo base_url();?>assets/vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="<?php echo base_url();?>assets/vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="<?php echo base_url();?>assets/vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="<?php echo base_url();?>assets/vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="<?php echo base_url();?>assets/vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="<?php echo base_url();?>assets/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="<?php echo base_url();?>assets/vendors/starrr/dist/starrr.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url();?>assets/build/js/custom.min.js"></script>

    <!--Script for textarea by using NicEdit-->
<script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> <script type="text/javascript">
//<![CDATA[
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
  //]]>
  </script>


     <script>
 
$(function(){
 
  $('#product_name').keyup(function()
  {
    var yourInput = $(this).val();
    re = /[`~!@#$%^&*_|()+\-=?;:'",.<>\{\}\[\]\\\/]/gi;
    var isSplChar = re.test(yourInput);
    if(isSplChar)
    {
      var no_spl_char = yourInput.replace(/[`~!@#$%^&*_|()+\-=?;:'",.<>\{\}\[\]\\\/]/gi, '');
      $(this).val(no_spl_char);
    }
  });
 
});
 
 
</script>
	
  </body>
</html>
