<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main-style.css">
    <link rel="stylesheet" href="../css/card-style.css">
</head>

<body class="body-style">

<?php
require_once "header.php";
?>
<!-- ------------------------------------- -->
<div class="container">

    <div id="card">
        <div class="card-main">
        <div class="card shadow-sm">

            <div class="card-body">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
            <?php
            include("../php/db_connection.php");
            
                $singlePagePublicationId = $_COOKIE["singlePagePublicationId"];
              
                $sql = "SELECT * FROM publication WHERE publication.id_publ='$singlePagePublicationId'";
                $result=mysqli_query($db,$sql);
                $row = mysqli_fetch_object($result);
                $publicationType=$row->publ_type;
                $publicationName=$row->publ_name;
                $date=$row->publ_date;
                $link=$row->url;
                $userId=$row->login_user_id_user;
                print("<strong class='d-inline-block mb-2 text-primary' id='publ_type'>".$publicationType."</strong>");                       
                print("<h3 class='mb-0'>".$publicationName."</h3>");

               file_put_contents('../files/download-file.txt',"");
               $downloadFile=file_get_contents('../files/download-file.txt');
               if(!isset($_COOKIE['email']) OR trim($_COOKIE['email'])==''){             
                  $sql = "SELECT * FROM login_user WHERE id_user='$userId'";
                  $result=mysqli_query($db,$sql);
                  $row = mysqli_fetch_object($result);
                  $fname=$row->user_firstname;
                   $name=$row->user_name;
                   $patr=$row->user_patronymic;
                   $downloadFile.=$publicationName." "."[".$publicationType."]. – Режим доступу: ".$link." – ".$date." – Загол. з екрану.";
                $downloadFile.="\n";
                $downloadFile.="\nТип: ".$publicationType."\nНазва: ".$publicationName."\nДата публікації: ".$date."\nПрізвище, ім'я, по батькові автора: ".$fname." ".$name." ".$patr;
                file_put_contents('../files/download-file.txt',$downloadFile);
               } else{
                  $fio_str = $_COOKIE["email"];
                   $fio_array=explode(" ",$fio_str);
                   $fname=$fio_array[0];
                   $name=$fio_array[1];
                   $patr=$fio_array[2];
                   $id_user=$fio_array[3];
                $downloadFile.=$publicationName." "."[".$publicationType."]. – Режим доступу: ".$link." – ".$date." – Загол. з екрану.";
                $downloadFile.="\n";
                $downloadFile.="\nТип: ".$publicationType."\nНазва: ".$publicationName."\nДата публікації: ".$date."\nПрізвище, ім'я, по батькові автора: ".$fname." ".$name." ".$patr;
                file_put_contents('../files/download-file.txt',$downloadFile);
                  
               }
                
                

         switch($publicationType){
         case "Дисертація":
            $sql="SELECT * FROM dissertation WHERE publication_id_publ='$singlePagePublicationId'";
            $result=mysqli_query($db,$sql);
            $row = mysqli_fetch_object($result);
            print("<p class='card-text mb-auto'><strong>Тема: </strong>".$row->topic."</p>");
            print("<strong class='d-inline-block mb-2 text-primary' id='publication-name'>Рівень: ".$row->level."</strong>");
            $downloadFile.="\nТема: ".$row->topic;
            $downloadFile.="\nРівень: ".$row->level;
            file_put_contents('../files/download-file.txt',$downloadFile);
            break;
         case "Електронний ресурс":
           
            break;
         case "Книга":
            $sql="SELECT * FROM book WHERE publication_id_publ='$singlePagePublicationId'";
            $result=mysqli_query($db,$sql);
            $row = mysqli_fetch_object($result);
            print("<p class='card-text mb-auto'><strong>Наявність друкованої версії: </strong>".$row->printed_version."</p>");
            print("<p class='card-text mb-auto'><strong>Кількість сторінок: </strong>".$row->number_of_pages."</p>");
            $downloadFile.="\nДрукована версія: ".$row->printed_version;
            $downloadFile.="\nКількість сторінок: ".$row->number_of_pages;
            file_put_contents('../files/download-file.txt',$downloadFile);
            break;
         case "Методичні вказівки":
            $sql="SELECT * FROM guidelines WHERE publication_id_publ='$singlePagePublicationId'";
            $result=mysqli_query($db,$sql);
            $row = mysqli_fetch_object($result);
            print("<p class='card-text mb-auto'><strong>Дисципліна: </strong>".$row->discipline."</p>");
            $downloadFile.="\nДисципліна: ".$row->discipline;
            file_put_contents('../files/download-file.txt',$downloadFile);
            break;
         case "Монографія":
            $sql="SELECT * FROM monograph WHERE publication_id_publ='$singlePagePublicationId'";
            $result=mysqli_query($db,$sql);
            $row = mysqli_fetch_object($result);
            print("<p class='card-text mb-auto'><strong>Тема: </strong>".$row->topic."</p>");
            $downloadFile.="\nТема: ".$row->topic;
            file_put_contents('../files/download-file.txt',$downloadFile);
            break;
         case "Звіт":
            $sql="SELECT * FROM report WHERE publication_id_publ='$singlePagePublicationId'";
            $result=mysqli_query($db,$sql);
            $row = mysqli_fetch_object($result);
            print("<p class='card-text mb-auto'><strong>Дисципліна: </strong>".$row->discipline."</p>");
            $downloadFile.="\nДисципліна: ".$row->discipline;
            file_put_contents('../files/download-file.txt',$downloadFile);
            break;
         case "Патент":
            $sql="SELECT * FROM patent WHERE publication_id_publ='$singlePagePublicationId'";
            $result=mysqli_query($db,$sql);
            $row = mysqli_fetch_object($result);
            print("<p class='card-text mb-auto'><strong>Термін дії патенту: </strong>".$row->patent_duration."</p>");
            print("<p class='card-text mb-auto'><strong>Номер патенту: </strong>".$row->patent_number."</p>");
            print("<p class='card-text mb-auto'><strong>Країна: </strong>".$row->country."</p>");
            print("<p class='card-text mb-auto'><strong>Патентовласник: </strong>".$row->patent_holder_number."</p>");
            print("<p class='card-text mb-auto'><strong>Дата заяви: </strong>".$row->date_of_application."</p>");
            print("<p class='card-text mb-auto'><strong>Номер бюлетеня: </strong>".$row->bulletin_number."</p>");
            $downloadFile.="\nТермін дії патенту: ".$row->patent_duration;
            $downloadFile.="\nНомер патенту: ".$row->patent_number;
            $downloadFile.="\nКраїна: ".$row->country;
            $downloadFile.="\nПатентовласник: ".$row->patent_holder_number;
            $downloadFile.="\nДата заяви: ".$row->date_of_application;
            $downloadFile.="\nНомер бюлетеня: ".$row->bulletin_number;
            file_put_contents('../files/download-file.txt',$downloadFile);
            break;
         case "Практикум":
            $sql="SELECT * FROM workshop WHERE publication_id_publ='$singlePagePublicationId'";
            $result=mysqli_query($db,$sql);
            $row = mysqli_fetch_object($result);
            print("<p class='card-text mb-auto'><strong>Дисципліна: </strong>".$row->discipline."</p>");
            print("<strong class='d-inline-block mb-2 text-primary' id='publication-name'>Курс: ".$row->cource."</strong>");
            $downloadFile.="\nДисципліна: ".$row->discipline;
            $downloadFile.="\nКурс: ".$row->cource;
            file_put_contents('../files/download-file.txt',$downloadFile);
            break;
         case "Стаття":
            $sql="SELECT * FROM article WHERE publication_id_publ='$singlePagePublicationId'";
            $result=mysqli_query($db,$sql);
            $row = mysqli_fetch_object($result);
            print("<p class='card-text mb-auto'><strong>Місце публікації: </strong>".$row->place_of_publication."</p>");
            print("<p class='card-text mb-auto'><strong>Рік видавництва: </strong>".$row->publishing_year."</p>");
            $downloadFile.="\nМісце публікації: ".$row->place_of_publication;
            $downloadFile.="\nРік видавництва: ".$row->publishing_year;
            file_put_contents('../files/download-file.txt',$downloadFile);
            break;
         case "Тези конференцій":
            $sql="SELECT * FROM conference_abstracts WHERE publication_id_publ='$singlePagePublicationId'";
            $result=mysqli_query($db,$sql);
            $row = mysqli_fetch_object($result);
            print("<p class='card-text mb-auto'><strong>Конференція: </strong>".$row->conference."</p>");
            print("<p class='card-text mb-auto'><strong>Дата коференції: </strong>".$row->conference_date."</p>");
            print("<p class='card-text mb-auto'><strong>Місто: </strong>".$row->city."</p>");
            print("<strong class='d-inline-block mb-2 text-primary' id='publication-name'>Місце проведення конференції: ".$row->place_of_publication."</strong>");
            $downloadFile.="\nКонференція: ".$row->conference;
            $downloadFile.="\nДата коференції: ".$row->conference_date;
            $downloadFile.="\nМісто: ".$row->city;
            $downloadFile.="\nМісце проведення конференції: ".$row->place_of_publication;
            file_put_contents('../files/download-file.txt',$downloadFile);
            break;
         case "Навчальний посібник":
            $sql="SELECT * FROM tutorial WHERE publication_id_publ='$singlePagePublicationId'";
            $result=mysqli_query($db,$sql);
            $row = mysqli_fetch_object($result);
            print("<p class='card-text mb-auto'><strong>Тема: </strong>".$row->topic."</p>");
            print("<strong class='d-inline-block mb-2 text-primary' id='publication-name'>Рівень: ".$row->level."</strong>");
            $downloadFile.="\nТема: ".$row->topic;
            $downloadFile.="\nРівень: ".$row->level;
            file_put_contents('../files/download-file.txt',$downloadFile);
            break;
     }
                //$id_publ=$row[0];
                
                print("<div class='mb-1 text-muted'><strong>Дата публікації: </strong>".$date."</div>");
                print("<p class='card-text mb-auto'><strong>Прізвище, ім'я по батькові автора: </strong>".$fname." ".$name." ".$patr."</p>");
                print("<a href='".$link."'>Посилання на публікацію</a>");

           
            ?>
            </div>
            <div class="col-auto d-none d-lg-block">
            </div>
            </div>    

           
            <div class="d-flex justify-content-between align-items-center">
                <!-- <small class="text-muted">06.06.2022</small> -->
               <?php if(!isset($_COOKIE["email"]) OR trim($_COOKIE["email"])==''): ?>
                  <nav class="d-inline-flex mt-2 mt-md-0 ms-md-2">
               <a type="button" class="btn btn-sm btn-primary" href="../files/download-file.txt" download="">Завантажити картку</a>
               </nav>
               <?php
               elseif(isset($_COOKIE["email"]) OR trim($_COOKIE["email"])!=''):
               ?>
                <nav class="d-inline-flex mt-2 mt-md-0 ms-md-2">
               <button type="button" class="btn btn-sm btn-outline-secondary" id="delete" onclick="location.href='delete.php'">Видалити</button>
               </nav>
   
               <div>
               <nav class="d-inline-flex mt-2 mt-md-0 ms-md-2">
               <button type="button" class="btn btn-sm btn-outline-secondary" id="edit" onclick="requestType()">Редагувати</button>
               </nav>
               <nav class="d-inline-flex mt-2 mt-md-0 ms-md-2">
               <a type="button" class="btn btn-sm btn-primary" href="../files/download-file.txt" download="">Завантажити картку</a>
               </nav>
               
               <?php endif;?>
               </div>
            </div>
            </div>
        </div>
        </div>
       
    </div>
    
</div>
<!-- <script>
   function getType(){
   var type=document.getElementById("publ_type");
   var typeValue=null;

   if(type!=null){
      typeValue=type.value;
      console.log(typeValue);
   }
   document.cookie = "getPublicationType=" + type;

   
  // location.href='../php/edit.php';

   }
</script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="../js/get-type.js"></script>

<?php
require_once "footer.php";
?>

</body>
</html>