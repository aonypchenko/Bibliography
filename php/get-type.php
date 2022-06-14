<?php
header('Content-type: application/json');
header("Cache-Control: no-cache, must-revalidate");
   include("../php/db_connection.php");
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
    
      $singlePagePublicationId = $_COOKIE["singlePagePublicationId"];
      
      
      $sql = "SELECT publ_type FROM publication WHERE id_publ='$singlePagePublicationId'";
         $result=mysqli_query($db,$sql);
         $row = mysqli_fetch_object($result);
         $publicationType=$row->publ_type;
         echo json_encode($publicationType);
   }
?>