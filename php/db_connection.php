<?php
$dsn='mysql:host=localhost;dbname=mydb';
$pdo=new PDO($dsn,'root','');


// $sql="INSERT INTO login_user (`login_email`, `password`, `user_firstname`, `user_name`, `user_patronymic`) VALUES ('conn','conn','test','test','test')";
// $query=$pdo->prepare($sql);
// $query->execute();
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'mydb');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>