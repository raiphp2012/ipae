    
    <?php

if(isset($this->session->userdata['logged_in']))
            {
                $name=$this->session->userdata['logged_in']['name'];
            }


    ?>

    <?php

    $result=$this->Ipae_model->getData($table="ipae_category");


?>




    <nav class="navbar navbar-default navbar-sticky bootsnav">

        <!-- Start Top Search -->
        <div class="top-search">
            <div class="container">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
                    <input type="text" class="form-control" placeholder="Search">
                    <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                </div>
            </div>
        </div>
        <!-- End Top Search -->

        <div class="container">            


            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="Logo" href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assests/img/logo1.png" class="logo" alt=""></a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                    
                <?php foreach($result as $row):?>
                    <li class=""><a href="<?php echo base_url()?>category/<?php echo $row->cat_slug;?>"><?php echo $row->category_name; ?></a></li>
                 <?php endforeach;?> 
			
  <li class="button-dropdown">
                        <a href="javascript:void(0)" class="dropdown-toggle">
                              Support
                              
                        </a>
                   <ul class=" dropdown-menu ac-gn-bagview-nav-list ac-gn-bagview-nav-nobtn">
            <li class="ac-gn-bagview-nav-item ac-gn-bagview-nav-item-bag">
                <a href="<?php echo base_url();?>welcome/doa" class="ac-gn-bagview-nav-link ac-gn-bagview-nav-link-bag">
                     DOA (Dead on Arrival)
                </a>
            </li>
            <li class="ac-gn-bagview-nav-item ac-gn-bagview-nav-item-favorites">
                <a href="<?php echo base_url();?>welcome/warranty"  class="ac-gn-bagview-nav-link ac-gn-bagview-nav-link-bag">
                    Warranty
                </a>
            </li>
             <li class="ac-gn-bagview-nav-item ac-gn-bagview-nav-item-favorites">
                <a href="<?php echo base_url();?>welcome/sale_support" class="ac-gn-bagview-nav-link ac-gn-bagview-nav-link-bag">
                    After Sales Support
                </a>
            </li>
           </ul>
            </li>
            
            
            
            <li><a href="<?php echo base_url();?>contact-us">Contact Us</a></li>
                 
 <li class="button-dropdown">
                        <a href="javascript:void(0)" class="dropdown-toggle">
                            <i class="fa fa-shopping-bag" style="color:#fff;margin-top: 10px">      
                              <?php $total=count($this->cart->contents());

                            if($total>0)
                            {
                                echo $total;
                            }
                            else
                            { 
                                $i=0;
                              echo $i;  
                            }

                             ?>
                            </i>
                            
                        </a>
<ul class="dropdown-menu ac-gn-bagview-nav-list ac-gn-bagview-nav-nobtn">
            <li class="ac-gn-bagview-nav-item ac-gn-bagview-nav-item-bag">
                <a href="" data-evar1="[pageName] |  | bag overlay |  | bag" class="ac-gn-bagview-nav-link ac-gn-bagview-nav-link-bag" data-ac-autom="gn-bagview-link-bag"><img src="<?php echo base_url();?>assests/img/signIn.png" class="cart-thumb" alt="">
                    <?php echo $name;?>
                </a>
            </li>
            <li class="ac-gn-bagview-nav-item ac-gn-bagview-nav-item-favorites">
                <a href="<?php echo base_url();?>bag" data-evar1="[pageName] |  | bag overlay |  | favorites" class="ac-gn-bagview-nav-link ac-gn-bagview-nav-link-favorites" data-ac-autom="gn-bagview-link-favorites"><img src="<?php echo base_url();?>assests/img/bag1.png" class="cart-thumb" alt="">
                    Bag
                </a>
            </li>
       <!--     <li class="ac-gn-bagview-nav-item ac-gn-bagview-nav-item-orders">
                <a href="#" data-evar1="[pageName] |  | bag overlay |  | orders" class="ac-gn-bagview-nav-link ac-gn-bagview-nav-link-orders" data-ac-autom="gn-bagview-link-orders"><img src="<?php echo base_url();?>assests/img/favorites (1).png" class="cart-thumb" alt="">
                    Favorites
                </a>
            </li>-->
            <li class="ac-gn-bagview-nav-item ac-gn-bagview-nav-item-account">
                <a href="<?php echo base_url();?>account" data-evar1="[pageName] |  | bag overlay |  | account" class="ac-gn-bagview-nav-link ac-gn-bagview-nav-link-account" data-ac-autom="gn-bagview-link-account"><img src="<?php echo base_url();?>assests/img/account (1).png" class="cart-thumb" alt="">
                    Account
                </a>
            </li>
            <li class="ac-gn-bagview-nav-item ac-gn-bagview-nav-item-signOut">
                <a href="<?php echo base_url();?>welcome/logout" data-evar1="[pageName] |  | bag overlay |  | signOut" class="ac-gn-bagview-nav-link ac-gn-bagview-nav-link-signOut" data-ac-autom="gn-bagview-link-signOut"><img src="<?php echo base_url();?>assests/img/signIn.png" class="cart-thumb" alt="">
                    Sign out 
                </a>
            </li>
        </ul>
                    </li>
				
                </ul>
            </div><!-- /.navbar-collapse -->
			
        </div>   
    </nav>