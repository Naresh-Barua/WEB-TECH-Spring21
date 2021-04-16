<!DOCTYPE HTML>
<html>
<head>
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

<form style=";" method="post" action="<?php echo htmlspecialchars('../controller/signuptutor.php');?>" >

  Name:<br></br><input type="text" name="name" placeholder="Name" >
  <span style="color: red;class="error"><?php if (!empty($_GET['nameErr'])) {echo $_GET['nameErr'];} ?> </span>
  <br>
   <br>

   E-mail:<br></br><input type="text" name="email" placeholder="Email">
    <span style="color: red;class="error"><?php if (!empty($_GET['emailErr'])) {echo $_GET['emailErr'];} ?> </span>
  <br>
  <br>
 User Name:<br></br><input type="text" name="username" placeholder="Username" >
 <span style="color: red;class="error"><?php if (!empty($_GET['userNameErr'])) {echo $_GET['userNameErr'];} ?> </span>
  <br>
  <br>
   
Password:<br></br><input type="password" name="password" placeholder="Password">
<span style="color: red;class="error"><?php if (!empty($_GET['passwordErr'])) {echo $_GET['passwordErr'];} ?> </span>
  <br>
  <br>
  
  Confirm Password:<br></br><input type="password" name="confirmpassword" placeholder="Confirm Password">
  <span style="color: red;class="error"><?php if (!empty($_GET['confirmpasswordErr'])) {echo $_GET['confirmpasswordErr'];} ?> </span>
  <br>
  <br>
   
  Date of Birth:<br></br> <input type="date" size="1"  name="birth" >
  <span style="color: red;class="error"><?php if (!empty($_GET['birthErr'])) {echo $_GET['birthErr'];} ?> </span>
  <br><br>
  Gender: <br></br>
    <input type="radio" name="gender"  value="male">Male
  <input type="radio" name="gender"  value="female">Female

  <input type="radio" name="gender"  value="other">Other
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