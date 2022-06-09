<?php
   include("../php/db_connection.php");
   
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
       
      $fio_str = $_COOKIE["email"];
      
      $fio_array=explode(" ",$fio_str);
      $fname=$fio_array[0];
      $name=$fio_array[1];
      $patr=$fio_array[2];
      $id_user=$fio_array[3];
      
   
      
      
      
      // $sql = "INSERT INTO login_user (login_email,password,user_firstname,user_name,user_patronymic,role) VALUES (:lg,:ps,:fn,:nm,:pt,1)";
      // $result = mysqli_query($db,$sql);
    //   $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    //   $count = mysqli_num_rows($result);
      		
    //   if($count == 1) {
    //     //echo $myusername;
    //      setcookie("email",$log, time()+3600*24*30,"/"); 
    //      header("location: ../php/index.php");
    //   }else {
    //      echo "Your Login Name or Password is invalid";
    //      $error = "Your Login Name or Password is invalid";
    //   }
   }
?>