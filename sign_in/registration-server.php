<?php
   include("../php/db_connection.php");
   
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $log = mysqli_real_escape_string($db,$_POST['floatingInput']);
      $pass = mysqli_real_escape_string($db,$_POST['floatingPassword']); 
      $fname = mysqli_real_escape_string($db,$_POST['firstname']);
      $name = mysqli_real_escape_string($db,$_POST['namename']);
      $patronymic = mysqli_real_escape_string($db,$_POST['patr']);
      
      $pass = md5($mypassword);

      $sql = "INSERT INTO login_user (login_email,password,user_firstname,user_name,user_patronymic,role) VALUES ('$log','$pass','$fname','$name','$patronymic',1)";
      $result = mysqli_query($db,$sql);
      
   }
?>