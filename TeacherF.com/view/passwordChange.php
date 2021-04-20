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
      var password=document.myform.password.value;
      var cpassword=document.myform.cpassword.value;
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
     

      
        function checkPass(){
          if (document.getElementById("password").value == "") {
          document.getElementById("passwordErr").innerHTML = "Password can't be blank";
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
          document.getElementById("npasswordErr").innerHTML = "Password can't be blank";
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
       body { background-image: url('../photos/get-started-bg_2_optimized.png');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover; }
    </style>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
 



    <div>
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
  	<div style="text-align:center; margin-left:800px;">
    <form name="myform"  method="post" onsubmit="validateform()" action="<?php echo htmlspecialchars('../controller/passwordChanged.php');?>"   >
      
        Current Password: <br></br><input type="password" name="cpassword" id="password"   onkeyup="checkPass()" onblur="checkPass()" placeholder="Current Password">
        <span id="passwordErr"></span>
        
         <span style="color: red;" class="error" id="cpasswordErr"><?php if (!empty($_GET['cpasswordErr'])) {echo $_GET['cpasswordErr'];} ?> </span>
        <br><br>


        <span style="color:black">New Password:<br></br></span>
        <input type="password" name="npassword" id="npassword"  onkeyup="changePass()"  onblur="changePass()" placeholder="New Password">
         <span id="npasswordErr"></span>
        <span style="color: red;" class="error" id="npasswordErr"><?php if (!empty($_GET['npasswordErr'])) {echo $_GET['npasswordErr'];} ?> </span>
        <br><br>


        <span style="color:black">Retype New Password:<br></br></span>
        <input type="password" name="rnpassword" id="rnpassword" onkeyup="retypePass()"  onblur="retypePass()" placeholder="Retype New Password">
        <span id="rnpasswordErr"></span>
        <span style="color: red;" class="error" id="rnpasswordErr"><?php if (!empty($_GET['rnpasswordErr'])) {echo $_GET['rnpasswordErr'];} ?> </span>
        <br><br>
        <input type="submit" name="submit" value="Submit">
        <br><br>
    </form>
  </div>
  </center>
  </th>
    </tr>
  </table>

 </div>



     <?php
     include("foot.php");
      ?>

 </body>
</html>
