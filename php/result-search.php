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
</head>

<body class="body-style">

<?php
require_once "header.php";
?>
<!-- ------------------------------------- -->
<?php
            include("../php/db_connection.php");
       
                $searchData = $_COOKIE["publicationSearch"];
                $singlePagePublicationId = $_COOKIE["singlePagePublicationId"];
                
                $searchDataValue=explode(" ",$searchData);
                
                $publicationType=$searchDataValue[0];
                $publicationName=$searchDataValue[1]." ".$searchDataValue[2]." ".$searchDataValue[3];
                $publicationDate=$searchDataValue[4];
                $publicationId=$searchDataValue[6];
                
                print("<div class='col'>");
                print("<div class='card shadow-sm'>");
                print("<div class='card-body'>");
                print("<p class='publication-name'>".$publicationType."</p>");
                print("<small class='mb-1 text-muted'>".$publicationName."</small>");
                print("<div class='d-flex justify-content-between align-items-center'>");
                print(" <div class='btn-group'>");
                print("<button type='button' class='btn btn-sm btn-outline-secondary' onclick='clcVievButton(this)' id='".$publicationId."'>Переглянути</button>");
                print("<button type='button' class='btn btn-sm btn-outline-secondary' onclick='window.location.href=`#`'>Редагувати</button>");
                print("</div>");
                print("<small class='text-muted'>".$publicationDate."</small>");
                print("</div>");
                print("</div>");
                print("</div>");
                print("</div>");    
            ?>
<!-- -------------------------------------- -->
<?php
require_once "footer.php";
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="../js/search-publication.js"></script>
<script src="../js/view-button.js"></script>

</body>
</html>