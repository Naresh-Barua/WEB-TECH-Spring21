<!DOCTYPE HTML>
<html>
<head>
 <style>
      body {background-color: #B0C4DE;}
    </style>
</head>
<body>
  
   <?php
    include("header.php");
     ?>


<form style=";" method="post" action="../controller/signupTutor.php">
  Name: <input type="text" name="name" >
  <br><br>
   E-mail: <input type="text" name="email">
  <br><br>
  User Name: <input type="text" name="username" >
  <br><br>
  Password: <input type="text" name="password" >
  <br><br>
  Comfirm Password: <input type="text" name="confirmpassword" >
  <br><br>
  Date of Birth: <input type="text" size="1" placeholder="dd" name="birthDate" > /
  <input type="text" size="1" placeholder="mm" name="birthMonth" > /
  <input type="text" size="2" placeholder="yyyy" name="birthYear" >
  <br><br>
  Gender:
    <input type="radio" name="gender"  value="male">Male
  <input type="radio" name="gender"  value="female">Female

  <input type="radio" name="gender"  value="other">Other
  <br><br>
  <input type="submit" name="submit" value="Submit">
</form>
     <?php
     include("foot.php");
      ?>

</body>
</html>