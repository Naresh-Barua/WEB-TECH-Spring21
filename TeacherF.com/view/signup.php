<!DOCTYPE HTML>
<html>
<head>
   <script>
          function validate() {
                var name=document.RegForm.name.value;
                var email=document.RegForm.email.value;
                var username=document.RegForm.username.value;  
                var password=document.RegForm.password.value;
                var confirmpassword=document.RegForm.confirmpassword.value;
                var birth=document.RegForm.birth.value;
                var gender=document.RegForm.gender.value;
                  
      
        
     if (name==null || name==""){  
        alert("Name is required");  
        return false;  
      }

      else if (name.value.length<6){  
        alert("Name has to be atleast 2 characters");  
        return false;  
      }

      else if(email==null || email==""){
        alert("Email is required");
        return false;
      }

      else if (email.value != /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/) {
        alert("Invalid email format");
        return false;
      }

      else if (username==null || username==""){  
        alert("username required");  
        return false;  
      }
       

      else if(password==null || password==""){
        alert("Password required");
        return false;

      }

      else if(password.length<8){  
        alert("Password must be at least 8 characters long.");  
        return false;  
      } 

      else if (confirmpassword==null || confirmpassword=="") {
        alert("confirm password is required");
        return false;

      } 
      else if(confirmpassword.value!=password.value){
        alert("Passwords must be same");
        return false;

      }
      else if (age==null || age==""){  
        alert("Date of birth can't be blank");  
        return false;   
      } 

      else if(gender==null || gender==""){
        alert("Gender can't be blank");
        return false;
      }
    }
    function checkEmpty() {
        if (document.RegForm.name.value = "") {
          alert("Name can't be blank");
            return false;  
        }
      }  
    function checkName() {
      if (document.getElementById("name").value == "") {
          document.getElementById("nameErr").innerHTML = "Name can't be blank";
          document.getElementById("nameErr").style.color = "red";
          document.getElementById("name").style.borderColor = "red";
      }
      else if(document.getElementById("name").value.length<6){
          document.getElementById("name").style.borderColor = "red";
          document.getElementById("nameErr").style.color = "red";
        document.getElementById("nameErr").innerHTML = "Name has to be atleast 2 characters!";
      }
      else{
          document.getElementById("nameErr").innerHTML = "";
          document.getElementById("nameErr").style.color ="red";
        document.getElementById("name").style.borderColor = "black";
      }
      
        }


        function checkEmail(){
          if (document.getElementById("email").value ==""){
            document.getElementById("emailErr").innerHTML = "Email can't be blank";
            document.getElementById("emailErr").style.color = "red";
            document.getElementById("email").style.borderColor = "red";
          }
          else if (document.getElementById("email").value.indexOf('@')<=0){
            document.getElementById("emailErr").innerHTML = "Invalid format!";
            document.getElementById("emailErr").style.color = "red";
            document.getElementById("email").style.borderColor = "red";

          }
           else{
            document.getElementById("emailErr").innerHTML = "";
            document.getElementById("emailErr").style.color = "red";
        document.getElementById("email").style.borderColor = "black";
          }
         
                }


        function checkuserName() {
      if (document.getElementById("username").value == "") {
          document.getElementById("userNameErr").innerHTML = "Username can't be blank";
          document.getElementById("userNameErr").style.color = "red";
          document.getElementById("username").style.borderColor = "red";
      }else{
        document.getElementById("userNameErr").innerHTML = "";
          document.getElementById("userNameErr").style.color = "red";
        document.getElementById("username").style.borderColor = "black";
      }
      
        }

        function showHint(str) {
    if (str.length == 0) {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "../js/gethint.php?q=" + str, true);
        xmlhttp.send();
    }
}

        function checkPass(){
          if (document.getElementById("password").value == "") {
          document.getElementById("passwordErr").innerHTML = "Password can't be blank";
          document.getElementById("passwordErr").style.color = "red";
          document.getElementById("password").style.borderColor = "red";
      }else if(document.getElementById("password").value.length<8){
          document.getElementById("password").style.borderColor = "red";
          document.getElementById("passwordErr").style.color = "red";
        document.getElementById("passwordErr").innerHTML = "Password must be at least 8 characters long.";
      }
       else if(document.getElementById("password").value.search(/[!\@\#\$\%]/)==-1){
      document.getElementById("passwordErr").innerHTML = "Password must have 1 special character !";
          document.getElementById("password").style.borderColor = "red";
          document.getElementById("passwordErr").style.color = "red";
        
     }
      else{
        document.getElementById("passwordErr").innerHTML = "";
          document.getElementById("passwordErr").style.color = "red";
        document.getElementById("password").style.borderColor = "black";
      }
        }

        function checkconPass(){
          if (document.getElementById("confirmpassword").value == "") {
          document.getElementById("confirmpasswordErr").innerHTML = "Password can't be blank";
          document.getElementById("confirmpasswordErr").style.color = "red";
          document.getElementById("confirmpassword").style.borderColor = "red";
      }
      else if(document.getElementById("confirmpassword").value != document.getElementById("password").value){
          document.getElementById("confirmpassword").style.borderColor = "red";
          document.getElementById("confirmpasswordErr").style.color = "red";
        document.getElementById("confirmpasswordErr").innerHTML = "Both Passwords must be same!";
      }
      else if(document.getElementById("confirmpassword").value.length<8){
          document.getElementById("confirmpassword").style.borderColor = "red";
          document.getElementById("confirmpasswordErr").style.color = "red";
        document.getElementById("confirmpasswordErr").innerHTML = "Password must be at least 8 characters long.";
      }
      else{
        document.getElementById("confirmpasswordErr").innerHTML = "";
          document.getElementById("confirmpasswordErr").style.color = "red";
        document.getElementById("confirmpassword").style.borderColor = "black";
      }
        }

        function checkAge(){
          if (document.getElementById("birth").value == "") {
          document.getElementById("birthErr").innerHTML = "age can't be blank";
          document.getElementById("birthErr").style.color = "red";
          document.getElementById("birth").style.borderColor = "red";
      }else if(document.getElementById("birth").value < 10){
          document.getElementById("birthErr").style.color = "red";
          document.getElementById("birth").style.borderColor = "red";
        document.getElementById("birthErr").innerHTML = "age is less";
      }
      else{
          document.getElementById("birthErr").style.color = "red";
        document.getElementById("birthErr").innerHTML = "age is ok";
        document.getElementById("birth").style.borderColor = "black";
      }
        }

        function checkGender() {
      if (document.getElementById("gender").value == "") {
          document.getElementById("genderErr").innerHTML = "Gender can't be blank";
          document.getElementById("genderErr").style.color = "red";
          document.getElementById("gender").style.borderColor = "red";
      }else{
          document.getElementById("genderErr").innerHTML = "";
          document.getElementById("genderErr").style.color = "red";
        document.getElementById("gender").style.borderColor = "black";
      }
      
        }

        
        </script>
  
	 <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <style>
      body{background-image: url('../photos/get-started-bg_2_optimized.png');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover; }
    </style>
</head>
<body>
  
   <?php
    include("header.php");
     ?>

<center>
  <div>
     <br><br>
        <br><br>
        <br><br>
      </div>

<form name="RegForm" method="post" onsubmit="validate()" action="<?php echo htmlspecialchars('../controller/signuptutor.php');?>" >

  Name:<br></br><input type="text" name="name" id="name" onkeyup="checkName()" onblur="checkName()" placeholder="Name" >
  <!-- <span id="txtHint"></span> -->
  <span id="nameErr"></span>
  <span style="color: red;class="error"><?php if (!empty($_GET['nameErr'])) {echo $_GET['nameErr'];} ?> </span>
  <br>
   <br>

   E-mail:<br></br><input type="text" name="email" id="email" onkeyup="checkEmail()" onblur="checkEmail()" placeholder="Email">
   <span id="emailErr"></span>
    <span style="color: red;class="error"><?php if (!empty($_GET['emailErr'])) {echo $_GET['emailErr'];} ?> </span>
  <br>
  <br>
  
 User Name:<br></br><input type="text" name="username" id="username" onkeyup="showHint(this.value)" onkeyup="checkuserName()" onblur="checkuserName()" placeholder="Username" >
  <span id="txtHint"></span>
 <span id="userNameErr"></span>
 <span style="color: red;class="error"><?php if (!empty($_GET['userNameErr'])) {echo $_GET['userNameErr'];} ?> </span>
  <br>

   
Password:<br></br><input type="password" name="password" id="password" onkeyup="checkPass()" onblur="checkPass()" placeholder="Password">
<span id="passwordErr"></span>
<span style="color: red;class="error"><?php if (!empty($_GET['passwordErr'])) {echo $_GET['passwordErr'];} ?> </span>
  <br>
  <br>
  
  Confirm Password:<br></br><input type="password" name="confirmpassword" id="confirmpassword" onkeyup="checkconPass()" onblur="checkconPass()" placeholder="Confirm Password">
  <span id="confirmpasswordErr"></span>
  <span style="color: red;class="error"><?php if (!empty($_GET['confirmpasswordErr'])) {echo $_GET['confirmpasswordErr'];} ?> </span>
  <br>
  <br>
   
  Date of Birth:<br></br> <input type="date" size="1" id="birth"  name="birth"  onkeyup="checkAge()" onblur="checkAge()" >
  <span id="birthErr"></span>
  <span style="color: red;class="error"><?php if (!empty($_GET['birthErr'])) {echo $_GET['birthErr'];} ?> </span>
  <br><br>
  Gender: <br></br>
    <input type="radio" name="gender" id="gender" onkeyup="checkGender()" onblur="checkGender()"  value="male">Male
  <input type="radio" name="gender" id="gender" onkeyup="checkGender()" onblur="checkGender()"  value="female">Female
  <input type="radio" name="gender" id="gender" onkeyup="checkGender()" onblur="checkGender()"  value="other">Other
  <span id="genderErr"></span>
  <span style="color: red;class="error"><?php if (!empty($_GET['genderErr'])) {echo $_GET['genderErr'];} ?> </span>
  <br>
  <br>
   
  <input type="submit" name="submit" value="Sign Up" style="color: blue;">
   <p>
            Already having an account?
            <a href="login.php">
                Login Here!
            </a>
        </p>

</form>
     <?php
     include("foot.php");
      ?>
</center>
</body>
</html>