<?php
header('Content-type: application/json');
header("Cache-Control: no-cache, must-revalidate");
require_once "../db_connection.php";

$log=$_REQUEST['email'];


//$pass=md5($pass);


$sql="SELECT `login_email`, `password`, `role` FROM login_user WHERE `login_email`=:lg";
$query=$pdo->prepare($sql);
$query->execute(['lg'=>$log]);
$user=$query->fetch(PDO::FETCH_OBJ);
$em=$user->login_email;    
echo json_encode($user);
     
    //exit();
    //}

    
setcookie("user",$em, time()+3600,"/");

//header('Location: ../index.php');


   
?>