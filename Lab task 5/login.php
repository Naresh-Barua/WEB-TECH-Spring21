<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>
<div><?php include 'New folder/header.php';?></div>

<?php
$userNameErr = $passErr = "";
$username = $password = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $userNameErr = "UserName is required";
  } else {
    $username = test_input($_POST["username"]);
    if (!preg_match("/^[a-zA-Z-._]*$/",$username)) {
      $userNameErr = "Only alpha numeric characters, period, dash or underscore allowed";
      $username ="";
    }
    else if (strlen($username)<2) {
      $userNameErr = "At least two charecters needed";
      $username ="";
    }
  }
  
  if (empty($_POST["Password"])) {
    $passErr = "Password is required";
  } else {
    $password = test_input($_POST["Password"]);
  }
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<?php 

session_start();

$uname="Lion";
$pword="lion head";

if (isset($_POST['username'])) {
	if ($username==$uname && $password==$pword) {
		$_SESSION['username'] = $uname;
		header("location:dashboard.php");
	}
	else{
		$msg="username or password invalid";
		echo "<script>alert('username or pass incorrect!')</script>";
	}

}

 ?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <fieldset>
<legend><B>LOGIN</B></legend>  
  User Name: <input type="text" name="username">
  <span class="error"> <?php echo $userNameErr;?></span>
  <br><br>
  Password: <input type="Password" name="Password">
  <span class="error"> <?php echo $passErr;?></span>
  <br><br>
  <input type="checkbox" id="reme" name="rememberMe">
  <label for="reme"> Remember Me</label><br>
  <br>
  <input type="submit" name="submit" value="Submit">
  <a href="">Forgot Password?</a>
</fieldset>

</form>

<div><?php include 'New folder/footer.php';?></div>
</body>
</html>