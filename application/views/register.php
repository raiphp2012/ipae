<!DOCTYPE HTML>
 <html class="no-js" lang="de">  <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">

    <title>Apple iphone</title>
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
      
  .palel-primary
  {
    border-color: #bce8f1;
  }
  .panel-primary>.panel-heading
  {
    background:#bce8f1;
    
  }
  .panel-primary>.panel-body
  {
    background-color: #EDEDED;
  }


    </style>
    
    
    
</head>
<body >
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

 <br>
 <br>


 <?php if ($this->session->flashdata('response')) { ?>
            <div class="alert alert-success text-center"> 
            <?= $this->session->flashdata('response') ?> </div>
            <?php } ?>

<div class="row" >
    <div class="col-md-6 col-sm-12 col-lg-6 col-md-offset-3">
    <div class="panel panel-primary">
      <div class="panel-heading">Enter Your Details Here
      </div>
      <div class="panel-body">
        <form name="myform" action='<?php echo base_url(); ?>b2b/register' method='post'>
        
          <div class="form-group">
            <label for="myName">Name *</label>
            <input id="myName" name="myName" class="form-control" type="text" data-validation="required">
            <span id="error_name" class="text-danger"></span>
          </div>
          <div class="form-group">
            <label for="email">Email *</label>
            <input id="email" name="email" class="form-control" type="email" data-validation="required">
            <span id="error_email" class="text-danger"></span>
          </div>
          <div class="form-group">
            <label for="password">Password *</label>
            <input id="password" name="password" type="password" class="form-control">
            <span id="error_password" class="text-danger"></span>
          </div>
          <div class="form-group">
            <label for="cpassword">Confirm Password *</label>
            <input id="cpassword" name="cpassword" type="password" class="form-control">
            <span id="error_cpassword" class="text-danger"></span>
          </div>
          <div class="form-group">
            <label for="contact">Mobile Number *</label>
            <input type="text" name="mobile" id="mobile" class="form-control">
          <span id="error_mobile" class="text-danger"></span>
          </div>
          <div class="form-group">
            <label for="landline">Landline Number</label>
            <input type="text" id="landline" name="landline" class="form-control" >
            
          </div>
          
          <div class="form-group">
            <label for="fax">Fax </label>
            <input type="text" id="fax" name="fax" class="form-control" >
            
          </div>
          <div class="form-group">
            <label for="company_name">Company Name</label>
            <input type="text" id="company_name" name="company_name" class="form-control" >
          
          </div>
          <div class="form-group">
            <label for="address">Address</label>
            <input type="text" id="address" name="address" class="form-control" >
            
          </div>

          <div class="form-group">
            <label for="country">Country</label>
            <select id="country" name="country" onchange="return get_subcategory(this.value)" class="form-control" >
                <option value=''>Select Country</option>
                <?php
                   foreach ($country_names as $names) { ?>
                     <option value='<?php echo $names['country_id']; ?>'><?php echo $names['name']; ?></option>
                 <?php  }
                ?>
            </select>
          </div>
          <div class="form-group">
            <label for="state">State</label>
            <select id="state" name="state" class="form-control" >
                <option value=''>Select State</option>
            </select>
          </div>
          <div class="form-group">
            <label for="city">City</label>
            <input id="city" name="city" type='text' class="form-control" >
             
          </div>
          <div class="form-group">
            <label for="postal_code">Postal Code</label>
            <input type="text" id="postal_code" name="postal_code" class="form-control" >
            
          </div>
          
          <button id="submit" type="submit" value="submit" name='submit' class="btn btn-primary center">Submit</button>
      
        </form>

      </div>
    </div>
  </div>
</div>




    
	<!-- START JAVASCRIPT -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assests/js/bootstrap.min.js"></script>
    
    <!-- Bootsnavs -->
    <script src="<?php echo base_url();?>assests/js/bootsnav.js"></script>
    <script type="text/javascript">
     

      $(document).ready(function(){
    $flag=1;
      $("#myName").focusout(function(){
        if($(this).val()==''){
            $(this).css("border-color", "#FF0000");
              $('#submit').attr('disabled',true);
               $("#error_name").text("* You have to enter your name!");
          }
          else
          {
            $(this).css("border-color", "#2eb82e");
            $('#submit').attr('disabled',false);
            $("#error_name").text("");

          }
       });
        $("#email").focusout(function(){
        if($(this).val()==''){
            $(this).css("border-color", "#FF0000");
              $('#submit').attr('disabled',true);
              $("#error_email").text("* You have to enter email");
          }
          else
          {

            var x = $("#email" ).val();
            var atpos = x.indexOf("@");
            var dotpos = x.lastIndexOf(".");
            if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
                $("#email").css("border-color", "#FF0000");
                $('#submit').attr('disabled',true);
                 $("#error_email").text("* Not a valid email address!");
            }
            else{
                $(this).css("border-color", "#2eb82e");
            $('#submit').attr('disabled',false);
            $("#error_email").text("");
            }


           
          }
       });
        $("#password").focusout(function(){
        if($(this).val()==''){
            $(this).css("border-color", "#FF0000");
              $('#submit').attr('disabled',true);
              $("#error_password").text("* You have to enter password!");
          }
          else
          {
            $(this).css("border-color", "#2eb82e");
            $('#submit').attr('disabled',false);
            $("#error_password").text("");
          }
       });
       
      
        $("#mobile").focusout(function(){
            $pho =$("#mobile").val();
        if($(this).val()==''){
            $(this).css("border-color", "#FF0000");
              $('#submit').attr('disabled',true);
              $("#error_mobile").text("* You have to enter your Mobile Number!");
          }
          else if ($pho.length!=10)
          {   
                    $(this).css("border-color", "#FF0000");
              $('#submit').attr('disabled',true);
              $("#error_mobile").text("* Lenght of Mobile Number Should Be Ten");
          }
          else if(!$.isNumeric($pho))
          {
                  $(this).css("border-color", "#FF0000");
              $('#submit').attr('disabled',true);
              $("#error_mobile").text("* Mobile Number Should Be Numeric");  
          }
          else{
            $(this).css({"border-color":"#2eb82e"});
            $('#submit').attr('disabled',false);
            $("#error_mobile").text("");
          }

      });

      $( "#submit" ).click(function() {
        if($("#myName" ).val()=='')
        {
            $("#myName").css("border-color", "#FF0000");
              $('#submit').attr('disabled',true);
               $("#error_name").text("* You have to enter name!");
          }
          if($("#email" ).val()=='')
        {
            $("#email").css("border-color", "#FF0000");
              $('#submit').attr('disabled',true);
               $("#error_email").text("* You have to enter email!");
          }
        if($("#password" ).val()=='')
        {
            $("#password").css("border-color", "#FF0000");
              $('#submit').attr('disabled',true);
               $("#error_password").text("* You have to enter your password!");
          }

        if($("#password" ).val() != $("#cpassword" ).val())
        {
            $("#cpassword").css("border-color", "#FF0000");
              $('#submit').attr('disabled',true);
               $("#error_cpassword").text("* Password and Confirm Password must match!");
          }
          if($("#mobile" ).val()=='')
        {
            $("#mobile").css("border-color", "#FF0000");
              $('#submit').attr('disabled',true);
               $("#error_mobile").text("* You have to enter your Mobile Number!");
          }
          var x = $("#email" ).val();
          var atpos = x.indexOf("@");
          var dotpos = x.lastIndexOf(".");
          if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
              $("#email").css("border-color", "#FF0000");
              $('#submit').attr('disabled',true);
               $("#error_email").text("* Not a valid email address!");
          }
       
      });


      
  });

    </script>
    

    <script type="text/javascript">
    function get_subcategory(country_id) {
      //alert(id); exit();
        $.ajax({
            url: '<?php echo base_url();?>b2b/get_state/' + country_id ,
            success: function(response)
            {
              //alert(response);
               
               jQuery('#state').html(response);
            }
        });
    }



</script>

</body>
<script src="http://iamrohit.in/lab/js/location.js"></script>
<?php include("footer.php");?>
</html>
