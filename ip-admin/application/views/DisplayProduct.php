<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ip-Ae Admin| Display Product</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url();?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url();?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url();?>assets/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="<?php echo base_url();?>assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url();?>assets/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <?php include("common/sidebar.php");?>

        <!-- top navigation -->
        <?php include("common/header.php");?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3 style="color:#1e91cf;">ALL PRODUCT LIST</h3>
              </div>

              <!-- <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div> -->
            </div>

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>ALL PRODUCT LIST<small style="color:#1e91cf;">All Product</small></h2>
                    <ul class="nav navbar-right panel_toolbox">

                    <li><a href="<?php echo base_url("ip_admin/Product");?>"><i style="color:#1e91cf;" class="fa fa-plus-square fa-2x"></i></a>
                    </li>

                     <!--  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li> -->
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                   
                    <table id="datatable-responsive" class="table table-striped table-bordered" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th style="color:#1e91cf;">SR.No</th>
                          <th style="color:#1e91cf;">Category</th>
                          <th style="color:#1e91cf;">Sub Category</th>
                          <th style="color:#1e91cf;">Product Details</th>
                          <th style="color:#1e91cf;"> priority </th>
                          <th style="color:#1e91cf;">Quantity </th>
                          <th style="color:#1e91cf;">Image</th>
                          <th style="color:#1e91cf;">action</th>
                          <!-- <th>Age</th>
                          <th>Start date</th>
                          <th>Salary</th>
                          <th>Extn.</th>
                          <th>E-mail</th>-->
                        </tr>
                      </thead>
                      <tbody>
                      <?php $i=1; foreach($col_cap as $row):?>
                     
                        <tr>
                          <td><?php echo $i++;?></td>
                          <td><?php echo $row->category_name;?></td>
                          <td><?php echo $row->subcat_name;?></td>
                          <td>
                             <span style="color:red;">Model Name: </span><?php echo $row->peoduct_name;?><br>

                             <span style="color:red;">Color: </span><?php echo $row->color_name;?><br>
                           <!-- <span style="color:red;">Capacity: </span><?php echo $row->capacity_unit;?><br> -->
                             <span style="color:red;">Part No: </span><?php echo $row->part_number;?><br>
                      <span style="color:red;">Tra No: </span><?php echo $row->tra;?><br>
                 <span style="color:red;">product_price: </span><?php echo $row->product_price;?>
                            
                          </td>
                          <td><?php echo $row->product_sequence;?></td>
                          <td><?php echo $row->stock;?></td>
                          <td><img src="<?php echo  $row->product_image1;?>" style="width:50px; height:50px"></td>
                          <td>

                          <!-- <a href="<?php echo base_url("ip_admin/Product_Delete/$row->id");?>" onClick="return doconfirm();"><i style="color:red;" class="fa fa-trash-o fa-lg"></i></a>
                          <a href="<?php echo base_url("ip_admin/Edit_product/$row->id");?>"><i style="color:blue;" class="fa fa-pencil-square-o fa-lg"></i></a> -->


                          <a href="<?php echo base_url("ip_admin/Edit_product/$row->id");?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>

                            <a href="<?php echo base_url("ip_admin/Product_Delete/$row->id");?>" onClick="return doconfirm();" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>

                          </td>

                         <!--  <td>61</td>
                          <td>2011/04/25</td>
                          <td>$320,800</td>
                          <td>5421</td>
                          <td>t.nixon@datatables.net</td> -->
                        </tr>
                        <?php endforeach;?>
                       
                      </tbody>
                    </table>
					
					
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
    <!-- iCheck -->
    <script src="<?php echo base_url();?>assets/vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="<?php echo base_url();?>assets/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/jszip/dist/jszip.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url();?>assets/build/js/custom.min.js"></script>

    <script>
  
function doconfirm()
  {
  raj=confirm("are you sure to delete the permanently");
  if(raj!=true)
  {
    return false;
  }
}

</script>

  </body>
</html>