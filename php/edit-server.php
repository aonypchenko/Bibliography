<?php
   include("../php/db_connection.php");
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      $fio_str = $_COOKIE["email"];
    
      $fio_array=explode(" ",$fio_str);
      $id_user=$fio_array[3];
      $singlePagePublicationId = $_COOKIE["singlePagePublicationId"];
      $publicationType = mysqli_real_escape_string($db,$_POST['publicationType']);
      $publicationName = mysqli_real_escape_string($db,$_POST['publicationName']);
      $publicationDate = mysqli_real_escape_string($db,$_POST['publicationDate']);
      $urlPublication = mysqli_real_escape_string($db,$_POST['url_p']);
      $valueFirstField = mysqli_real_escape_string($db,$_POST['valueFirstField']);
      $valueSecondField = mysqli_real_escape_string($db,$_POST['valueSecongField']);
      $valueThirdField = mysqli_real_escape_string($db,$_POST['valueThirdField']);
      
      $sql1 = "UPDATE publication SET publ_type='$publicationType',publ_name=' $publicationName',publ_date='$publicationDate',`url`='$urlPublication' WHERE id_publ='$singlePagePublicationId'";
      mysqli_query($db,$sql1);

         switch($publicationType){
         case "Дисертація":
               $sql="UPDATE dissertation SET topic='$valueFirstField',level='$valueSecondField' WHERE publication_id_publ='$singlePagePublicationId'";
               mysqli_query($db,$sql);
             break;
         case "Електронний ресурс":
            $sql="UPDATE eresource SET url='$urlPublication' WHERE publication_id_publ='$singlePagePublicationId'";
            mysqli_query($db,$sql);
             break;
         case "Книга":
            $sql="UPDATE book SET printed_version='$valueFirstField' WHERE publication_id_publ='$singlePagePublicationId'"; 
            mysqli_query($db,$sql);
             break;
         case "Методичні вказівки":
            $sql="UPDATE guidelines SET discipline='$valueFirstField' WHERE publication_id_publ='$singlePagePublicationId'";
            mysqli_query($db,$sql);
             break;
         case "Монографія":
            $sql="UPDATE monograph SET topic='$valueFirstField' WHERE publication_id_publ='$singlePagePublicationId'";
            mysqli_query($db,$sql);
             break;
         case "Звіт":
            $sql="UPDATE report SET discipline='$valueFirstField' WHERE publication_id_publ='$singlePagePublicationId'";
            mysqli_query($db,$sql);
             break;
         case "Патент":
            $sql="UPDATE patent SET patent_duration='$valueFirstField' WHERE publication_id_publ='$singlePagePublicationId'";
            mysqli_query($db,$sql);
             break;
         case "Практикум":
            $sql="UPDATE workshop SET discipline='$valueFirstField',cource='$valueSecondField' WHERE publication_id_publ='$singlePagePublicationId'";
            mysqli_query($db,$sql);
             break;
         case "Стаття":
           
             break;
         case "Тези конференцій":
            $sql="UPDATE conference_abstracts SET conference='$valueFirstField',conference_date='$valueSecondField',place_of_publication='$valueThirdField' WHERE publication_id_publ='$singlePagePublicationId'";
            mysqli_query($db,$sql);
               break;
         case "Навчальний посібник":
            $sql="UPDATE tutorial SET discipline='$valueFirstField' WHERE publication_id_publ='$singlePagePublicationId'";
            mysqli_query($db,$sql);
             break;
     }
   

   }
?>