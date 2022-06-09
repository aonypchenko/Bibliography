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
            include("../php/define-type.php");
                $fio_str = $_COOKIE["email"];
                $singlePagePublicationId = $_COOKIE["singlePagePublicationId"];
                
                $fio_array=explode(" ",$fio_str);
                $fname=$fio_array[0];
                $name=$fio_array[1];
                $patr=$fio_array[2];
                $id_user=$fio_array[3];

                $sql = "SELECT * FROM publication INNER JOIN dissertation ON publication.id_publ=dissertation.publication_id_publ  WHERE publication.id_publ='$singlePagePublicationId'";
                $result = $db->query($sql);
                $row = $result->fetch_all(MYSQLI_ASSOC);
                
                //$id_publ=$row[0];
                foreach($row as $i){
                    $id_publ=def_type($i["publ_type"]);
                    print("<strong class='d-inline-block mb-2 text-primary' id='publ_type'>".$i["publ_type"]."</strong>");                       
                    print("<h3 class='mb-0'>".$i["publ_name"]."</h3>");
                    print("<h4 class='mb-0'>".$i["topic"]."</h4>");
                    print("<strong class='d-inline-block mb-2 text-primary' id='publication-name'>".$i["level"]."</strong>");
                    print("<div class='mb-1 text-muted'>".$i["publ_date"]."</div>");
                    print("<p class='card-text mb-auto'>".$fname." ".$name." ".$patr."</p>");
                }    
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