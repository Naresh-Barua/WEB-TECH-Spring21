<!DOCTYPE HTML>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>

<?php
$nameErr = $passErr = "";
$name = $pass = "";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) 
  {
    $nameErr = "Name is required";
  } else {

       $name = test_input($_POST["name"]);

      if (!preg_match("/^[a-zA-Z-. ]*$/",$name)) {
         $nameErr = "Only letters and white space allowed";
       }
    else  {
             if(str_word_count($name)<2)
          {
           $nameErr = "Name must contains at least two words ";

          }
      else {
        $name = test_input($_POST["name"]);
      }
    }
  }

   if (empty($_POST["pass"])) 
  {
    $passErr = "Password is required";
  } else {

       $pass = test_input($_POST["pass"]);

     if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $pass))  {
         $passErr = "Password must contain at least one of the special characters (@, #, $,%)";
       }
    else  {
             if(str_word_count($pass)<8)
          {
           $passErr = " ";

          }
      else {
        $pass = test_input($_POST["pass"]);
      }
    }
  }
 
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<form style="border:3px; border-style:solid; border-color:gray; padding: 1em;" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  User Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>

  Password     :   <input type="text" name="pass" value="<?php echo $pass;?>">
   <span class="error">* <?php echo $passErr;?></span>
  <br><br>

   <input type="checkbox"  name="Remember" value="remember">
   <label for="remember">Remember Me</label><br>

  <input type="submit" name="submit" value="Submit">
  <br><br>
  Forgot password?
</form>



</body>
</html>