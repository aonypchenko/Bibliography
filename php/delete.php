<?php
 include("../php/db_connection.php");
            
                
 $singlePagePublicationId = $_COOKIE["singlePagePublicationId"];

    $sql = "SELECT publ_type FROM publication WHERE publication.id_publ='$singlePagePublicationId'";
    $result=mysqli_query($db,$sql);
    $row = mysqli_fetch_object($result);
    $publicationType=$row->publ_type;

    switch($publicationType){
        case "Дисертація":
            $sql="DELETE FROM dissertation WHERE publication_id_publ='$singlePagePublicationId'";
            $result=mysqli_query($db,$sql);
        break;
        case "Електронний ресурс":
            $sql="DELETE FROM eresource WHERE publication_id_publ='$singlePagePublicationId'";
            $result=mysqli_query($db,$sql);
        break;
        case "Книга":
            $sql="DELETE FROM book WHERE publication_id_publ='$singlePagePublicationId'";
            $result=mysqli_query($db,$sql);
        break;
        case "Методичні вказівки":
            $sql="DELETE FROM guidelines WHERE publication_id_publ='$singlePagePublicationId'";
            $result=mysqli_query($db,$sql);
        break;
        case "Монографія":
            $sql="DELETE FROM monograph WHERE publication_id_publ='$singlePagePublicationId'";
            $result=mysqli_query($db,$sql);
        break;
        case "Звіт":
            $sql="DELETE FROM report WHERE publication_id_publ='$singlePagePublicationId'";
            $result=mysqli_query($db,$sql);
        break;
        case "Патент":
            $sql="DELETE FROM patent WHERE publication_id_publ='$singlePagePublicationId'";
            $result=mysqli_query($db,$sql);
        break;
        case "Практикум":
            $sql="DELETE FROM workshop WHERE publication_id_publ='$singlePagePublicationId'";
            $result=mysqli_query($db,$sql);
        break;
        case "Стаття":
            $sql="DELETE FROM article WHERE publication_id_publ='$singlePagePublicationId'";
            $result=mysqli_query($db,$sql);
        break;
        case "Тези конференцій":
            $sql="DELETE FROM conference_abstracts WHERE publication_id_publ='$singlePagePublicationId'";
            $result=mysqli_query($db,$sql);
        break;
        case "Навчальний посібник":
            $sql="DELETE FROM tutorial WHERE publication_id_publ='$singlePagePublicationId'";
            $result=mysqli_query($db,$sql);
        break;
    }
 
    $sql = "DELETE FROM publication WHERE id_publ='$singlePagePublicationId'";
    $result=mysqli_query($db,$sql);
    header('Location: my-publication.php');
?>