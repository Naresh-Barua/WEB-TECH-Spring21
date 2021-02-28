<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<body>
<?php 
session_start();
	echo "<div>";include 'New folder/header.php';echo "</div>";

 ?>
<table style="width:100%; border: 1px solid black;">
  <tr style="border: 1px solid black;">
    <th style="border: 1px solid black;">
    	Account<hr>
    	<div style="float: left; text-align: left;">
    	* <a href="dashboard.php">Dashboard</a><br><br>
    	* <a href="profile.php">View Profile</a><br><br>
    	* <a href=".php">Edit Profile</a><br><br>
    	* <a href="form.php">Change Profile Picture</a><br><br>
    	* <a href="pass.php">Change Password</a><br><br>
    	* <a href="logout.php">Logout</a>
    </div>
    </th>
    <th style="border: 1px solid black;"><?php if (isset($_SESSION['username'])) {
	echo "<div style= 'margin-right: 850px;'> Welcome ".$_SESSION['username']."</div>";

}?></th>
  </tr>
</table>

<div><?php include 'New folder/footer.php';?></div>
</body>
</html>