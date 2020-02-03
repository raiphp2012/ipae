 
<?php

    $result=$this->Ipae_model->getData($table="ipae_category");


?>

<Style>.error{color:red}</Style>
    <nav class="navbar navbar-default bootsnav">

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
                    <li class="button-dropdown">
                        <a href="http://www.ip-ae.com/">
                              Home    
                        </a> 
					</li>
                     <!--  <li class="active"><a href="<?php //echo base_url("Welcome/Iphone");?>">iPhone</a></li> -->
					
    
                    <?php foreach($result as $row):?>

                        <?php

                        $name=$row->cat_slug;
                            $arr = array(' ','%','#',',');
                            $d = str_replace($arr, '-',$name);
                            //echo $d;
                        ?>


                    <li class=""><a  href="<?php echo base_url()?>category/<?php echo $row->cat_slug;?>"><?php echo $row->category_name; ?></a></li>
                 <?php endforeach;?>
                    
    
                    
                    <!-- <li><a href="#"> Apple Accessories</a></li> -->
                   <!--  <li><a href="<?php //ho base_url();?>Accessories"> Accessories</a></li> -->
                
               <!--      <li><a href="<?php //echo base_url(); ?>b2b/register">B.2.B</a></li> -->
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
					<li><a  href="<?php echo base_url();?>contact-us">Contact Us</a></li>
					<li><a href="http://www.ip-ae.com/Login" data-ac-autom="gn-bagview-link-favorites">
                   Login / Sign Up
                </a></li>
                  <!--   <li><a href="<?php //echo base_url();?>Login">Login</a></li> -->
                    <li class="button-dropdown">
                        <a href="javascript:void(0)" class="dropdown-toggle">
                            <i class="fa fa-shopping-bag">      
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
                   <ul class=" dropdown-menu ac-gn-bagview-nav-list ac-gn-bagview-nav-nobtn">
            <li class="ac-gn-bagview-nav-item ac-gn-bagview-nav-item-bag">
                <a href="<?php echo base_url();?>bag" data-evar1="[pageName] |  | bag overlay |  | bag" class="ac-gn-bagview-nav-link ac-gn-bagview-nav-link-bag" data-ac-autom="gn-bagview-link-bag">
                   <img src="<?php echo base_url();?>assests/img/bag1.png" class="cart-thumb" style="" alt="">  Bag
                </a>
            </li>
            <li class="ac-gn-bagview-nav-item ac-gn-bagview-nav-item-favorites">
                <a href="<?php echo base_url();?>Login" data-evar1="[pageName] |  | bag overlay |  | favorites" class="ac-gn-bagview-nav-link ac-gn-bagview-nav-link-favorites" data-ac-autom="gn-bagview-link-favorites">
                    <img src="<?php echo base_url();?>assests/img/signIn.png" class="cart-thumb" alt=""> Login / Sign Up
                </a>
            </li>
           </ul>
            </li>
        </ul>
                    
                    
				
           
            </div><!-- /.navbar-collapse -->
			
        </div>   
    </nav>