<?php
   include("../php/db_connection.php");
   
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['email']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      $decoded_pass = md5($mypassword);
      
      $sql = "SELECT id_user,user_firstname,user_name,user_patronymic,role FROM login_user WHERE login_email = '$myusername' and password = '$decoded_pass'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_object($result);
      $count = $row->role;
      $fio=$row->user_firstname." ".$row->user_name." ".$row->user_patronymic." ".$row->id_user;
     
      
      if($count == 1) {
        //echo $myusername;
         setcookie("email",$fio, time()+3600*24*30,"/"); 
         //echo $_COOKIE["email"];
         header("location: ../php/index.php");
      }else {
         $error = "Your Login Name or Password is invalid";
         echo "Your Login Name or Password is invalid";
      }
   }
?>