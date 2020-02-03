<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>IP_AE ADMIN! | </title>

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
                <h3>Add SubCategory</h3>
              </div>

            
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Add SubCategory </h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
            <?php if ($this->session->flashdata('msg')) { ?>
            <div class="alert alert-success"> 
            <?= $this->session->flashdata('msg') ?> </div>
            <?php } ?>
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" <?php echo form_open_multipart('ip_admin/update_subcat')?>


                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Category </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="id">
                            <option value="<?php echo $editcat['0']->id;?>"><?php echo $editcat['0']->category_name;?></option>
                    <?php foreach ($cat as $row) {?>

                    <option value="<?php echo $row->id;?>"> <?php echo $row->category_name;?></option> <?php } ?>
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">SubCategory Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" value="<?php echo $editcat['0']->subcat_name;?>" name="name" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>



<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Short Order <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number"  value="<?php echo $editcat['0']->sequence;?>" id="order" name="order" class="form-control col-md-7 col-xs-12">
                        </div>
                       
                      </div>
   <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tra<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  value="<?php echo $editcat['0']->tra;?>" name="tra" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      
                    <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">SubCategory Image 1<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file"  name="img1"  class="form-control col-md-7 col-xs-12" >
                           <input type="hidden" name="b" value="<?php echo $editcat['0']->subcat_banner1_name;?>" class="form-control col-md-7 col-xs-12" >
                          <input type="hidden" name="bb" value="<?php echo $editcat['0']->subcat_banner1_path;?>" class="form-control col-md-7 col-xs-12" >
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                           <spam><img src="<?php echo $editcat['0']->subcat_banner1_path;?>" style="width:40px; height:40px"></spam>
                        </div>
                      </div> 

                      

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">SubCategory Icon<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" name="koko"  class="form-control col-md-7 col-xs-12" >
                          <input type="hidden" name="a" value="<?php echo $editcat['0']->subcat_icon;?>" class="form-control col-md-7 col-xs-12" >
                          <input type="hidden" name="aa" value="<?php echo $editcat['0']->subcat_icon_path;?>" class="form-control col-md-7 col-xs-12" >
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                           <spam><img src="<?php echo $editcat['0']->subcat_icon_path;?>" style="width:40px; height:40px"></spam>
                        </div>
                      </div>





                      <input type="hidden" name="id" value="<?php echo $editcat['0']->subid;?>" class="form-control col-md-7 col-xs-1hidden">

                      
                      

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">SubCategory Image 2<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" name="img2"  class="form-control col-md-7 col-xs-12" >
                           <input type="hidden" name="c" value="<?php //echo $editcat['0']->subcat_banner2_name;?>" class="form-control col-md-7 col-xs-12" >
                          <input type="hidden" name="cc" value="<?php //echo $editcat['0']->subcat_banner2_path;?>" class="form-control col-md-7 col-xs-12" >
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                           <spam><img src="<?php //echo $editcat['0']->subcat_banner2_path;?>" style="width:40px; height:40px"></spam>
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


       <script>
 
$(function(){
 
  $('#first-name').keyup(function()
  {
    var yourInput = $(this).val();
    re = /[`~!@#$%^*_|+\-=?;:'",.<>\{\}\[\]\\\/]/gi;
    var isSplChar = re.test(yourInput);
    if(isSplChar)
    {
      var no_spl_char = yourInput.replace(/[`~!@#$%^*_|+\-=?;:'",.<>\{\}\[\]\\\/]/gi, '');
      $(this).val(no_spl_char);
    }
  });
 
});
 
 
</script>
  
  </body>
</html>
