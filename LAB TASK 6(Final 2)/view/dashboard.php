<?php
session_start();

if(isset($_SESSION['username']))
{

 echo "<br><a href='dashboard.php'>Dashboard</a>";
 echo "<br><a href='viewprofile.php'>View Profile</a>";
 echo "<br><a href='profileEdit.php'>Edit Profile</a>";
  echo "<br><a href='passwordChange.php'>Change Password</a>";
  echo "<br><a href ='../controller/logout.php'>Logout </a>";
  echo "<h1 align='middle'> Welcome ".$_SESSION['username']."</h2>";



}
else {
  echo "You can not access the page.";
}
 ?>
