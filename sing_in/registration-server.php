<?php
require_once "../php/db_connection.php";

$log=$_POST['floatingInput'];
$pass=$_POST['floatingPassword'];
$fname=$_POST['firstname'];
$name=$_POST['name'];
$patronymic=$_POST['patr'];

$pass=md5($pass);

$sql="INSERT INTO login_user (login_email,password,user_firstname,user_name,user_patronymic,role) VALUES (:lg,:ps,:fn,:nm,:pt,1)";
$query=$pdo->prepare($sql);
$query->execute(['lg'=>$log,'ps'=>$pass,'fn'=>$fname,'nm'=>$name,'pt'=>$patronymic]);

header('Location: ../php/index.php');
?>