<!DOCTYPE HTML>
 <html class="no-js" lang="de">  
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">

    <title>Apple iPhone</title>
    <link rel="icon" type="image/png"   href="<?php echo base_url();?>assests/img/favicon.png" />

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
    font-weight: 900;
  }


    </style>
    
   
    
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
<?php if ($this->session->flashdata('success')) { ?>
            <div class="alert alert-success text-center"> 
            <?= $this->session->flashdata('success') ?> </div>
            <?php } ?>

     <?php if ($this->session->flashdata('error')) { ?>
            <div class="alert alert-danger text-center"> 
            <?= $this->session->flashdata('error') ?> </div>
            <?php } ?>

<div class="container" id="profile">
   
	<div class="row">


<div class="col-md-3 col-sm-12 col-xs-12 pannel_left" style="background-color:rgba(0, 0, 0, 0.8); color: white;">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<div class="profile_img">
<?php  $img=$userdata['0']->pic_path;  if($img) { ?>
<img src="<?php echo $userdata['0']->pic_path;?>" style="height:174px; width:200px;" class="img-thumbnail">
<?php } else { ?>
<img src="<?php echo base_url();?>assests/noimage.png" style="height:174px; width:200px;" class="img-thumbnail">
<?php }?>
</div>



<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">

<form class="form-horizontal con_tent">
<br>

  <div class="form-group" id="labl">
    <label id="just" class="col-sm-4 control-label">Name:</label>
    <div class="col-sm-8">
      <p class="text-justify " style="margin-top: 6px;"><?php echo $userdata['0']->name." ".$userdata['0']->mid_name." ". $userdata['0']->last_name;?></p>

    </div>
  </div>

    <div class="form-group" >
    <label id="just" class="col-sm-4 control-label">Gender:</label>
    <div class="col-sm-8">
      <p class="text-justify" style="margin-top: 6px;"><?php echo $userdata['0']->gender;?></p>
    </div>
  </div>

    <div class="form-group" >
    <label id="just" class="col-sm-4 control-label">DOB:</label>
    <div class="col-sm-8">
      <p class="text-justify" style="margin-top: 6px;"><?php echo $userdata['0']->dob;?></p>
    </div>
  </div>

         <div class="form-group" >
    <label  id="just" class="col-sm-4 control-label">Contact:</label>
    <div class="col-sm-8">
      <p class="text-justify" style="margin-top: 6px;"><?php echo $userdata['0']->contact;?></p>
    </div>
  </div>

    <div class="form-group" >
    <label id="just" class="col-sm-4 control-label">Email Id:</label>
    <div class="col-sm-8">
      <p class="text-justify" style="margin-top: 6px;"><?php echo $userdata['0']->username;?></p>
    </div>
  </div>


     <div class="form-group">
    <label id="just" class="col-sm-4 control-label">Address: </label>
    <div class="col-sm-8">
      <p class="text-justify" style="margin-top: 6px;"> <?php echo $userdata['0']->address;?></p>
    </div>
  </div>


 
<!-- <a class="btn btn-primary" href="<?php //echo base_url();?>ipae/pdf">pdf</a> -->

 </form>
    </div>
    </div>


</div>
</div>
</div>

<div class="col-md-9 col-sm-12 col-xs-12">


 <?php if ($this->session->flashdata('msg')) { ?>
            <div class="alert alert-success text-center"> 
            <?= $this->session->flashdata('msg') ?> </div>
            <?php } ?>

            <?php if ($this->session->flashdata('msg1')) { ?>
            <div class="alert alert-danger text-center"> 
            <?= $this->session->flashdata('msg1') ?> </div>
            <?php } ?>




    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="panel with-nav-tabs panel-warning">
                <div class="panel-heading">
                        <ul class="nav nav-tabs" id="tabs"  style="background-color:rgba(0, 0, 0, 0.8); color: white;">
                            <li class="active"><a href="#tab1warning" id="ordermenus1"  style="color:white;" data-toggle="tab">Profile</a></li>
                            <li><a href="#tab2warning" id="ordermenus2"  data-toggle="tab">My Orders</a></li> 
                            <li><a href="#tab3warning" id="ordermenus3"   data-toggle="tab">Change Password</a></li>
                        </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab1warning">


                            <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="profile_pages">
<form class="form-horizontal" onsubmit="return profileValidate222()" method="post" action="<?php echo base_url();?>welcome/userUpdate" enctype="multipart/form-data">                           
  <div class="form-group" id="labl">
    <label for="inputEmail3" class="col-sm-3 control-label">First Name<span class="required error"> *</span></label>
    <div class="col-sm-9">
    
      <input name="name" id="name" maxlength="40" class="form-control alphaonly" value="<?php echo $userdata['0']->name;?>" 
      type="text">
       <span class="error" id="error_usr2"></span>
    </div>
   
  </div>
  <div class="form-group" id="labl">
    <label for="inputEmail3" class="col-sm-3 control-label">Middle Name:</label>
    <div class="col-sm-9">

      <input name="mid_name" id="mid_name" maxlength="40" class="form-control alphaonly" value="<?php echo $userdata['0']->mid_name;?>" type="text">
     
       <span class="error" id="error_usr2"></span>
    </div>
   
  </div>
  <div class="form-group" id="labl">
    <label for="inputEmail3" class="col-sm-3 control-label">Last Name <span class="required error"> *</span></label>
    <div class="col-sm-9">
      <input name="last_name" id="last_name" maxlength="40" class="form-control alphaonly" value="<?php echo $userdata['0']->last_name;?>" type="text">
       <span class="error" id="error_last_name"></span>
    </div>
   
  </div>

     <div class="form-group" id="labl">
    <label for="inputEmail3" class="col-sm-3 control-label">Gender<span class="required error"> *</span></label>
    <div class="col-sm-9">


  <label class="radio-inline">
  <input type="radio" name="gender"  <?php echo ($userdata['0']->gender=="male")?'checked':'' ?> id="inlineRadio1" value="male"> Male
</label>
<label class="radio-inline">
  <input type="radio" name="gender"  <?php echo ($userdata['0']->gender=="female")?'checked':'' ?> id="inlineRadio2" value="female"> Female
</label>
<span class="error" id="error_gender"></span>

    </div>
  </div>


     <div class="form-group" id="labl">
    <label for="inputPassword3" class="col-sm-3 control-label">Date Of Birth<span class="required error"> *</span></label>
    <div class="col-sm-9">
      <input name="dob" class="form-control" id="dob"  value="<?php echo $userdata['0']->dob;?>" type="date">
        <span class="error" id="error_dob"></span>
    </div>
  
  </div>



  <div class="form-group" id="labl">
    <label for="inputPassword3" class="col-sm-3 control-label">Contact Number<span class="required error"> *</span></label>
    <div class="col-sm-9">
      <input name="mobile" class="form-control contact1" id="contact1" minlength="9" maxlength="9" value="<?php echo $userdata['0']->contact;?>"  type="tel">
       <span class="error" id="error_contact"></span>
    </div>
   

  </div>

        <div class="form-group" id="labl">
    <label for="inputPassword3" class="col-sm-3 control-label">Email Id <span class="required error"> *</span></label>
    <div class="col-sm-9">
      <input name="email" class="form-control" value="<?php echo $userdata['0']->username;?>"   type="text" readonly >
    </div>
  </div>
  <div class="form-group" id="labl">
    <label for="inputPassword3" class="col-sm-3 control-label">Address <span class="required error"> *</span></label>
    <div class="col-sm-9">
      <textarea name="address" id="address"  type="text" class="form-control" rows="5"><?php echo $userdata['0']->address;?></textarea>
        <span class="error"  id="error_address"></span>
    </div>
   
  </div>

    <div class="form-group" id="labl">
    <label for="inputPassword3" class="col-sm-3 control-label">Upload Photo:</label>
    <div class="col-sm-9">
      <input name="img" type="file">
      <input name="pic_name" value="<?php echo $userdata['0']->pic_name;?>" type="hidden">
       <input name="pic_path" value="<?php echo $userdata['0']->pic_path;?>" type="hidden">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
      <input type="submit" class="btn btn-success" name="update" value="Update">
     <!--    <input type="reset" class="btn btn-danger ">Cancel</button> -->
    </div>
  </div>
                                    </form>





                              </div>

                                </div>

                             </div>



                            </div>





       <div class="tab-pane fade" id="tab2warning">

<div class=""max-height: 600px;">          
  <table class="table table-bordered">
    <thead class="thead-inverse">
      <tr>
        <th>#</th>
        <th>Order Number</th>
        <th>Total Amount</th>
        <th>No of Items</th>
        <th>Date</th>
        <th>Status</th>  
        <th>Action</th>      
      </tr>
    </thead>
    <tbody>
    <?php if($orderDetails){ 
        $counter = 1;
      foreach($orderDetails as $order){ ?>

            <tr>
                <td><?php echo $counter; ?></td>
                
                
                <td><?php echo $order['order_number']; ?></td>
                <td>AED <?php echo $order['total_amt']; ?></td>
                <td><?php echo $order['count_orders']; ?></td>
                <td><?php echo $order['order_date']; ?></td>
                <?php if($order['order_status'] == 1){ ?> <td>Placed</td>
                <?php }else if($order['order_status'] == 2){ ?>
                        <td>In Process</td>
                <?php }else if($order['order_status'] == 3){ ?>
                        <td>Cancelled</td>
                        <?php }else if($order['order_status'] == 4){ ?>
                        <td>Cancelled By iP-AE</td>
                        
                        <?php }else if($order['order_status'] == 5){ ?>
                        <td>Order Shipped</td>
                        
                        
                        
                <?php }else{ ?>
                        <td>Delivered & Completed</td>
                <?php } ?>
<?php

$date=date('Y-m-d H:i:s');
//$date='2017-09-08 12:23:28';
$diff=strtotime($date) - strtotime($order['order_date']);
//echo $diff;

?>
                
                    <td><?php if($order['order_status'] == 1 && $diff<=86400){ ?><a href='<?php echo base_url(); ?>welcome/cancelOrder/<?php echo $order['id']; ?>' onclick="return confirm('Do you want to cancel the order ?');">Cancel</a> |<?php } ?> <a href='<?php echo base_url(); ?>welcome/orderdetails/<?php echo $order['order_number']; ?>'>View</a></td>
                
            </tr>
            <?php $counter++; ?>
       <?php } ?>
       <?php } ?>      
               
    </tbody>
    
  </table>
  </div>

                            </div>



                                 <div class="tab-pane fade" id="tab3warning">

<div class="" style="max-height: 600px;"> 

<form method="post" <?php echo form_open("welcome/changePassword");?>
    <div class="form-group">
      <label for="usr">Old Password<span class="required error"> *</span></label>
      <input type="password" class="form-control" placeholder="Enter your old password" name="oldpassword" id="usr" required>
    </div>
    <div class="form-group">
      <label for="pwd">New Password<span class="required error"> *</span></label>
      <input type="password" class="form-control" placeholder="Enter your new password" name="newpassword" id="pwd" minlength="6" required>
    </div>
    <!--  <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd">
    </div> -->

    <button type="submit" class="btn btn-primary">Update</button>
  </form>



  </div>

                            </div>

                    </div>
                </div>
            </div>
        </div>
</div>


</div></div>
</div>

	
	
	
	<!--footer-->


<?php echo include("footer.php");?>
    
  <!-- START JAVASCRIPT -->
   
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assests/js/bootstrap.min.js"></script>
    
    <!-- Bootsnavs -->
    <script src="<?php echo base_url();?>assests/js/bootsnav.js"></script>




<script type="text/javascript">


  function profileValidate222()
  {
    var name = document.getElementById('name').value;
    var last_name = document.getElementById('last_name').value;
   /* var email = document.getElementById('email2').value;
    var pwd = document.getElementById('pwd2').value;*/
    var contact = document.getElementById('contact1').value;
     var address = document.getElementById('address').value;
     var dob = document.getElementById('dob').value;
   /* var atpos = email.indexOf("@");
    var dotpos = email.lastIndexOf(".");*/

     if(name == '' || name == null){
      document.getElementById('error_usr2').innerHTML = '*First Name is required';
       
    }
    else if(!isNaN(name)){
       document.getElementById('error_usr2').innerHTML = '*First Name must not contain numeric value';
       
    }
    else if(!isNaN(name)){
       document.getElementById('error_usr2').innerHTML = '*First Name must not contain numeric value';
       
    }
     else{
        document.getElementById('error_usr2').innerHTML = '';
       
    }

    if(last_name == '' || last_name == null){
      document.getElementById('error_last_name').innerHTML = '*Last Name is required';
       
    }
    else if(!isNaN(last_name)){
       document.getElementById('error_last_name').innerHTML = '*Last Name must not contain numeric value';
       
    }
    else if(!isNaN(last_name)){
       document.getElementById('error_last_name').innerHTML = '*Last Name must not contain numeric value';
       
    }

    else{
        document.getElementById('error_last_name').innerHTML = '';
       
    }


    if(dob == '' || dob == null){
       document.getElementById('error_dob').innerHTML = '*Date of Birth is required';
       
    }
    
    else{
       document.getElementById('error_dob').innerHTML = '';
    }

     


        if(contact == '' || contact == null){
        document.getElementById('error_contact').innerHTML = '*Contact Number is required';
        
    }
    else if(isNaN(contact)){
      document.getElementById('error_contact').innerHTML = '*Contact Number must be numeric';
    }
    else if(contact.length < 9 || contact.length > 9){
      document.getElementById('error_contact').innerHTML = '*Contact must be equal to 9 digits';
    }
    else{
       document.getElementById('error_contact').innerHTML = '';
        
    }

   var gender = $("input[name='gender']").is(':checked');

   if(gender == true){
      document.getElementById('error_gender').innerHTML = '';
   }
   else{
      document.getElementById('error_gender').innerHTML = '*Please choose gender first.';
   }

    
  }

  </script>

<style type="text/css">
  #ordermenus2,#ordermenus3{
    color: white;
  }
  #ordermenus1:hover{
    background-color: red;
    
  }
 #ordermenus2:hover{
    background-color: red;
    
  }
  #ordermenus3:hover{
    background-color: red;
    
  }
</style>


  <script type="text/javascript">


$('.alphaonly').bind('keyup blur',function(){ 
    var node = $(this);
    node.val(node.val().replace(/[^a-zA-Z ]/g,'') ); }
);

$('.contact1').bind('keyup blur',function(){ 
    var node = $(this);
    node.val(node.val().replace(/[^0-9]/g,'') ); }
);


</script>


</body>
</html>
