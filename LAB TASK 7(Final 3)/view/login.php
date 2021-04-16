<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

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
   .button{
    background-color:royalblue;
    width: 100%;
    padding: 5px 10px;
    color: white;
    border-radius: 5px;

  }
    </style>
 <link rel="stylesheet"  href="../css/">
    <title>Tutor Login</title>
  </head>
  <body>

     <?php
    include("header.php");
     ?>
  
<center>
    <form  method="post" action="<?php echo htmlspecialchars('../controller/loginTutor.php');?>"  >
      <div>
      
      </div> 
       <br></br>
       <br></br>
       <br></br>
       <br></br>
       <br></br>
       <br></br>

        User Name:<br></br> <input type="text" name="username" placeholder="Username">
         <span style="color: red;" class="error"><?php if (!empty($_GET['userNameErr'])) {echo $_GET['userNameErr'];} ?> </span>
        <br><br>
      Password:<br></br><input type="password" name="password" placeholder="Password">
      <span style="color: red;" class="error"><?php if (!empty($_GET['passwordErr'])) {echo $_GET['passwordErr'];} ?> </span>
        <br><br>
        <br>
        <input type="checkbox"  name="remember" value="remembered">
         <label for="remember">Remember Me</label>
         <br><br>
               <input class="" type="submit" name="submit" value="Log In" style="color: blue;">
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