<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php

$nameErr = $emailErr  = $genderErr = $birthErr  = "";
$name = $email = $gender  = $birthDate = $birthMonth = $birthYear = "";$user=$password="";$userErr=$passwordErr="";
$confirmpassword="";$confirmpasswordErr="";
$flag=1;


if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

   if (empty($_POST["user"])) 
  {
    $userErr = "User Name is required";
  } else {

       $user = test_input($_POST["user"]);

      if (!preg_match("/^[a-zA-Z-. ]*$/",$user)) {
         $userErr = "Only letters and white space allowed";
       }
    else  {
             if(str_word_count($user)<1)
          {
           $userErr = "User Name must contains at least two words ";

          }
      else {
        $user = test_input($_POST["user"]);
      }
    }
  }

   if(empty($_POST["password"]))
    {
      $passwordErr = "Password is required";
      $flag=0;
    }
    else {
      $password=test_input($_POST["password"]);
      if(strlen($password)<8)
      {
        $passwordErr="Password must not be less than eight (8) characters";
        $flag=0;
      }
      else {
        if(substr_count($password,"@")<1 || substr_count($password,"#")<1 || substr_count($password,"%")<1 || substr_count($password,"$")<1)
        {
          $passwordErr="";
          $flag=0;
        }
      }
    }

    if(empty($_POST["confirmpassword"]))
    {
      $confirmpasswordErr = "Confirm Password is required";
      $flag=0;
    }
    else {
      if(empty($_POST["password"]))
      {
        $confirmpasswordErr = "Password is required";
        $flag=0;
      }
      else {
        $confirmpassword=test_input($_POST["confirmpassword"]);

        if(strcmp($password,$confirmpassword))
        {
          $confirmpasswordErr="Password and confirm password have to be same";
          $flag=0;
        }
      }
    }
    
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }

   if (empty($_POST["birthDate"]) || empty($_POST["birthMonth"]) || empty($_POST["birthYear"])) {
    $birthErr = "Date Month and Year is required";
  } else {

    $birthDate=test_input($_POST["birthDate"]);
    $birthMonth=test_input($_POST["birthMonth"]);
    $birthYear=test_input($_POST["birthYear"]);

    if(!is_numeric($birthDate))
    {
      $birthErr="Please input Numeric Date";
    }
    else {

      if(!is_numeric($birthMonth))
      {
          $birthErr="Please input Numeric month";
      }
      else {
        if(!is_numeric($birthYear))
        {
          $birthErr="Please input Numeric Year";
        }
        else {
          if($birthDate>31 || $birthDate<1)
          {
              $birthErr=" Input Date between 1 to 31";
          }
          else {
              if($birthMonth>12 || $birthMonth<1)
              {
                  $birthErr=" Input Month between 1 to 12";
              }
              else {
                  if($birthYear>2021 || $birthYear<1971)
                  {
                    $birthErr=" Input Year between 1971 to 2021";
                  }
                  else {
                    $birthErr=" ";
                  }
              }
          }

        }
      }
    }



    }


    if(isset($_POST["submit"]))
    {
      if(file_exists('data.json') && $flag==1)
      {

           $current_data = file_get_contents('data.json');
           $array_data = json_decode($current_data, true);
           $extra = array(
                'name'               =>     $name,
                'email'           =>        $email,
                'user'       =>             $user,
                'password'       =>         $password,
                'confirmpassword'       =>  $confirmpassword,
                'birthday'       =>         $birthDate . '/' . $birthMonth . '/' . $birthYear,
                'gender'       =>           $gender,
           );
           $array_data[] = $extra;
           $final_data = json_encode($array_data);
           if(file_put_contents('data.json', $final_data))
           {
                $message = "<label class='text-success'>File Appended Success fully</p>";
           }
      }
      else
      {
           $error = 'JSON File does not exits';
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

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
   User Name: <input type="text" name="user" value="<?php echo $user;?>">
  <span class="error">* <?php echo $userErr;?></span>
  <br><br>
  Password: <input type="text" name="password" value="<?php echo $password;?>">
  <span class="error">* <?php echo $passwordErr;?></span>
  <br><br>
  Comfirm Password: <input type="text" name="confirmpassword" value="<?php echo $confirmpassword;?>">
  <span class="error">* <?php echo $confirmpasswordErr;?></span>
  <br><br>
  Gender:<br>
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
   Date of Birth:<br> <input type="text" size="1" placeholder="dd" name="birthDate" value="<?php echo $birthDate; ?>"> /
  <input type="text" size="1" placeholder="mm" name="birthMonth" value="<?php echo $birthMonth; ?>"> /
  <input type="text" size="2" placeholder="yyyy" name="birthYear" value="<?php echo $birthYear; ?>">
  <span class="error">* <?php echo $birthErr;?></span>
<br><br>
  <input type="submit" name="submit" value="Submit"> 
  <input type="reset" name="reset" value="Reset"> 
</form>


</body>
</html>