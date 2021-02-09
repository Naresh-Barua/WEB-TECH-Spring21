<!DOCTYPE HTML>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>

<?php
$nameErr = $emailErr =  $birthErr =   $genderErr = $degreeErr = $bloodErr  = "";
$name = $email = $birthDate = $birthMonth = $birthYear =  $gender  =  $BloodGroup =  "";

$i=1;
$Degree1 = $Degree2 = $Degree3 = $Degree4="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
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

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
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
                  if($birthYear>1998 || $birthYear<1953)
                  {
                    $birthErr=" Input Year between 1953 to 1998";
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
  }




  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }

if(empty($_POST["BloodGroup"]))
  {
    $bloodErr="Blood group required";
  }
  else {
    $BloodGroup= test_input($_POST["BloodGroup"]);

  }




  if(empty($_POST["SSC"]) && empty($_POST["HSC"]) && empty($_POST["Bsc"]) && empty($_POST["Msc"]))
  {
    $degreeErr="Degree is required";
  }
else {


  if(!empty($_POST["SSC"]))
  {
    $i=$i+1;
    $Degree1=test_input($_POST["SSC"]);
  }

  if(!empty($_POST["HSC"]))
  {
    $i=$i+1;
      $Degree2=test_input($_POST["HSC"]);
  }

  if(!empty($_POST["Bsc"]))
  {
    $i=$i+1;
    $Degree3=test_input($_POST["Bsc"]);
  }

  if(!empty($_POST["Msc"]))
  {
    $i=$i+1;
    $Degree4=test_input($_POST["Msc"]);
  }

  if($i<3)
  {
    $degreeErr="At least two is required";
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
  Name:<br> <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
   E-mail:<br> <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>

  Date of Birth:<br> <input type="text" size="1" placeholder="dd" name="birthDate" value="<?php echo $birthDate; ?>"> /
  <input type="text" size="1" placeholder="mm" name="birthMonth" value="<?php echo $birthMonth; ?>"> /
  <input type="text" size="2" placeholder="yyyy" name="birthYear" value="<?php echo $birthYear; ?>">
  <span class="error">* <?php echo $birthErr;?></span>

  <br><br>
  Gender: <br>
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?>value="female">Female 
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>

    Degree:<br>

  <input type="checkbox"  name="SSC" value="SSC">
   <label for="SSC">SSC</label>
   <input type="checkbox" name="HSC" value="HSC">
   <label for="HSC">HSC</label>
   <input type="checkbox" name="Bsc" value="Bsc">
   <label for="Bsc"> Bsc</label>
   <input type="checkbox" name="Msc" value="Msc">
   <label for="Msc"> Msc</label>
     <span class="error">* <?php echo $degreeErr;?></span>
   <br><br>

  Blood Group:<br>
  <select name="BloodGroup" required>
  <option value="   ">    </option>
  <option value="A+">A+</option>
  <option value="A-">A-</option>
  <option value="AB+">AB+</option>
  <option value="AB-">AB-</option>
  <option value="O+">O+</option>
  <option value="O-">O-</option>
</select>
  <span class="error">* <?php echo $bloodErr;?></span>
<br><br>

  <input type="submit" name="submit" value="Submit">
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $gender;
echo "<br>";
echo $birthDate;
echo "-";
echo $birthMonth;
echo "-";
echo $birthYear;
echo "<br>";
echo $BloodGroup;
echo "<br>";
echo $Degree1;
echo "<br>";
echo $Degree2;
echo "<br>";
echo $Degree3;
echo "<br>";
echo $Degree4;
echo "<br>";

?>

</body>
</html>