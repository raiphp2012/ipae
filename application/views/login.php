<!DOCTYPE HTML>
 <html class="no-js" lang="de">  
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">

    <title>Login/SignUp Page - IPAE</title>

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
</style>
    
</head>
<body>     
        
    <!-- Start Navigation -->
   
<?php include("header.php");?>

    <!-- End Navigation -->

    <div class="clearfix"></div>
  <div class="container">
  <div class="row">
  
    <?php if ($this->session->flashdata('success')) { ?>
            <div class="alert alert-success text-center"> 
            <?= $this->session->flashdata('success') ?> </div>
            <?php } ?>


     <?php if ($this->session->flashdata('error')) { ?>
            <div class="alert alert-danger text-center"> 
            <?= $this->session->flashdata('error') ?> </div>
            <?php } ?>
  <br>
    
  </div>
</div>


<div class="container">
<div class="row">
<div class="col-md-4 col-md-offset-4">
<div class="form-body">
    <ul class="nav nav-tabs final-login">
        <li class="active" id="final"><a data-toggle="tab" href="#sectionA">Login</a></li>
        <li id="final"><a data-toggle="tab" href="#sectionB">Sign Up</a></li>
    </ul>
    <div class="tab-content">
        <div id="sectionA" class="tab-pane fade in active">
        <div class="innter-form">
            <form class="sa-innate-form" onsubmit="return validatelogin()" method="post" action ="<?php echo base_url(); ?>login" >
            <label>Email Id <span class="required error"> *</span></label> 
          <!--   <br>  <span class='error' id='error_email'></span> -->
            <input type="text" name="username" id="email" placeholder="Enter your email id" maxlength="50" >
             <span class='error' id='error_email'></span>
                 <br>
            
            <label>Password <span class="required error"> *</span></label>
              <!--  <br>  <span class='error' id='error_pwd'></span> -->
            <input type="password" name="password" id="pwd" placeholder="Enter your password"   >
            <span class='error' id='error_pwd'></span><br>
            <button type="submit">LogIn</button>
            <a href="<?php echo base_url();?>forget-password">&nbsp;&nbsp;Forgot Password?</a>
            </form>
            </div>
            
            <div class="clearfix"></div>
        </div>
        <div id="sectionB" class="tab-pane fade">
      <div class="innter-form">
           
          <form class="sa-innate-form" onsubmit="return validateregister()" method="post" action="welcome/Registration" >
            <label>First Name<span class="required error"> *</span></label>
            
            <input type="text" name="name" class="alphaonly" id="usr2" maxlength="25" placeholder="Enter your First Name." >
  <span class='error' id='error_usr2'></span><br>
       
       
       <span style="display:none">
            <label>Middle Name</label>
               <span class='error' id='error_musr2'></span>
            <input type="text" name="m_name" class="alphaonly" id="m_usr2" maxlength="25" placeholder="Enter your Middle Name." >             </span>

            <label>Last Name<span class="required error"> *</span></label>
            <input type="text" name="l_name" class="alphaonly" id="l_usr2" maxlength="25" placeholder="Enter your Last Name." >
           <span class='error' id='error_lusr2'></span><br>
               <label>Contact Number<span class="required error"> *</span></label> 
             
              <div class="row">
              <div class="form-group col-xs-4">
                  
                  
                  
                  
                  <select  class="contact1" id="country"  name="country" style="padding:10px; margin:7px 0px;">
                      
                      <option value="971" >+971</option>
                        <option value="91" >+91</option>
                      
                      </select>
                      
                      </div>
                      
                      
             <div class="form-group col-xs-8">
            <input type="text" class="contact1" name="Contact" id='contact1' maxlength="9" minlength="9" placeholder="Enter your Contact Number." ></div>
                 &nbsp;<span class='error' id='error_contact1'></span><br>
            </div>
 
            <label>Email Id <span class="required error"> *</span></label>
            
            <input type="text" name="username" id="email2" placeholder="Enter your Email Id." maxlength="50">
              <span class='error' id='error_email2'></span><br>
            <label>Password<span class="required error"> *</span></label>
            
            <input type="password" name="password" id="pwd2" placeholder="Enter your password" minlength="6">
              <span class='error' id='error_pwd2'></span><br>
            <button type="submit">SignUp</button>
            
            <p style="margin-top:10px;">By clicking sign up, you agree to iP-ae.com's <a href="http://www.ip-ae.com/term-condition" target="_blank">terms of use</a> and <a href="http://www.ip-ae.com/privacy-policy" target="_blank">privacy policy</a>.</p>
            </form>
            </div>

   <!--  <div class="social-login">
            <p>- - - - - - - - - - - - - Register With - - - - - - - - - - - - - </p>
      <ul>
            <li><a href="<?= $login_url;?>"><i class="fa fa-facebook"></i> Facebook</a></li>
            <li><a href=""><i class="fa fa-google-plus"></i> Google+</a></li>
            <li><a href=""><i class="fa fa-twitter"></i> Twitter</a></li>
            </ul>
            </div>  -->
        </div>
         <br>
            <br>
            <br>

    </div>
    </div>
    </div>
    </div>
    </div>

  
  <!--footer-->


<?php include("footer.php");?>


    
  <!-- START JAVASCRIPT -->
    <!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
    <script src="<?php echo base_url();?>assests/js/bootstrap.min.js"></script>
    
    <!-- Bootsnavs -->
    <script src="<?php echo base_url();?>assests/js/bootsnav.js"></script>

    <script src="<?php echo base_url();?>assests/js/validation.js"></script>


<script>
$(document).ready(function(){
    $("input").focus(function(){
        $(this).css("background-color", "#cccccc");
    });
    $("input").blur(function(){
        $(this).css("background-color", "#ffffff");
    });
});





$("#country").change(function(){
    var country = $('#country').val();
    
    
    if(country=="91")
    {
  $('#contact1').attr('maxlength', 10);
$('#contact1').attr('minlength', 10);
    
    }
    else if(country=="971")
    {
$('#contact1').attr('maxlength', 9);
$('#contact1').attr('minlength', 9);
    
    }
    else
    {
$('#contact1').attr('maxlength', 9);
$('#contact1').attr('minlength', 9);
    
    }
});







$(function(){
 
    $('#m_usr2').keyup(function()
    {
        var yourInput = $(this).val();
        re = /[`~!@#$%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/]/gi;
        var isSplChar = re.test(yourInput);
        if(isSplChar)
        {
            var no_spl_char = yourInput.replace(/[`~!@#$%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/]/gi, '');
            $(this).val(no_spl_char);
        }
    });
 
});






$(function(){
 
    $('#m_usr2').keyup(function()
    {
        var yourInput = $(this).val();
        re = /[`~!@#$%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/]/gi;
        var isSplChar = re.test(yourInput);
        if(isSplChar)
        {
            var no_spl_char = yourInput.replace(/[`~!@#$%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/]/gi, '');
            $(this).val(no_spl_char);
        }
    });
 
});

$(function(){
 
    $('#l_usr2').keyup(function()
    {
        var yourInput = $(this).val();
        re = /[`~!@#$%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/]/gi;
        var isSplChar = re.test(yourInput);
        if(isSplChar)
        {
            var no_spl_char = yourInput.replace(/[`~!@#$%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/]/gi, '');
            $(this).val(no_spl_char);
        }
    });
 
});




</script>


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
