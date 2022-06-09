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
                
                $fio_array=explode(" ",$fio_str);
                $fname=$fio_array[0];
                $name=$fio_array[1];
                $patr=$fio_array[2];
                $id_user=$fio_array[3];

                if($_SERVER["REQUEST_METHOD"] == "POST") {
                $publ_id=$_POST['publ_id'];

                $sql = "SELECT * FROM publication WHERE id_publ='$publ_id'";
                $result = $db->query($sql);
                $row = $result->fetch_all(MYSQLI_ASSOC);
                // print_r($row);
                
                foreach($row as $i){
                    
                    print("<strong class='d-inline-block mb-2 text-primary' id='publication-name'></strong>");
                   
                }
                }
                ?>
        
            <h3 class="mb-0">Біобліографічна інформаційна система</h3>
            <div class="mb-1 text-muted">6 червня 2022</div>
            <p class="card-text mb-auto">Дипломний проєкт студента 4 курсу Харківського національного університету радіоелектроніки Онипченка Артема Олександровича.</p>
            </div>
            <div class="col-auto d-none d-lg-block">
            </div>
            </div>    

           
            <div class="d-flex justify-content-between align-items-center">
                <small class="text-muted">06.06.2022</small>
                <div>
                <nav class="d-inline-flex mt-2 mt-md-0 ms-md-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">Редагувати</button>
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

<?php
require_once "footer.php";
?>

</body>
</html>