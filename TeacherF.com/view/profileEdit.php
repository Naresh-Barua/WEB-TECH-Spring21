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
require_once '../controller/tutorDetails.php';
?>
<?php
$data = fetchStudent($_SESSION['username']);
if($data!=NULL)
{
  foreach ($data as $i => $student):

       $name= $student['NAME'] ;
       $email=$student['EMAIL'];
       $birth=$student['BIRTH'];
       $gender= $student['GENDER'] ;
  endforeach;
$birth=str_replace('/','', $birth );
$birthDate=$birth[0].$birth[1];
$birthMonth=$birth[2].$birth[3];
$birthYear=$birth[4].$birth[5].$birth[6].$birth[7];


}
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <script>
   function validateform(){
      var name=document.myform.name.value;
      var email=document.myform.email.value;
      var username=document.myform.username.value;  
      var password=document.myform.password.value;
      var confirmpassword=document.myform.confirmpassword.value;
      var birth=document.myform.birth.value;
      var gender=document.myform.gender.value;    
      var npassword=document.myform.npassword.value; 
      var rnpassword=document.myform.rnpassword.value; 
 

 


      if (username==null || username==""){  
        alert("Name must be Filled-Up");  
        return false;  
      }else if(password.length<5){  
        alert("Password must be at least 5 characters long.");  
        return false;  
      }  
    }
    function checkEmpty() {
        if (document.myform.username.value = "") {
          alert("Name must be Filled-Up");
            return false;  
        }
  }
     function checkName() {
      if (document.getElementById("name").value == "") {
          document.getElementById("nameErr").innerHTML = "Name must be Filled-Up";
          document.getElementById("nameErr").style.color = "red";
          document.getElementById("name").style.borderColor = "red";
      }else if(document.getElementById("name").value.length<=4){
          document.getElementById("name").style.borderColor = "red";
          document.getElementById("nameErr").style.color = "red";
        document.getElementById("nameErr").innerHTML = "Name required at least 5 characters.";
      }
      else{
        document.getElementById("nameErr").innerHTML = "";
          document.getElementById("nameErr").style.color = "red";
        document.getElementById("name").style.borderColor = "green";
      }
        }
    
  function checkEmail() {
      if (document.getElementById("email").value == "") {
          document.getElementById("emailErr").innerHTML = "Email can't be blank";
          document.getElementById("emailErr").style.color = "red";
          document.getElementById("email").style.borderColor = "red";
      }
     else if(document.getElementById("email").value.indexOf('@')<=0){
        document.getElementById("emailErr").innerHTML="Invalid format!";
        document.getElementById("emailErr").style.color = "red";
        document.getElementById("email").style.borderColor = "red";
      }   
       else{
        document.getElementById("emailErr").innerHTML = "";
          document.getElementById("emailErr").style.color = "red";
        document.getElementById("email").style.borderColor = "green";
      }
    }

 


      function checkUsername() {
      if (document.getElementById("username").value == "") {
          document.getElementById("usernameErr").innerHTML = "UserName must be Filled-Up";
          document.getElementById("usernameErr").style.color = "red";
          document.getElementById("username").style.borderColor = "red";
      }else if(document.getElementById("username").value.length<2){
          document.getElementById("username").style.borderColor = "red";
          document.getElementById("usernameErr").style.color = "red";
        document.getElementById("usernameErr").innerHTML = "UserName must be at least 2 characters long.";
      }
      else{
        document.getElementById("usernameErr").innerHTML = "";
          document.getElementById("usernameErr").style.color = "red";
        document.getElementById("username").style.borderColor = "green";
      }
        }

 

 

 

      
        function checkPass(){
          if (document.getElementById("password").value == "") {
          document.getElementById("passwordErr").innerHTML = "Password must be Filled-Up";
          document.getElementById("passwordErr").style.color = "red";
          document.getElementById("password").style.borderColor = "red";
      }else if(document.getElementById("password").value.length<8){
          document.getElementById("password").style.borderColor = "red";
          document.getElementById("passwordErr").style.color = "red";
        document.getElementById("passwordErr").innerHTML = "Password must be at least 8 characters long.";
     }
     else if(document.getElementById("password").value.search(/[!\@\#\$\%]/)==-1){
      document.getElementById("passwordErr").innerHTML = "Password must have one special characters (@,#,$,%)!.";
          document.getElementById("password").style.borderColor = "red";
          document.getElementById("passwordErr").style.color = "red";
        
     }
    
       else{
        document.getElementById("passwordErr").innerHTML = "";
          document.getElementById("passwordErr").style.color = "red";
        document.getElementById("password").style.borderColor = "green";
      }
        }

 


         function changePass(){
          if (document.getElementById("npassword").value == "") {
          document.getElementById("npasswordErr").innerHTML = "Password must be Filled-Up";
          document.getElementById("npasswordErr").style.color = "red";
          document.getElementById("npassword").style.borderColor = "red";
      }else if(document.getElementById("npassword").value.length<8){
          document.getElementById("npassword").style.borderColor = "red";
          document.getElementById("npasswordErr").style.color = "red";
        document.getElementById("npasswordErr").innerHTML = "Password must be at least 8 characters long.";
     }
     else if(document.getElementById("npassword").value.search(/[!\@\#\$\%]/)==-1){
          document.getElementById("npassword").style.borderColor = "red";
          document.getElementById("npasswordErr").style.color = "red";
        document.getElementById("npasswordErr").innerHTML = "Password must have one special characters (@,#,$,%)!.";
     }
     else if(document.getElementById("npassword").value === document.getElementById("password").value){
          document.getElementById("npassword").style.borderColor = "red";
          document.getElementById("npassword").style.color = "red";
        document.getElementById("npasswordErr").innerHTML = "Old password and new Password can't be same!";
      }
       else{
        document.getElementById("npasswordErr").innerHTML = "";
          document.getElementById("npassword").style.color = "red";
        document.getElementById("npassword").style.borderColor = "green";
      }
        }

 

 

 

        function confirmPass(){
          if (document.getElementById("confirmpassword").value == "") {
          document.getElementById("confirmpasswordErr").innerHTML = "Retype the Password";
          document.getElementById("confirmpasswordErr").style.color = "red";
          document.getElementById("confirmpassword").style.borderColor = "red";
      }else if(document.getElementById("confirmpassword").value != document.getElementById("password").value){
          document.getElementById("confirmpassword").style.borderColor = "red";
          document.getElementById("confirmpasswordErr").style.color = "red";
        document.getElementById("confirmpasswordErr").innerHTML = "Both Passwords must be same!";
      }
        else {
        document.getElementById("confirmpasswordErr").innerHTML = "";
          document.getElementById("confirmpasswordErr").style.color = "red";
        document.getElementById("confirmpassword").style.borderColor = "green";
      }

 

 

 

        }
          
   function checkAge(){
          if (document.getElementById("birth").value == "") {
          document.getElementById("birthErr").innerHTML = "age can't be blank";
          document.getElementById("birthErr").style.color = "red";
          document.getElementById("birth").style.borderColor = "red";
      }else if(document.getElementById("birth").value < 10){
          document.getElementById("birthErr").style.color = "red";
          document.getElementById("birth").style.borderColor = "red";
        document.getElementById("birthErr").innerHTML = "age is less";
      }
      else{
          document.getElementById("birthErr").style.color = "red";
        document.getElementById("birthErr").innerHTML = "age is ok";
        document.getElementById("birth").style.borderColor = "black";
      }
        }

 

      function checkGender() {
      if (document.getElementById("gender").value == "") {
          document.getElementById("genderErr").innerHTML = "Date of Birth must be Filled-Up";
          document.getElementById("genderErr").style.color = "red";
          document.getElementById("gender").style.borderColor = "red";
      }
      else{
        document.getElementById("genderErr").innerHTML = "";
          document.getElementById("genderErr").style.color = "red";
        document.getElementById("gender").style.borderColor = "green";
      }
        }

 


         function retypePass(){
          if (document.getElementById("rnpassword").value == "") {
          document.getElementById("rnpasswordErr").innerHTML = "Retype the Password";
          document.getElementById("rnpasswordErr").style.color = "red";
          document.getElementById("rnpassword").style.borderColor = "red";
      }else if(document.getElementById("rnpassword").value != document.getElementById("npassword").value){
          document.getElementById("rnpassword").style.borderColor = "red";
          document.getElementById("rnpasswordErr").style.color = "red";
        document.getElementById("rnpasswordErr").innerHTML = "Both Passwords must be same!";
      }
        else {
        document.getElementById("rnpasswordErr").innerHTML = "";
          document.getElementById("rnpasswordErr").style.color = "red";
        document.getElementById("rnpassword").style.borderColor = "green";
      }

 

 

 

        }
</script>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <style>
     body{background-image: url('../photos/get-started-bg_2_optimized.png');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover; }
    </style>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
 
  
 
 <!-- <div style='float: right';> Logged in<a href='viewprofile.php'> | 
  <a href='../controller/logout.php'>Logout</a><br>
   </div><br><br><br><br><hr>
 -->
<table>
  <tr style="border:1px black;" >
      <th style="border:1px black;">
      <div style="float: left; text-align: left;">
 <a href="dashboard.php">Dashboard</a><br><br>
      <br><br>
      <a href="viewprofile.php">View Profile</a><br><br>
      <br><br>
      <a href="passwordChange.php">Change Password</a><br><br>
      <br><br>
      <a href="giveAd.php">Post Ad</a><br><br>
      <br><br>
       <a href="myAd.php">My Ads</a><br><br>
      <br><br>
       <a href="../controller/logout.php">Logout</a>
    </div>
  </th>
  <th>
    <center>

      <div style="text-align:center; margin-left:800px;">
      <form name="myform" method="post" onsubmit="validateform()" action="<?php echo htmlspecialchars('../controller/updatedProfile.php');?>" >


  <label for="name">Name:</label><br>
  <input value="<?php echo $name ?>" type="text" id="name" name="name" onkeyup="checkName()" onblur="checkName()" >
  <span id="nameErr"></span>
   <span style="color: red;class="error"><?php if (!empty($_GET['nameErr'])) {echo $_GET['nameErr'];} ?> </span> <br>


  <label for="email">Email:</label><br>
  <input value="<?php echo $email ?>" type="text" id="email" name="email" onkeyup="checkEmail()" onblur="checkEmail()" >
  <span id="emailErr"></span>
  <span style="color: red;class="error"><?php if (!empty($_GET['emailErr'])) {echo $_GET['emailErr'];} ?> </span> <br>
   
  Date of Birth:<br></br> <input type="date" size="1" id="birth" name="birth" onkeyup="checkAge()" onblur="checkAge()" > 
  <span id="birthErr"></span>
  <span style="color: red;class="error"><?php if (!empty($_GET['birthErr'])) {echo $_GET['birthErr'];} ?> </span>
  <br></br>
  <input type="submit" name = "updateTutor" value="Update">
  <input type="reset">
</form>
</div>
</center>
  </th>
    </tr>
  </table>


 
 
     <?php
     include("foot.php");
      ?>

 </body>
</html>
