<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <script>
function showCustomer(str) {
  var xhttp;    
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "../model/getad.php?q="+str, true);
  xhttp.send();
}
</script>
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

  table,th,td {
  border : 1px solid black;
  border-collapse: collapse;
}
th,td {
  padding: 5px;
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

?>



<table >
  <tr>
    <th>
    
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
     <form action=""> 
<select name="customers" onchange="showCustomer(this.value)">
<option value="">Select a customer:</option>
<option value="Jacob">Jacob Floid </option>
<option value="Nisho">Nisho Barua</option>
<option value="Ahon">Ahon Barua</option>
<option value="Shifa">Shifa Nur</option>
</select>
</form>
<br>
<div id="txtHint">Click to see AD info...</div>

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
