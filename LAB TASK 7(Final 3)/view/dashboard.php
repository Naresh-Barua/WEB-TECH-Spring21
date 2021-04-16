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


<!-- else {
  echo "You can not access the page.";
} -->
 
  </th>
  <th style="border:1px black;">
    <?php

if(isset($_SESSION['username']))
{echo  "<div style='text-align:center; margin-left:800px;' ><h1 > Welcome ".$_SESSION['username']."</h1> </div>" ;

}
?>
  </th>

    </tr>
   


  </table>

 
     <?php
     include("foot.php");
      ?>

 </body>
</html>
