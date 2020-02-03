function validateform(){
    var name = document.getElementById('usr').value;
    var email = document.getElementById('email').value;
    var contact = document.getElementById('contact').value;
    var atpos = email.indexOf("@");
    var dotpos = email.lastIndexOf(".");

    if(name == '' || name == null){
      document.getElementById('error_usr').innerHTML = 'Please fill first name.';
       
        
    }
    else if(!isNaN(name)){
       document.getElementById('error_usr').innerHTML = 'Please use only string in name.';
       
    }
     

    else{
        document.getElementById('error_usr').innerHTML = '';
       
    }

    if(email == '' || email == null){
       document.getElementById('error_email').innerHTML = '*Email is required';
       
    }
    else if(atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length){
       document.getElementById('error_email').innerHTML = '*Email invalid';
    }
    else{
       document.getElementById('error_email').innerHTML = '';
    }

    if(contact == '' || contact == null){
        document.getElementById('error_contact').innerHTML = '*Contact Number is required';
        
    }
    else if(isNaN(contact)){
      document.getElementById('error_contact').innerHTML = 'Contact Number must be numeric';
    }
    else if(contact.length < 9){
      document.getElementById('error_contact').innerHTML = 'Contact must be equal to 9 digits';
    }
    else{
       document.getElementById('error_contact').innerHTML = '';
        
    }

    

    if(name == '' || name == null || email == '' || email == null || contact == '' || contact == null || (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length) || contact.length < 9 || isNaN(contact) || name.length > 30 ){
      return false;
    }
    

  }


  function validatelogin()
  {


    var email = document.getElementById('email').value;
    var pwd = document.getElementById('pwd').value;
    var atpos = email.indexOf("@");
    var dotpos = email.lastIndexOf(".");

    

    if(email == '' || email == null){
       document.getElementById('error_email').innerHTML = '*Email is required';
       
    }
    else if(atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length){
       document.getElementById('error_email').innerHTML = '*Email invalid';
    }
    else if(email.length > 50){
       document.getElementById('error_email').innerHTML = '*Email must not be greater than 50 characters';
    }
    else{
       document.getElementById('error_email').innerHTML = '';
    }

    if(pwd == '' || pwd == null){
        document.getElementById('error_pwd').innerHTML = '*Password is required';
        
    }
    else if(pwd.length < 6){
        document.getElementById('error_pwd').innerHTML = '*Password must be 6 digit long';
        
    }
  
  

    

    if(email == '' || email == null || pwd == '' || pwd == null || (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length) || pwd.length < 6 || email.length > 50){
      return false;
    }
    

  }



  function validateregister()
  {


    var name = document.getElementById('usr2').value;

    
      var l_name = document.getElementById('l_usr2').value;

    var email = document.getElementById('email2').value;
    var pwd = document.getElementById('pwd2').value;
    var contact = document.getElementById('contact1').value;
    var atpos = email.indexOf("@");
    var dotpos = email.lastIndexOf(".");

     if(name == '' || name == null){
      document.getElementById('error_usr2').innerHTML = '*First Name is required';
       
    }
    else if(!isNaN(name)){
       document.getElementById('error_usr2').innerHTML = '*First Name must not contain numeric value';
       
    }
    else{
        document.getElementById('error_usr2').innerHTML = '';
       
    }


   


     if(l_name == '' || l_name == null){
      document.getElementById('error_lusr2').innerHTML = '*Last Name is required';
       
    }
    else if(!isNaN(l_name)){
       document.getElementById('error_lusr2').innerHTML = '*Last Name must not contain numeric value';
       
    }
    else{
        document.getElementById('error_lusr2').innerHTML = '';
       
    }



    if(email == '' || email == null){
       document.getElementById('error_email2').innerHTML = '*Email Id is required';
       
    }
    else if(atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length){
       document.getElementById('error_email2').innerHTML = '*Email Id  invalid';
    }
else if(email.length > 100){
       document.getElementById('error_email2').innerHTML = '*Email Id must not be greater than 100 characters';
    }
    else{
       document.getElementById('error_email2').innerHTML = '';
    }

    if(pwd == '' || pwd == null){
        document.getElementById('error_pwd2').innerHTML = '*Password is required';
        
    }
    else if(pwd.length < 6){
        document.getElementById('error_pwd2').innerHTML = '*Password must be 6 digit long';
        
    }

    if(contact == '' || contact == null){
        document.getElementById('error_contact1').innerHTML = '*Contact Number is required';
        
    }
    else if(isNaN(contact)){
      document.getElementById('error_contact1').innerHTML = '*Contact Number must be numeric';
    }
    else if(contact.length < 9){
      document.getElementById('error_contact1').innerHTML = '*Contact must be equal to 9 digits';
    }
    else{
       document.getElementById('error_contact1').innerHTML = '';
        
    }

  

    

    if(name =='' || name == null || (!isNaN(name))  || l_name =='' || l_name == null || (!isNaN(l_name)) || email == '' || email == null || email.length > 50 || pwd == '' || pwd == null || pwd.length < 6 ||(atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length || contact.length < 9 || isNaN(contact))){
      return false;
    }
    

  }