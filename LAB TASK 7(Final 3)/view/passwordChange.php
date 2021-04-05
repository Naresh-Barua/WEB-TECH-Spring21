<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
     <style>
      body {background-color: #B0C4DE;}
    </style>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
 
    <?php
    include("header.php");
     ?>

    <p><h3>Change Password</h3></p>
    <form style="" method="post" action="../controller/passwordChanged.php">
        Current Password: <input type="text" name="cpassword" >
        <br><br>
        <span style="color:green">New Password:</span>
        <input type="text" name="npassword" >
        <br><br>
        <span style="color:Red">Retype New Password:</span>
        <input type="text" name="rnpassword" >
        <br><br>
        <input type="submit" name="submit" value="Submit">
        <br><br>
    </form>

     <?php
     include("foot.php");
      ?>

 </body>
</html>
