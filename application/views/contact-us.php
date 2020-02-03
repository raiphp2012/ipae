<!DOCTYPE HTML>

 <html class="no-js" lang="de">  <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">

    <title>Contact Us - IPAE</title>
     <link rel="icon" type="image/png"   href="<?php echo base_url();?>assests/img/favicon.png" />

    <!-- CSS -->
<link href='https://fonts.googleapis.com/css?family=Spectral' rel='stylesheet'>
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
    font-weight:normal;
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
	<div class="pld">
	<div class="check-out-area">
    <!-- Start Content -->
  <div class="container">   
 <div class="chrd"> <b>Get in touch with us</b> </div>
 <p class="subtitle text-justify" style="font-size: 15px;">We appreciate your feedback and would love to hear what you think about our programmes and services. </p>
 <div class="row map-form">

<?php if ($this->session->flashdata('success')) { ?>
            <div class="alert alert-success text-center"> 
            <?= $this->session->flashdata('success') ?> </div>
            <?php } ?>

     <?php if ($this->session->flashdata('error')) { ?>
            <div class="alert alert-danger text-center"> 
            <?= $this->session->flashdata('error') ?> </div>
            <?php } ?>






      <div class="col-md-6 well col-md-offset-3">
  <form method="post" name="registration"  action="<?php echo base_url(); ?>welcome/Contact_Us_Mailer" enctype="multipart/form-data" >

              <div class="form-group">
  <label for="fullname">Full Name*</label>
  <input type="text" class="form-control alphaonly" maxlength="25" id="fullname" placeholder="Enter your full name" name="name">
  <span class='error' id='name'></span>
</div>

<div class="form-group">
  <label for="email">Email*</label>
  <input type="email" class="form-control" placeholder="Enter your Email" id='email' maxlength="50" name="email">
  
</div>

<div class="form-group">
<label for="number">Contact number*</label> 
<div class="row">
  
  <div class="col-xs-3"><input style="font-weight: bold;text-align: center;" type="tel" class="form-control contact" disabled="true" placeholder="+971" id='mobile' maxlength="10" name="+971"></div>
  <div class="col-xs-9">
  <input type="tel" class="form-control contact" placeholder="Enter your Contact number" id='mobile' maxlength="10" name="mobile"></div>
  
   </div>
</div>

<div class="form-group">
  <label for="subject">Subject*</label>
 <!--  <input type="text" class="form-control alphaonly" id="pwd" placeholder="Enter your Subject" maxlength="50" name="subject" > -->
 <select name="subject" class="form-control" id="subjectt">
     <?php foreach($subject as $row):?>
    <option value="<?php echo $row->subjectMessage;?>"><?php echo $row->subjectName;?></option>
  <?php endforeach;?>
 </select>
</div>

  





<div class="form-group">
  <label for="message">Message*</label>
  <div class="colors" id="Enquiry" style="display: none; border: 1px solid #ccc; margin-top: 20px;padding: 20px;">Dear Sir/Madam<br>

 <span id="contact"></span> <br>


  <textarea class="form-control" rows="5" placeholder="Enter your Message" name="message" maxlength="250" required>
    

  </textarea>
  <br>
 
  <span  style="display:none;" id="resume">Upload Resume<input type="file" name="resume"></span>
  <br>
  Thanks!!
  </div>

</div>




 <input type="submit" name='send' class="btn btn-primary" value='Send'>

   </form>
          </div> 



</div>
 
 </div>
 
 
 <div class="content-center well">
<h5 class="title" id="title" style="font-size: 25px;">Address</h5>   
<p class="subtitle" style="font-size: 15px;">Office No. 303,
Ali Rashid Alabbar Al Marar, Deira,
P.O. Box: 1272,<br>
Dubai-United Arab Emirates<br>
Email: info@ip-ae.com <br>
Contact: (+971)-5-6545 5670</p>

</div>

 
 
 </div>
</div>	
	


<?php include("footer.php");?>
    
  <!-- START JAVASCRIPT -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assests/js/bootstrap.min.js"></script>
    
    <!-- Bootsnavs -->
<script src="<?php echo base_url();?>assests/js/bootsnav.js"></script>
<script src="<?php echo base_url();?>assests/js/validation.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
  <script>
            // Wait for the DOM to be ready
   $(function() {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='registration']").validate({
    // Specify validation rules
    rules: {
    
      name: "required",
      mobile:"required",
      resume:"required",
      email: {
        required: true,  
        email: true
      },  
      message:"required",
     
    },
    // Specify validation error messages
    messages: {
      name:"Please enter your full name",
     
   
   mobile:{
   required:"Please enter mobile number ",
   minlength:"minlength 10 digit",
   maxlength:"maxlenth 10 digit",
   },

   
   message:"Please enter the message",
   
     
      email: "Please enter a valid email"
    },
    
    submitHandler: function(form) {
      form.submit();
    }
  });
});
  </script>


  <script type="text/javascript">


$('.alphaonly').bind('keyup blur',function(){ 
    var node = $(this);
    node.val(node.val().replace(/[^a-zA-Z ]/g,'') ); }
);

$('.contact').bind('keyup blur',function(){ 
    var node = $(this);
    node.val(node.val().replace(/[^0-9]/g,'') ); }
);


</script>

 <script type="text/javascript">
$(function() {
      
            $('.colors').hide();
          
        });
   
</script>
<script type="text/javascript">
  
$(document).ready(function(){
var val = $('#subjectt').val();
$('#contact').text(val);
  $('#Enquiry').show();
  
$('#subjectt').on('change', function() {
  var value=this.value;
  if(value=="I want to apply in:")
  {
    
    $("#resume").show();
    
  }
  else{
    $("#resume").hide();
  }
  $('#contact').text(value);
  $('#Enquiry').show();
  
});
});

</script>


</body>
</html>


