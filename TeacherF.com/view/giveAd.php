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
       var course=document.myform.course.value;
       var salary=document.myform.salary.value;
       var details=document.myform.document.value;
 

 


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
   function checkEmpty() {
        if (document.myform.username.value = "") {
          alert("Name must be Filled-Up");
            return false;  
        }
  }

  function checkEmptycourse() {
        if (document.myform.course.value = "") {
          alert("Name must be Filled-Up");
            return false;  
        }
  }
     function checkName() {
      if (document.getElementById("name").value == "") {
          document.getElementById("nameErr").innerHTML = "Name can't be blank";
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

         function checkSalary() {
      if (document.getElementById("salary").value == "") {
          document.getElementById("salaryErr").innerHTML = "Salary can't be blank";
          document.getElementById("salaryErr").style.color = "red";
          document.getElementById("salary").style.borderColor = "red";
      }else if(document.getElementById("salary").value.length<=10000){
          document.getElementById("salary").style.borderColor = "red";
          document.getElementById("salaryErr").style.color = "red";
        document.getElementById("salaryErr").innerHTML = "Salary has to be within 10,000";
      }
      else{
        document.getElementById("salaryErr").innerHTML = "";
          document.getElementById("salaryErr").style.color = "red";
        document.getElementById("salary").style.borderColor = "green";
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
          document.getElementById("usernameErr").innerHTML = "User Name can't be blank";
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
          
    function checkDOB() {
      if (document.getElementById("birth").value == "") {
          document.getElementById("birthErr").innerHTML = "Date of Birth must be Filled-Up";
          document.getElementById("birthErr").style.color = "red";
          document.getElementById("birth").style.borderColor = "red";
      }
      else{
        document.getElementById("birthErr").innerHTML = "";
          document.getElementById("birthErr").style.color = "red";
        document.getElementById("birth").style.borderColor = "green";
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
function checkCourse() {
      if (document.getElementById("course").value == "") {
          document.getElementById("courseErr").innerHTML = "Course can't be blank";
          document.getElementById("courseErr").style.color = "red";
          document.getElementById("course").style.borderColor = "red";
      }
      else{
        document.getElementById("courseErr").innerHTML = "";
          document.getElementById("courseErr").style.color = "red";
        document.getElementById("course").style.borderColor = "green";
      }
        }

function checkDetails() {
      if (document.getElementById("details").value == "") {
          document.getElementById("detailsErr").innerHTML = "Details can't be blank";
          document.getElementById("detailsErr").style.color = "red";
          document.getElementById("details").style.borderColor = "red";
      }
      else{
        document.getElementById("detailsErr").innerHTML = "";
          document.getElementById("detailsErr").style.color = "red";
        document.getElementById("details").style.borderColor = "green";
      }
        }




function showHint(str) {
  var xhttp;
  if (str.length == 0) { 
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "../js/subgethint.php?q="+str, true);
  xhttp.send();   
}





</script>

    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <style>
       body { background-image: url('../photos/get-started-bg_2_optimized.png');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover; }
    </style>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
 
    

<table>
  <tr style="border:1px black;" >
      <th style="border:1px black;">
      <div style="float: left; text-align: left;">
       <a href="dashboard.php">Dashboard</a><br><br>
      <br><br>
      <a href="viewprofile.php">View Profile</a><br><br>
      <br><br>
      <!-- <a href="passwordChange.php">Change Password</a><br><br>
      <br><br> -->
      <a href="giveAd.php">Post Ad</a><br><br>
      <br><br>
       <a href="myAd.php">My Ads</a><br><br>
      <br><br>
       <a href="../controller/logout.php">Logout</a>
    </div>
  </th>
  <th>
  	<center>
 <div style="text-align:center; margin-left:600px;">
<form name="myform"  method="post" onsubmit="validateform()" action="../controller/postad.php">
   User Name: <input type="text" id="username" name="username" onkeyup="checkUsername()" onblur="checkUsername()" placeholder="User Name">
   <span id="usernameErr"></span>
  <span style="color: red;class="error"><?php if (!empty($_GET['usernameErr'])) {echo $_GET['usernameErr'];} ?> </span>
  <br><br>

   E-mail: <input type="text" id="email" name="email" onkeyup="checkEmail()" onblur="checkEmail()"  placeholder="Email">
   <span id="emailErr"></span>
  <span style="color: red;class="error"><?php if (!empty($_GET['emailErr'])) {echo $_GET['emailErr'];} ?> </span>
  <br><br>

  Which course you want to help? <input type="text" name="course" id="course" onkeyup="showHint(this.value)" onkeyup="checkCourse()" onblur="checkCourse()"  placeholder="Course">
   <span id="txtHint"></span>
   <span id="courseErr"></span>
 <span style="color: red;class="error"><?php if (!empty($_GET['courseErr'])) {echo $_GET['courseErr'];} ?> </span>
  <br>
  <br>

  How much salary you expect? <input type="text" name="salary" id="salary" onkeyup="checkSalary()" onblur="checkSalary()" placeholder="Salary">
  <span id="salaryErr"></span>
 <span style="color: red;class="error"><?php if (!empty($_GET['salaryErr'])) {echo $_GET['salaryErr'];} ?> </span>
  <br><br>


   Details: <input type="text" name="details" size="75" id="details" onkeyup="checkDetails()" onblur="checkDetails()" placeholder="Details">
   <span id="detailsErr"></span>
  <span style="color: red;class="error"><?php if (!empty($_GET['detailsErr'])) {echo $_GET['detailsErr'];} ?> </span>
  <br><br>
    <input type="submit" name="submit" value="Submit">
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
