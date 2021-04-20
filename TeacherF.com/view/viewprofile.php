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

  

  .button{
    background-color:royalblue;
    width: 100%;
    padding: 5px 10px;
    color: white;
    border-radius: 8px;

  }
  .button1{
    background-color:royalblue;
    width: 100%;
    padding: 5px 10px;
    color: white;
    border-radius: 8px;

  }
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
if(isset($_SESSION['username']))
{
$data = fetchStudent($_SESSION['username']);


  if($data!=NULL)
  {
    foreach ($data as $i => $student):

         $name= $student['NAME'] ;
         $email=$student['EMAIL'];
         $username= $student['USERNAME'] ;
         $birth=$student['BIRTH'];
         $gender= $student['GENDER'] ;
         $password= $student['PASSWORD'];
    endforeach;

   
  }
}
?>
<table >
   <tr style="border:1px black;" >
      <th style="border:1px black;">
      <div style="float: left; text-align: left;">
       <a href="dashboard.php">Dashboard</a><br><br>
      <br><br>
       <a href="viewprofile.php">View Profile</a><br><br>
      <br><br>
      <!-- <a href="passwordChange.php">Change Password</a><br><br>
      <br><br> -->
      <a href="giveAd.php">Post Ad</a><br><br>
      <br><br>
      <a href="myAd.php">My Ads</a><br><br>
      <br><br>
       <a href="../controller/logout.php">Logout</a>
        </div>
    
    </th>
    <th>
      <?php
      echo"<div style='text-align:center; margin-left:800px;' >";
       echo "<h2>Name: $name</h2>";
    echo "<br />Email: $email" ;
    echo "<br />Username: $username";
    echo "<br />Date of Birth: $birth";
    echo "<br />Gender: $gender";
    echo "<br />Password: $password <br>" ;
    echo '<br> <a class="button" href="profileEdit.php"><b>Edit</b></a><br>' ;
      echo '<br /><a class="button1" href="passwordChange.php"><b>Change Password</b></a></div><br><br>
      <br><br>';
      ?>
    </th>
    </tr> 
</table>
  <center>


<!-- else {
  echo "You cannot access this page!!";
}
 ?> -->

 </center>
     <?php
     include("foot.php");
      ?>

      
 </body>
</html>
