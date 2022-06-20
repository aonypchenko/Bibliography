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
        $publicationId=$searchDataValue[0];

        $sql = "SELECT * FROM publication WHERE id_publ='$publicationId'";

        $result = $db->query($sql);
        $row = $result->fetch_all(MYSQLI_ASSOC);

        foreach($row as $i){
        print("<div class='col'>");
        print("<div class='card shadow-sm'>");
        print("<div class='card-body'>");
        print("<p class='publication-name'>".$i["publ_type"]."</p>");
        print("<small class='mb-1 text-muted'>".$i["publ_name"]."</small>");
        print("<div class='d-flex justify-content-between align-items-center'>");
        print(" <div class='btn-group'>");
        print("<button type='button' class='btn btn-sm btn-outline-secondary' onclick='clcVievButton(this)' id='".$publicationId."'>Переглянути</button>");
        print("</div>");
        print("<small class='text-muted'>".$i["publ_date"]."</small>");
        print("</div>");
        print("</div>");
        print("</div>");
        print("</div>");
        }
?>
<!-- -------------------------------------- -->
<?php
require_once "footer.php";
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="../js/view-button.js"></script>

</body>
</html>