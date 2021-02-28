<header>
	<div style="float: left;"><a href='home.php'><img src="New folder/Logo.JPG"></a></div><br><br>
<?php

if (empty($_SESSION['username'])) {
	echo "<div style='float: right';><a href='home.php'>Home</a> |";
	echo "<a href='login.php'>Login</a> |";
	echo "<a href='reg.php'>Registration</a> </div><br><br><br><br><hr>";
	
}

else{
	echo "<div style='float: right';>"." Logged in as <a href='profile.php'>".$_SESSION['username']."</a> | ";
	echo "<a href='logout.php'>Logout</a><br>";
	echo "</div><br><br><br><br><hr>";
}
?>
	
</header>