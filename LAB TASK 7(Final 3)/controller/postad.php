<?php
session_start();



 //$birthErr = $nameErr = $emailErr = $genderErr = $websiteErr =$error= "";
$name = $email = $gender = $comment = $website = "";
 $username=$password="";
// $usernameErr=$passwordErr="";
$confirmpassword="";
//$confirmpasswordErr="";
$flag=1;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["yourname"])) {
    $_SESSION['yournameErr'] = "Name is required";
    $flag=0;
  } else {

       $yourname = test_input($_POST["yourname"]);

      if ($_SESSION['name']!=$yourname) {
         $_SESSION['yournameErr'] = "Your name doesnot match your user name";
         $flag=0;
       }

      else {
        $yourname = test_input($_POST["yourname"]);
        $_SESSION['yourname']=$yourname;
        $_SESSION['yournameErr']="";
      }
    }

  if (empty($_POST["email"])) {
    $_SESSION['emailErr'] = "Email is required";
    $flag=0;
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $_SESSION['emailErr'] = "Invalid email format";
      $flag=0;
    }
    else {
      $_SESSION['email']=$email;
      $_SESSION['emailErr']="";
    }
  }

  if (empty($_POST["salary"])) {
    $_SESSION['salaryErr'] = "Salary is required";
    $flag=0;
  } else {

    $salary=test_input($_POST["salary"]);


    if(!is_numeric($salary))
    {
      $_SESSION['salaryErr']="Please input Numeric Number";
      $flag=0;
    }
    else {

          if($salary>10000 || $salary<500)
          {
              $_SESSION['salaryErr']=" Salary must be between 500 to 10000";
              $flag=0;
          }
          else {

                    $_SESSION['salaryErr']=" ";
                    $_SESSION['salary']=$salary;
                  }
              }
          }




    if (empty($_POST["coursename"])) {
      $_SESSION['coursenameErr'] = "Course Name Name is required";
      $flag=0;
    }
    else {
     $coursename = test_input($_POST["coursename"]);

      if (!preg_match("/^[a-zA-Z-. ]*$/",$coursename)) {
         $_SESSION['coursenameErr'] = "Only letters and white space allowed";
         $flag=0;
       }
       else {


           $_SESSION['coursename']=$coursename;
           $_SESSION['coursenameErr']="";

       }
    }

    if(empty($_POST["comment"]))
    {
      $_SESSION['commentErr'] = "Comment is required";
      $flag=0;
    }
    else {
      $comment=test_input($_POST["comment"]);
      if(strlen($comment)<20)
      {
        $_SESSION['commentErr']="Comment must not be less than eight (20) characters";
        $flag=0;
      }
      else {


          $_SESSION['commentErr']="";
        }
      }







    if(isset($_POST["submit"]))
    {
      if(file_exists('postad.json') && $flag==1)
      {

           $current_data = file_get_contents('postad.json');
           $array_data = json_decode($current_data, true);
           $extra = array(
                'yourname'               =>     $yourname,
                'email'           =>     $email,
                'coursename'       =>    $coursename,
                'salary'       =>    $salary,
                'comment'       =>    $comment,

           );
           $array_data[] = $extra;
           $final_data = json_encode($array_data);
           if(file_put_contents('postad.json', $final_data))
           {
                $message = "<label class='text-success'>File Appended Success fully</p>";
           }
      }
      else
      {
           $error = 'JSON File not exits';
      }
     }



     if(isset($_POST["submit"]) && $flag==0)
     {
       header("location:../View/postad.php");
     }
     else {
       header("location:../View/dashboard.php");
     }



}



function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
