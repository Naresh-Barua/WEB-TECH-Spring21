 function passwordvalidate(){
        var cpassword=document.passForm.cpassword.value;
        var npassword=document.passForm.npassword.value;
        var rnpassword=document.passForm.rnpassword.value;
      
      if(cpassword==null || cpassword==""){
        alert("Password is required");
        return false;

      }
      else if(cpassword.length<8){
         alert("Password must be at least 8 characters long.");  
        return false; 
      }
      // else if(npassword==null || npassword==""){
      //   alert("New password is required");
      //   return false;

      // }
      //  else if(npassword.length<8){
      //   alert("New password must be at least 8 characters long.");
      //   return false;

      // }
      // else if(rnpassword==null || rnpassword="")
      // {
      //   alert("Retype Password is required");
      //   return false;
      // }
      // else if(rnpassword.value != npassword.value){
      //   alert("Retype password has to be same to New password")
      //   return false;
      // }
    }

      function checkCpass(){
          if (document.getElementById("cpassword").value == "") {
          document.getElementById("cpasswordErr").innerHTML = "Current Password can't be blank";
          document.getElementById("cpasswordErr").style.color = "red";
          document.getElementById("cpassword").style.borderColor = "red";
      }else if(document.getElementById("cpassword").value.length<8){
          document.getElementById("cpassword").style.borderColor = "red";
          document.getElementById("cpasswordErr").style.color = "red";
        document.getElementById("cpasswordErr").innerHTML = "Password must be at least 8 characters long.";
      }
      else{
        document.getElementById("cpasswordErr").innerHTML = "";
          document.getElementById("cpasswordErr").style.color = "red";
        document.getElementById("cpassword").style.borderColor = "black";
      }
        }

        function checkNpass(){
          if (document.getElementById("npassword").value == "") {
          document.getElementById("npasswordErr").innerHTML = "New password can't be blank";
          document.getElementById("npasswordErr").style.color = "red";
          document.getElementById("npassword").style.borderColor = "red";
      }else if(document.getElementById("npassword").value.length<8){
          document.getElementById("npassword").style.borderColor = "red";
          document.getElementById("npasswordErr").style.color = "red";
        document.getElementById("npasswordErr").innerHTML = "Password must be at least 8 characters long.";
      }
      else if(document.getElementById("npassword").value.search(/[!\@\#\$\%]/))==-1{
        document.getElementById("npassword").style.borderColor= "red";
        document.getElementById("npasswordErr").style.color = "red";
        document.getElementById("npasswordErr").innerHTML = "Password must contain at least 1 special character!"
      }
      else if(document.getElementById("npassword").value=== document.getElementById("cpassword").value){
        document.getElementById("npassword").style.borderColor= "red";
        document.getElementById("npasswordErr").style.color = "red";
        document.getElementById("npasswordErr").innerHTML = "Passwords can't be same!"

      }
      else{
        document.getElementById("npasswordErr").innerHTML = "";
          document.getElementById("npasswordErr").style.color = "red";
        document.getElementById("npassword").style.borderColor = "black";
      }
        }

        function checkRNpass(){
          if (document.getElementById("rnpassword").value == "") {
          document.getElementById("rnpasswordErr").innerHTML = "Retype Password can't be blank";
          document.getElementById("rnpasswordErr").style.color = "red";
          document.getElementById("rnpassword").style.borderColor = "red";
      }else if(document.getElementById("rnpassword").value != document.getElementById("npassword").value){
          document.getElementById("rnpassword").style.borderColor = "red";
          document.getElementById("rnpasswordErr").style.color = "red";
        document.getElementById("rnpasswordErr").innerHTML = "Passwords have to be same!";
      }
      else{
        document.getElementById("rnpasswordErr").innerHTML = "";
          document.getElementById("rnpasswordErr").style.color = "red";
        document.getElementById("rnpassword").style.borderColor = "black";
      }
        
      }
        