<?php
   include("../php/db_connection.php");
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      $fio_str = $_COOKIE["email"];
    
      $fio_array=explode(" ",$fio_str);
      $id_user=$fio_array[3];
     
      $publicationType = mysqli_real_escape_string($db,$_POST['publicationType']);
      $publicationName = mysqli_real_escape_string($db,$_POST['publicationName']);
      $publicationDate = mysqli_real_escape_string($db,$_POST['publicationDate']);
      $url_p = mysqli_real_escape_string($db,$_POST['url_p']);
      $valueFirstField = mysqli_real_escape_string($db,$_POST['valueFirstField']);
      $valueSecondField = mysqli_real_escape_string($db,$_POST['valueSecondField']);
      $valueThirdField = mysqli_real_escape_string($db,$_POST['valueThirdField']);
      $valueFourtField = mysqli_real_escape_string($db,$_POST['valueFourtField']);
      $valueFifthField = mysqli_real_escape_string($db,$_POST['valueFifthField']);
      $valueSixthField = mysqli_real_escape_string($db,$_POST['valueSixthField']);
      
      $sql1 = "INSERT INTO publication (publ_type, publ_name, publ_date, login_user_id_user, url) VALUES ('$publicationType', '$publicationName', '$publicationDate', '$id_user','$url_p')";
      mysqli_query($db,$sql1);
      $sql2="SELECT id_publ FROM publication WHERE publ_type='$publicationType' AND publ_name='$publicationName' AND publ_date='$publicationDate' AND login_user_id_user='$id_user'";
      $result=mysqli_query($db,$sql2);
      $row = mysqli_fetch_object($result);
      $publicationId = $row->id_publ;

         switch($publicationType){
         case "Дисертація":
               $sql="INSERT INTO dissertation(topic, level, publication_id_publ) VALUES ('$valueFirstField','$valueSecondField','$publicationId')";
               mysqli_query($db,$sql);
             break;
         case "Електронний ресурс":
               $sql="INSERT INTO eresource(url, publication_id_publ) VALUES ('$url_p','$publicationId')";
               mysqli_query($db,$sql);
             break;
         case "Книга":
               $sql="INSERT INTO book(publication_id_publ, printed_version, number_of_pages) VALUES ('$publicationId','$valueFirstField','$valueSecondField')";
               mysqli_query($db,$sql);
             break;
         case "Методичні вказівки":
               $sql="INSERT INTO guidelines(discipline, publication_id_publ) VALUES ('$valueFirstField','$publicationId')";
               mysqli_query($db,$sql);
             break;
         case "Монографія":
               $sql="INSERT INTO monograph(topic, publication_id_publ) VALUES ('$valueFirstField','$publicationId')";
               mysqli_query($db,$sql);
             break;
         case "Звіт":
               $sql="INSERT INTO report(discipline, publication_id_publ) VALUES ('$valueFirstField','$publicationId')";
               mysqli_query($db,$sql);
             break;
         case "Патент":
               $sql="INSERT INTO patent(publication_id_publ, patent_duration, patent_number, country, patent_holder_number, date_of_application, bulletin_number) VALUES ('$publicationId','$valueFirstField','$valueSecondField', '$valueThirdField', '$valueFourtField', '$valueFifthField', '$valueSixthField')";
               //$sql="INSERT INTO patent (publication_id_publ, patent_duration, patent_number, country, patent_holder_number, date_of_application, bulletin_number) VALUES ('$publicationId','$valueFirstField','$valueSecondField','$valueThirdField','$valueFourtField','$valueFifthField','$valueSixthField')";

               mysqli_query($db,$sql);
             break;
         case "Практикум":
               $sql="INSERT INTO workshop(discipline,cource, publication_id_publ) VALUES ('$valueFirstField','$valueSecondField','$publicationId')";
               mysqli_query($db,$sql);
             break;
         case "Стаття":
               $sql="INSERT INTO article(publication_id_publ, place_of_publication, publishing_year) VALUES ('$publicationId','$valueFirstField','$valueSecondField')";
               mysqli_query($db,$sql);
             break;
         case "Тези конференцій":
               $sql="INSERT INTO conference_abstracts(conference, conference_date, place_of_publication, publication_id_publ, city) VALUES ('$valueFirstField','$valueSecondField','$valueThirdField','$publicationId', '$valueFourtField')";
               mysqli_query($db,$sql);
               break;
         case "Навчальний посібник":
            $sql="INSERT INTO tutorial(discipline, publication_id_publ) VALUES ('$valueFirstField','$publicationId')";
            mysqli_query($db,$sql);
             break;
     }
   

   }
?>