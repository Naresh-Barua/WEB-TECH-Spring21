<!DOCTYPE html>
<html lang="en" dir="ltr">
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
require_once '../controller/tutorDetails.php';
?>
<?php
$data = fetchStudent($_SESSION['username']);
if($data!=NULL)
{
  foreach ($data as $i => $student):

       $name= $student['NAME'] ;
       $email=$student['EMAIL'];
       $birth=$student['BIRTH'];
       $gender= $student['GENDER'] ;
  endforeach;
$birth=str_replace('/','', $birth );
$birthDate=$birth[0].$birth[1];
$birthMonth=$birth[2].$birth[3];
$birthYear=$birth[4].$birth[5].$birth[6].$birth[7];


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
      <form method="post" action="<?php echo htmlspecialchars('../controller/updatedProfile.php');?>" >


  <label for="name">Name:</label><br>
  <input value="<?php echo $name ?>" type="text" id="name" name="name">
   <span style="color: red;class="error"><?php if (!empty($_GET['nameErr'])) {echo $_GET['nameErr'];} ?> </span> <br>


  <label for="email">Email:</label><br>
  <input value="<?php echo $email ?>" type="text" id="email" name="email">
  <span style="color: red;class="error"><?php if (!empty($_GET['emailErr'])) {echo $_GET['emailErr'];} ?> </span> <br>
   
  Date of Birth:<br></br> <input type="date" size="1"  name="birth" > 

  <span style="color: red;class="error"><?php if (!empty($_GET['birthErr'])) {echo $_GET['birthErr'];} ?> </span>
  <br></br>
  <input type="submit" name = "updateTutor" value="Update">
  <input type="reset">
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
