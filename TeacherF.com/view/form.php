<!DOCTYPE html>
<html>
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
session_start();
if (empty($_SESSION['username'])) 
{
  header("location: login.php");
}
	echo "<div>";include 'header.php';echo "</div>";

 ?>
 
 <table>
  <tr >
    <th>
      <div style="float: left; text-align: left;">
       <a href="dashboard.php">Dashboard</a><br><br>
      <br><br>
       <a href="viewprofile.php">View Profile</a><br><br>
      <br><br>
     <a href="profileEdit.php">Edit Profile</a><br><br>
      <br><br>
      
       <a href="passwordChange.php">Change Password</a><br><br>
      <br><br>
      <a href="giveAd.php">Post Ad</a><br><br>
      <br><br>
       <a href="../controller/logout.php">Logout</a>
    </div>
  </th>
    </tr>
  </table>
<center>
<form action="upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</center>

</form>
<div><?php include 'foot.php';?></div>
</body>
</html>