<?php
   include("../php/db_connection.php");
   
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['email']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      $decoded_pass = md5($mypassword);
      
      $sql = "SELECT id_user FROM login_user WHERE login_email = '$myusername' and password = '$decoded_pass'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      		
      if($count == 1) {
        //echo $myusername;
         setcookie("email",$myusername, time()+3600*24*30,"/"); 
         header("location: ../php/index.php");
      }else {
         echo "Your Login Name or Password is invalid";
         $error = "Your Login Name or Password is invalid";
      }
   }
?>