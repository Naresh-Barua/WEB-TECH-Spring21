<?php 

session_start();

if (isset($_SESSION['username'])) {
	session_destroy();
	header("location:home.php");
	
}

else{
	header("location:home.php");
}

 ?>