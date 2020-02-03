<!DOCTYPE HTML>
 <html class="no-js" lang="de">  
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">

    <title>OTP Process - IPAE</title>

    <!-- CSS -->
    <link href="<?php echo base_url();?>assests/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url();?>assests/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assests/css/bootsnav.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assests/css/style.css" rel="stylesheet">
     <link href="<?php echo base_url();?>assests/css/bootstrap.css" rel="stylesheet">
    
    
 
    
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


    
			
  <br>
    
  </div>
</div>

 <div class="container">
<div class="row">
<div >
<div class="form-body">
    
    <div class="tab-content">
        <div id="sectionA" class="tab-pane fade in active">
        <div class="innter-form">
            
            
            
            
            
            <div class="container">
<div class="row">
<div class="col-md-12">

<div class="alert alert-success">
<p class="text-left"><i class="fa fa-check-square-o" aria-hidden="true"></i> Your email verification has been done.</p>
<p class="text-left"> Please fill 4 digit OTP, to activate ip-ae account, We have already send OTP in regsitered mobile number.</p>
</div>


 <?php  if ($this->session->flashdata('error')) { ?>
            <div class="alert alert-danger text-center"> 
            <?= $this->session->flashdata('error') ?> </div>
            <?php } ?>
			 <?php  if ($error) { ?>
            <div class="alert alert-danger text-center"> 
            <?= $error ?> </div>
            <?php } ?>
</div>
<div class="col-md-6 col-md-offset-3" >
<div class="form-body" style="border:solid 1px #ccc">
    
    <div class="tab-content">
        <div id="sectionA" class="tab-pane fade in active">
        <div class="innter-form">
		<p class="text-center"><b>Hello!  </b></p>
		<p class="text-center"><img src="<?php echo base_url();?>assests/img/em.jpg" style="border:0px" /></p>
		
	
		<p class="text-center">Please fill 4 digit OTP, to activate ip-ae account, We have already send OTP in regsitered mobile number.</b></p>
		
		
             <form class="sa-innate-form" onsubmit="return validatelogin()" method="post" action ="<?php echo base_url(); ?>otp" >
  
         <input type="text" name="otp" id="otp" placeholder="Please fill 4 digit OTP." maxlength="4" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" >&nbsp;&nbsp;
             <span class='error' id='error_email'></span>
             

           
           <br>
             <button type="submit">Proceed</button>
	 
            <button type="button" onClick="window.location.href='<?php echo base_url().'resendotp'; ?>'" id="resendotp" style="display: none;">Resend OTP</button> <span  id='time'></span>
			<br>
           
            </form>
			
			
            </div>
            
            <div class="clearfix"></div>
        </div>
		
    </div>
    </div>
    </div>
    </div>
    </div>









 
            </div>
            
            <div class="clearfix"></div>
        </div>
        <div id="sectionB" class="tab-pane fade">
     
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
 
$(document).ready(function() {
  
  var i = 45;
var time = $("#time")
var timer = setInterval(function() {
  if (i==0) {
  time.html('');
  }else{
	   time.html("Resend OTP will activate after : "+i);
  }
  if (i == 0) {
    $("#resendotp").show();
    clearInterval(timer);

  }
  i--;
}, 1000)
});  

</script>


 




</body>
</html>
