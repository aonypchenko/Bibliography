<?php
include("../php/db_connection.php");

$fio_str = $_COOKIE["email"];
    
    $fio_array=explode(" ",$fio_str);
    $fname=$fio_array[0];
    $name=$fio_array[1];
    $patr=$fio_array[2];
    $id_user=$fio_array[3];

    $sql = "SELECT * FROM publication WHERE login_user_id_user='$id_user'";
    $result = $db->query($sql);
    $row = $result->fetch_all(MYSQLI_ASSOC);
    // print_r($row);
    
    foreach($row as $i){
        print("<div class='col'>");
        print("<div class='card shadow-sm'>");
        print("<div class='card-body'>");
        print("<p class='publication-name'>".$i["publ_name"]."</p>");
        print("<small class='mb-1 text-muted'>".$i["publ_type"]."</small>");
        print("<div class='d-flex justify-content-between align-items-center'>");
        print(" <div class='btn-group'>");
        print("<button type='button' class='btn btn-sm btn-outline-secondary' onclick='clcVievButton(this)' id='".$i["id_publ"]."'value='".$i["id_publ"]."'>Переглянути</button>");
        print("<button type='button' class='btn btn-sm btn-outline-secondary' onclick='window.location.href=`#`'>Редагувати</button>");
        print("</div>");
        print("<small class='text-muted'>".$i["publ_date"]."</small>");
        print("</div>");
        print("</div>");
        print("</div>");
        print("</div>"); 
    }

    ?>