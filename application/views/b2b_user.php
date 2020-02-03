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



<div class="row" >
    <div class="col-md-6 col-sm-12 col-lg-6 col-md-offset-3">
    <div class="panel panel-primary">
      <div class="panel-heading">Enter Your Details Here
      </div>
      <div class="panel-body">
        <form name="myform">
          <div class="form-group">
            <label for="myName">First Name *</label>
            <input id="myName" name="myName" class="form-control" type="text" data-validation="required">
            <span id="error_name" class="text-danger"></span>
          </div>
          <div class="form-group">
            <label for="lastname">Last Name *</label>
            <input id="lastname" name="lastname" class="form-control" type="text" data-validation="email">
            <span id="error_lastname" class="text-danger"></span>
          </div>
          <div class="form-group">
            <label for="age">Age *</label>
            <input id="age" name="age"  class="form-control" type="number" min="1" >
            <span id="error_age" class="text-danger"></span>
          </div>
          <div class="form-group">
            <label for="dob">Date Of Birth *</label>
            <input type="date" name="dob" id="dob" class="form-control">
            <span id="error_dob" class="text-danger"></span>
          </div>
          <div class="form-group">
            <label for="gender">Gender</label>
            <select name="gender" id="gender" class="form-control">
              <option selected>Male</option>
              <option>Female</option>
              <option>Other</option>
            </select>
            <span id="error_gender" class="text-danger"></span>
          </div>
          <div class="form-group">
            <label for="phone">Phone Number *</label>
            <input type="text" id="phone" name="phone" class="form-control" >
            <span id="error_phone" class="text-danger"></span>
          </div>
          <div class="form-group">
            <label for="disc">Discription</label>
            <textarea class="form-control" rows="3"></textarea>
          </div>
          
          <button id="submit" type="submit" value="submit" class="btn btn-primary center">Submit</button>
      
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
               $("#error_name").text("* You have to enter your first name!");
          }
          else
          {
            $(this).css("border-color", "#2eb82e");
            $('#submit').attr('disabled',false);
            $("#error_name").text("");

          }
       });
        $("#lastname").focusout(function(){
        if($(this).val()==''){
            $(this).css("border-color", "#FF0000");
              $('#submit').attr('disabled',true);
              $("#error_lastname").text("* You have to enter your Last name!");
          }
          else
          {
            $(this).css("border-color", "#2eb82e");
            $('#submit').attr('disabled',false);
            $("#error_lastname").text("");
          }
       });
        $("#dob").focusout(function(){
        if($(this).val()==''){
            $(this).css("border-color", "#FF0000");
              $('#submit').attr('disabled',true);
              $("#error_dob").text("* You have to enter your Date of Birth!");
          }
          else
          {
            $(this).css("border-color", "#2eb82e");
            $('#submit').attr('disabled',false);
            $("#error_dob").text("");
          }
       });
        $("#gender").focusout(function(){
          $(this).css("border-color", "#2eb82e");
       
       });
        $("#age").focusout(function(){
        if($(this).val()==''){
            $(this).css("border-color", "#FF0000");
              $('#submit').attr('disabled',true);
              $("#error_age").text("* You have to enter your Age!");
          }
          else
          {
            $(this).css({"border-color":"#2eb82e"});
            $('#submit').attr('disabled',false);
            $("#error_age").text("");

          }
          });
        $("#phone").focusout(function(){
            $pho =$("#phone").val();
        if($(this).val()==''){
            $(this).css("border-color", "#FF0000");
              $('#submit').attr('disabled',true);
              $("#error_phone").text("* You have to enter your Phone Number!");
          }
          else if ($pho.length!=10)
          {   
                    $(this).css("border-color", "#FF0000");
              $('#submit').attr('disabled',true);
              $("#error_phone").text("* Lenght of Phone Number Should Be Ten");
          }
          else if(!$.isNumeric($pho))
          {
                  $(this).css("border-color", "#FF0000");
              $('#submit').attr('disabled',true);
              $("#error_phone").text("* Phone Number Should Be Numeric");  
          }
          else{
            $(this).css({"border-color":"#2eb82e"});
            $('#submit').attr('disabled',false);
            $("#error_phone").text("");
          }

      });

      $( "#submit" ).click(function() {
        if($("#myName" ).val()=='')
        {
            $("#myName").css("border-color", "#FF0000");
              $('#submit').attr('disabled',true);
               $("#error_name").text("* You have to enter your first name!");
          }
          if($("#lastname" ).val()=='')
        {
            $("#lastname").css("border-color", "#FF0000");
              $('#submit').attr('disabled',true);
               $("#error_lastname").text("* You have to enter your Last name!");
          }
        if($("#dob" ).val()=='')
        {
            $("#dob").css("border-color", "#FF0000");
              $('#submit').attr('disabled',true);
               $("#error_dob").text("* You have to enter your Date of Birth!");
          }
        if($("#age" ).val()=='')
        {
            $("#age").css("border-color", "#FF0000");
              $('#submit').attr('disabled',true);
               $("#error_age").text("* You have to enter your Age!");
          }
          if($("#phone" ).val()=='')
        {
            $("#phone").css("border-color", "#FF0000");
              $('#submit').attr('disabled',true);
               $("#error_phone").text("* You have to enter your Phone Number!");
          }
      });


      
  });

    </script>
    

</body>
<?php include("footer.php");?>
</html>
