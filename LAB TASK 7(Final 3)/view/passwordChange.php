<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <style>
       body { background-image: url('../photos/get-started-bg_2_optimized.png');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover; }
    </style>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
 
    <?php
    include("header.php");
     ?>
     <?php
session_start();
if (empty($_SESSION['username'])) 
{
  header("location: login.php");
}else{
	echo "<div style='float: right';>"." Logged in as <a href='viewprofile.php'>".$_SESSION['username']."</a> | ";
	echo "<a href='../controller/logout.php'>Logout</a><br>";
	echo "</div><br><br><br><br><hr>";
}
?>
<table>
   <tr style="border:1px black;" >
      <th style="border:1px black;">
      <div style="float: left; text-align: left;">
       <a href="dashboard.php">Dashboard</a><br><br>
      <br><br>
       <a href="viewprofile.php">View Profile</a><br><br>
      <br><br>
      <a href="passwordChange.php">Change Password</a><br><br>
      <br><br>
      <a href="giveAd.php">Post Ad</a><br><br>
      <br><br>
      <a href="myAd.php">My Ads</a><br><br>
      <br><br>
       <a href="../controller/logout.php">Logout</a>
    </div>
  </th>
  <th>
  	<center>
  	<div style="text-align:center; margin-left:800px;">
    <form style="" method="post" action="<?php echo htmlspecialchars('../controller/passwordChanged.php');?>" >
        Current Password: <br></br><input type="text" name="cpassword" >
         <span style="color: red;" class="error"><?php if (!empty($_GET['cpasswordErr'])) {echo $_GET['cpasswordErr'];} ?> </span>
        <br><br>
        <span style="color:black">New Password:<br></br></span>
        <input type="text" name="npassword" >
        <span style="color: red;" class="error"><?php if (!empty($_GET['npasswordErr'])) {echo $_GET['npasswordErr'];} ?> </span>
        <br><br>
        <span style="color:black">Retype New Password:<br></br></span>
        <input type="text" name="rnpassword" >
        <span style="color: red;" class="error"><?php if (!empty($_GET['rnpasswordErr'])) {echo $_GET['rnpasswordErr'];} ?> </span>
        <br><br>
        <input type="submit" name="submit" value="Submit">
        <br><br>
    </form>
  </div>
  </center>
  </th>
    </tr>
  </table>

 



     <?php
     include("foot.php");
      ?>

 </body>
</html>
