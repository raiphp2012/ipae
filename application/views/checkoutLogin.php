<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="de">  <!--<![endif]-->
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
    
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

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
        <div class="col-md-4 col-md-offset-1">

                <h2 style="color: #d14d42;margin-top: 40px;">User Type</h2>
                     
                <form> 
                    <p><input type="radio" name="user_type" value="registered" id="registered"> Registered User</p>
                    <p><input type="radio" name="user_type" value="guest" id="guest"> Guest User</p>
                </form>
         
        </div>
        <div class="divider"></div>
        <div class="col-md-4 col-md-offset-2" id="normalUser">
            <div class="form-body">
                <ul class="nav nav-tabs final-login">
                    <li class="active" id="final"><a data-toggle="tab" href="#sectionA">Log In</a></li>
                    <li id="final" class="sign_up"><a data-toggle="tab" href="#sectionB">Sign up</a></li>

                </ul>
                <div class="tab-content">
                    <div id="sectionA" class="tab-pane fade in active">
                        <div class="innter-form">
                            <form class="sa-innate-form" onsubmit="return validatelogin()" method="post" action ="<?php echo base_url(); ?>checkoutlogin" >
                            <label>Email Address</label> 
                            <br>  <span class='error' id='error_email'></span>
                            <input type="text" name="username" id="email" placeholder="Enter your email id" maxlength="50" >
                            
                            <label>Password</label>
                               <br>  <span class='error' id='error_pwd'></span>
                            <input type="password" name="password" id="pwd" placeholder="Enter your password" minlength="6"  >
                            <button type="submit">Log In</button>
                            <a href="<?php echo base_url();?>Forget-Password">&nbsp;&nbsp;Forgot Password?</a>
                            </form>
                            
                        </div>

                        <div class="clearfix"></div>
                    </div>
                    <div id="sectionB" class="tab-pane fade">
                        <div class="innter-form">
                           
                             <form class="sa-innate-form" onsubmit="return validateregister()" method="post" action="checkoutRegistration" >
                            <label>First Name</label>
                              <br>  <span class='error' id='error_usr2'></span>
                            <input type="text" name="name" class="alphaonly" id="usr2" maxlength="25" placeholder="Enter your first name" >
                            <label>Middle Name</label>
                              <br>  <span class='error' id='error_musr2'></span>
                            <input type="text" name="m_name" class="alphaonly" id="m_usr2" maxlength="25" placeholder="Enter your Middle name" >
                            <label>Last Name</label>
                              <br>  <span class='error' id='error_lusr2'></span>
                            <input type="text" name="l_name" class="alphaonly" id="l_usr2" maxlength="25" placeholder="Enter your Last name" >
                              <label>Contact Number</label>
                              <br> <span class='error' id='error_contact1'></span>
                            <input type="text" class="contact1" name="Contact" id='contact1' maxlength="10" minlength="10" placeholder="Enter your contact number" >
                            <label>Email Address</label>
                             <br>  <span class='error' id='error_email2'></span>
                            <input type="text" name="username" id="email2" placeholder="Enter your email id" maxlength="50">
                            <label>Password</label>
                             <br>  <span class='error' id='error_pwd2'></span>
                            <input type="password" name="password" id="pwd2" placeholder="Enter your password" minlength="6">
                            <button type="submit">Sign Up</button>
                            
                            <p style="margin-top:10px;">By clicking Sign up, you agree to ip-ae's User Agreement, Privacy Policy, and Cookie Policy.</p>
                            </form>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                </div>
            </div>
        </div>

        <!--for guest user-->
        <div class="col-md-4 col-md-offset-2" id="guestUser">
            <div class="form-body">
                
                <div class="tab-content">
                    <div id="sectionA" class="tab-pane fade in active">
                        <div class="innter-form">
                            <form class="sa-innate-form" method="post" action ="<?php echo base_url(); ?>ipae/checkoutLogin" >
                                <label>Phone Number</label> 
                                <br> <span class='error' id='error_guest_phone'></span>
                                <input type="text" name="guest_phone" id="guest_phone" placeholder="Enter phone number" maxlength="10" onkeyup="return checkPhone()" required>

                                <button type="submit" id="continue" name="continue">Continue</button>
                           
                            </form>
                            
                        </div>

                        <div class="clearfix"></div>
                    </div>
                    
                   
                </div>
            </div>
        </div>
    </div>
</div> <!--container ends-->

  
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



$(function(){
 
    $('#usr2').keyup(function()
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


<script type="text/javascript">
    $(document).ready(function(){
        $("#guestUser").hide();

        $("input:radio[name=user_type]:first").attr('checked', true);

        $('#registered').click(function(){
           $('#guestUser').hide();
           $('#normalUser').show();
           $('.divider').css("height", "300");
           
        });
        $('#guest').click(function(){
           $('#normalUser').hide();
           $('#guestUser').show();
           $('.divider').css("height", "180");
        });

        $('.sign_up').click(function(){
          
           $('.divider').css("height", "700");
        });
        $('#final').click(function(){
          
           $('.divider').css("height", "300");
        });
    });

    function checkPhone(){
        var checkPhone = document.getElementById('guest_phone').value;

        if(checkPhone == ''){
            document.getElementById('error_guest_phone').innerHTML = "Phone is required";
            document.getElementById('continue').disabled = true;
            return false;
        }
        else if(isNaN(checkPhone)){
            document.getElementById('error_guest_phone').innerHTML = "Phone must be numeric";
            document.getElementById('continue').disabled = true;
            return false;
        }
        else{
            document.getElementById('error_guest_phone').innerHTML = "";
            document.getElementById('continue').disabled = false;
        }
    }

</script> 

</body>
</html>
