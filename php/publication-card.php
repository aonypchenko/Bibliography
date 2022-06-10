<?php
if(!isset($_COOKIE['email']) OR trim($_COOKIE['email'])==''){
    header('Location: ../index.php');
    exit();
}
?>
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
            
                $fio_str = $_COOKIE["email"];
                $singlePagePublicationId = $_COOKIE["singlePagePublicationId"];
                
                $fio_array=explode(" ",$fio_str);
                $fname=$fio_array[0];
                $name=$fio_array[1];
                $patr=$fio_array[2];
                $id_user=$fio_array[3];

                $sql = "SELECT * FROM publication WHERE publication.id_publ='$singlePagePublicationId'";
                $result=mysqli_query($db,$sql);
                $row = mysqli_fetch_object($result);
                $publicationType=$row->publ_type;
                $date=$row->publ_date;
                $link=$row->url;
                print("<strong class='d-inline-block mb-2 text-primary' id='publ_type'>".$row->publ_type."</strong>");                       
                print("<h3 class='mb-0'>".$row->publ_name."</h3>");
                

         switch($publicationType){
         case "Дисертація":
            $sql="SELECT * FROM dissertation WHERE publication_id_publ='$singlePagePublicationId'";
            $result=mysqli_query($db,$sql);
            $row = mysqli_fetch_object($result);
            print("<p class='card-text mb-auto'><strong>Тема: </strong>".$row->topic."</p>");
            print("<strong class='d-inline-block mb-2 text-primary' id='publication-name'>Рівень: ".$row->level."</strong>");
            break;
         case "Електронний ресурс":
           
            break;
         case "Книга":
            $sql="SELECT * FROM book WHERE publication_id_publ='$singlePagePublicationId'";
            $result=mysqli_query($db,$sql);
            $row = mysqli_fetch_object($result);
            print("<p class='card-text mb-auto'><strong>Наявність друкованої версії: </strong>".$row->printed_version."</p>");
            
            break;
         case "Методичні вказівки":
            $sql="SELECT * FROM guidelines WHERE publication_id_publ='$singlePagePublicationId'";
            $result=mysqli_query($db,$sql);
            $row = mysqli_fetch_object($result);
            print("<p class='card-text mb-auto'><strong>Дисципліна: </strong>".$row->discipline."</p>");
            break;
         case "Монографія":
            $sql="SELECT * FROM monograph WHERE publication_id_publ='$singlePagePublicationId'";
            $result=mysqli_query($db,$sql);
            $row = mysqli_fetch_object($result);
            print("<p class='card-text mb-auto'><strong>Тема: </strong>".$row->topic."</p>");
            break;
         case "Звіт":
            $sql="SELECT * FROM report WHERE publication_id_publ='$singlePagePublicationId'";
            $result=mysqli_query($db,$sql);
            $row = mysqli_fetch_object($result);
            print("<p class='card-text mb-auto'><strong>Дисципліна: </strong>".$row->discipline."</p>");
            break;
         case "Патент":
            $sql="SELECT * FROM patent WHERE publication_id_publ='$singlePagePublicationId'";
            $result=mysqli_query($db,$sql);
            $row = mysqli_fetch_object($result);
            print("<p class='card-text mb-auto'><strong>Термін дії патенту: </strong>".$row->patent_duration."</p>");
            break;
         case "Практикум":
            $sql="SELECT * FROM workshop WHERE publication_id_publ='$singlePagePublicationId'";
            $result=mysqli_query($db,$sql);
            $row = mysqli_fetch_object($result);
            print("<p class='card-text mb-auto'><strong>Дисципліна: </strong>".$row->discipline."</p>");
            print("<strong class='d-inline-block mb-2 text-primary' id='publication-name'>Курс: ".$row->cource."</strong>");
            break;
         case "Стаття":
            
            break;
         case "Тези конференцій":
            $sql="SELECT * FROM conference_abstracts WHERE publication_id_publ='$singlePagePublicationId'";
            $result=mysqli_query($db,$sql);
            $row = mysqli_fetch_object($result);
            print("<p class='card-text mb-auto'><strong>Конференція: </strong>".$row->conference."</p>");
            print("<p class='card-text mb-auto'><strong>Дата коференції: </strong>".$row->conference_date."</p>");
            print("<strong class='d-inline-block mb-2 text-primary' id='publication-name'>Місце проведення конференції: ".$row->place_of_publication."</strong>");
            break;
         case "Навчальний посібник":
            $sql="SELECT * FROM tutorial WHERE publication_id_publ='$singlePagePublicationId'";
            $result=mysqli_query($db,$sql);
            $row = mysqli_fetch_object($result);
            print("<p class='card-text mb-auto'><strong>Тема: </strong>".$row->topic."</p>");
            print("<strong class='d-inline-block mb-2 text-primary' id='publication-name'>Рівень: ".$row->level."</strong>");
            break;
     }
                //$id_publ=$row[0];
                
                print("<div class='mb-1 text-muted'><strong>Дата публікації: </strong>".$date."</div>");
                print("<p class='card-text mb-auto'><strong>Прізвище, ім'я по батькові автора: </strong>".$fname." ".$name." ".$patr."</p>");
                print("<a href='".$link."'>Посилання на публікацію</a>")
            ?>
            </div>
            <div class="col-auto d-none d-lg-block">
            </div>
            </div>    

           
            <div class="d-flex justify-content-end align-items-center">
                <!-- <small class="text-muted">06.06.2022</small> -->
                <div>
                <nav class="d-inline-flex mt-2 mt-md-0 ms-md-2">
                <button type="button" class="btn btn-sm btn-outline-secondary" id="edit" onclick="editInfo()">Редагувати</button>
                </nav>
                <nav class="d-inline-flex mt-2 mt-md-0 ms-md-2">
                <button type="button" class="btn btn-sm btn-primary">Завантажити картку</button>
                </nav>
                </div>
            </div>
            </div>
        </div>
        </div>
       
    </div>
    
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="../js/view-button.js"></script>
<script src="../js/edit.js"></script>

<?php
require_once "footer.php";
?>

</body>
</html>