<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style >
      .error {color: #FF0000;}
    </style>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
   $password=$newpassword=$renewpassword="";
   $passwordErr=$newpasswordErr=$renewpasswordErr="";

   if($_SERVER["REQUEST_METHOD"] == "POST")
   {
     if (empty($_POST["password"])) {
       $passwordErr = "Current Password is required";
     }
     else {
      $password = test_input($_POST["password"]);

       if (strcmp($password,"abc123!@#")) {
          $passwordErr = "Incorrent Password";
        }

        }

        if (empty($_POST["newpassword"])) {
          $newpasswordErr = "New Password is required";
        }
        else {
         $newpassword = test_input($_POST["newpassword"]);

          if (!strcmp($newpassword,"abc123!@#")) {
             $newpasswordErr = "Current and New Password can not be same.";
           }

           }

           if (empty($_POST["renewpassword"])) {
             $renewpasswordErr = "Retype New Password is required";
           }
           else {
            $renewpassword = test_input($_POST["renewpassword"]);

             if (strcmp($newpassword,$renewpassword)) {
                $renewpasswordErr = "Retype password and New Password need to be same.";
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
        Current Password: <input type="text" name="password" value="<?php echo $password;?>">
        <span class="error">* <?php echo $passwordErr;?></span>
        <br><br>
        <span style="color:green">New Password:</span>
        <input type="text" name="newpassword" value="<?php echo $newpassword;?>">
        <span class="error">* <?php echo $newpasswordErr;?></span>
        <br><br>
        <span style="color:Red">Retype New Password:</span>
        <input type="text" name="renewpassword" value="<?php echo $renewpassword;?>">
        <span class="error">* <?php echo $renewpasswordErr;?></span>
        <br><br>
        <input type="submit" name="submit" value="Submit">
        <br><br>

        

    </form>
  </body>
</html>
