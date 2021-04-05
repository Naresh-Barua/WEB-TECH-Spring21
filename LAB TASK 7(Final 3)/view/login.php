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

    <form style="border:3px; border-style:solid; border-color: #B0C4DE; padding: 1em;" method="post" action="../controller/loginTutor.php">
      
        User Name: <input type="text" name="username">
        <br><br>
        Password: <input type="text" name="password">
        <br><br>
        <br>
        <input type="checkbox"  name="remember" value="remembered">
         <label for="remember">Remember Me</label>
         <br><br>
         <input type="submit" name="submit" value="Submit">
          <meta ><a href ="forget password.php">Forget Password? </a></meta>
    </form>
    <?php
     include("foot.php");
      ?>

  </body>
</html>