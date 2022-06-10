<?php
    include("../php/db_connection.php");
    
    if($_SERVER["REQUEST_METHOD"] == "POST") { 
        $fio_str = $_COOKIE["email"];
        
        $fio_array=explode(" ",$fio_str);
        $id_user=$fio_array[3];
        
        $publicationType = mysqli_real_escape_string($db,$_POST['publicationType']);
        $publicationName = mysqli_real_escape_string($db,$_POST['publicationName']);
        $publicationDate = mysqli_real_escape_string($db,$_POST['publicationDate']);
        $valueFirstField = mysqli_real_escape_string($db,$_POST['valueFirstField']);
        $valueSecondField = mysqli_real_escape_string($db,$_POST['valueSecongField']);
        $valueThirdField = mysqli_real_escape_string($db,$_POST['valueThirdField']);
        
        $sql = "SELECT id_publ FROM publication WHERE publ_type='$publicationType' AND publ_name='$publicationName' AND publ_date='$publicationDate'";
     
        $result=mysqli_query($db,$sql);
        $row = mysqli_fetch_object($result);

        $info=$row->id_publ;
       
    
        setcookie("publicationSearch",$info, time()+3600*24*30*365,"/"); 
        

        }

    
?>
