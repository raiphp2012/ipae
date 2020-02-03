<?php 

if($this->session->userdata['logged_in'])
{
  $name=$this->session->userdata['logged_in']['name'];
  //echo $name;
}

?>



<div class="col-md-3 left_col menu_fixed">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?php echo base_url("welcome/dashboard");?>" class="site_title"><i class="fa fa-paw"></i> <span>Ip-Ae Admin!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="http://localhost/ip-admin/assets/images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $name;?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br>

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">

                 <li><a href="<?php echo base_url("welcome/admin_list");?>"><i class="fa fa-caret-right"></i>Admin</a></li>

                  <li><a href="<?php echo base_url("ip_admin/display_slider");?>"><i class="fa fa-caret-right"></i>Slider</a></li>
              
                  <li><a href="<?php echo base_url("ip_admin/display_Category");?>"><i class="fa fa-caret-right"></i>Category</a></li>
                   <li><a href="<?php echo base_url("ip_admin/display_SubCategory");?>"><i class="fa fa-caret-right"></i>Sub Category</a></li>
                    <li><a href="<?php echo base_url("ip_admin/display_Product");?>"><i class="fa fa-caret-right"></i>Product</a></li>
                    
                      <li><a href="<?php echo base_url("ip_admin/Display_Subject");?>"><i class="fa fa-caret-right"></i>Dispaly Subject</a></li>
                     <!--   <li><a><i class="fa fa-caret-right"></i>Wholesale coustomer</a></li> -->
                        <li><a href="<?php echo base_url("ip_admin/display_Customers");?>"><i class="fa fa-caret-right"></i>Customer</a></li>
                        
                          <li><a href="<?php echo base_url("ip_admin/display_Order");?>"><i class="fa fa-caret-right"></i>Order</a></li>

                         <li><a href="<?php echo base_url("ip_admin/display_Contact_Details");?>"><i class="fa fa-caret-right"></i>Enquiry Details</a></li>

                   
                   
                  
                </ul>
              </div>
              

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
           <!--  <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div> -->
            <!-- /menu footer buttons -->
          </div>
        </div>