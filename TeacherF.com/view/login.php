<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  	<script>
 function validate() {
                var username=document.LoginForm.username.value;  
			var password=document.LoginForm.password.value;  
			
			  
			if (username==null || username==""){  
			  alert("Username required");  
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
			else if (age==null || age==""){  
			  alert("Age can't be blank");  
			  return false;   
			} 
		}
		function checkEmpty() {
		  	if (document.LoginForm.username.value = "") {
		  		alert("Username can't be blank");
		        return false;  
		  	}
		  }  
		function checkName() {
			if (document.getElementById("username").value == "") {
			  	document.getElementById("userNameErr").innerHTML = "Username can't be blank";
			  	document.getElementById("userNameErr").style.color = "red";
			  	document.getElementById("username").style.borderColor = "red";
			}else{
			  	document.getElementById("userNameErr").innerHTML = "";
				document.getElementById("username").style.borderColor = "black";
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
			else{
				document.getElementById("passwordErr").innerHTML = "";
			  	document.getElementById("passwordErr").style.color = "red";
				document.getElementById("password").style.borderColor = "black";
			}
        }
        function checkAge(){
        	if (document.getElementById("age").value == "") {
			  	document.getElementById("ageErr").innerHTML = "age can't be blank";
			  	document.getElementById("ageErr").style.color = "red";
			  	document.getElementById("age").style.borderColor = "red";
			}else if(document.getElementById("age").value < 10){
			  	document.getElementById("ageErr").style.color = "red";
			  	document.getElementById("age").style.borderColor = "red";
				document.getElementById("ageErr").innerHTML = "age is less";
			}
			else{
			  	document.getElementById("ageErr").style.color = "red";
				document.getElementById("ageErr").innerHTML = "age is ok";
				document.getElementById("age").style.borderColor = "black";
			}
        }
		
  	</script>

  	 <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <style>
      body {background-image: url('../photos/get-started-bg_2_optimized.png');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover; }
   
    </style>
 <link rel="stylesheet"  href="../css/">
    <title>Tutor Login</title>
  </head>
  <body>

     <?php
    include("header.php");
     ?>
  
<center>
    <form name="LoginForm" onsubmit="validate()" method="post" action="<?php echo htmlspecialchars('../controller/loginTutor.php');?>"  >
      <div>
      
      </div> 
       <br></br>
       <br></br>
       <br></br>
       <br></br>
       <br></br>
       <br></br>

        User Name:<br></br> <input type="text" name="username" id="username" onkeyup="checkName()" onblur="checkName()"  placeholder="Username">
      <span id="userNameErr"></span>

         <span style="color: red;" class="error"><?php if (!empty($_GET['userNameErr'])) {echo $_GET['userNameErr'];} ?> </span>
        <br><br>

      Password:<br></br><input type="password" name="password" id="password" onkeyup="checkPass()" onblur="checkPass()" placeholder="Password">
       <span id="passwordErr"></span>

      <span style="color: red;" class="error"><?php if (!empty($_GET['passwordErr'])) {echo $_GET['passwordErr'];} ?> </span>
        <br><br>
        <br>

        <input type="checkbox"  name="remember" value="remembered">
         <label for="remember">Remember Me</label>
         <br><br>
               <input  type="submit" name="submit"  value="Log In" style="color: blue;">
          <meta ><a href ="forget password.php">Forget Password? </a></meta><br></br>
          Don't have any account?
          <meta ><a href ="signup.php"> Signup now! </a></meta>
        

    </form>
    
</center>

<?php
     include("foot.php");
      ?>
  </body>
</html>