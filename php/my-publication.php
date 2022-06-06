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
    <link rel="stylesheet" href="../css/filter-style.css">
</head>

<body class="body-style">

<?php
require_once "header.php";
?>
<!-- ------------------------------------- -->
<div>
    <div class="filter_publ">
            <div class="col-md-5">
              <select class="form-select" id="filter_type" required="">
                <option value="">Тип</option>
                <option >Дисертація</option>
                <option >Електронний ресурс</option>
                <option >Книга</option>
                <option >Методичні вказівки</option>
                <option >Монографія</option>
                <option >Звіт</option>
                <option >Патент</option>
                <option >Практикум</option>
                <option >Стаття</option>
                <option >Тези конференцій</option>
                <option >Навчальний посібник</option>
              </select>
              <!-- <div class="invalid-feedback">
                Please select a valid country.
              </div> -->
            </div>

            <div class="col-sm-6">
              <input type="text" class="form-control" id="filter_name" placeholder="Назва" value="" required="">
              <!-- <div class="invalid-feedback">Valid first name is required.</div> -->
            </div>

            <div class="date_publ">
            <form>
                <div class="form-group" id="filter_date">
                <input type="date" class="form-control" placeholder="Дата публікації" >
                </div>
            </form>
            </div>
    </div>
</div>
<div class="container">

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
        <div class="card shadow-sm">

            <div class="card-body">
            <p class="card-text">Приклад публікації</p>
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary" onclick="window.location.href='publication-card.php'">Переглянути</button>
                <button type="button" class="btn btn-sm btn-outline-secondary" onclick="window.location.href='publication-card.php'">Редагувати</button>
                </div>
                <small class="text-muted">06.06.2022</small>
            </div>
            </div>
        </div>
        </div>
        <div class="col">
        <div class="card shadow-sm">

            <div class="card-body">
            <p class="card-text">Приклад публікації</p>
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary" onclick="window.location.href='publication-card.php'">Переглянути</button>
                <button type="button" class="btn btn-sm btn-outline-secondary" onclick="window.location.href='publication-card.php'">Редагувати</button>
                </div>
                <small class="text-muted">06.06.2022</small>
            </div>
            </div>
        </div>
        </div>
        <div class="col">
        <div class="card shadow-sm">

            <div class="card-body">
            <p class="card-text">Приклад публікації</p>
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary" onclick="window.location.href='publication-card.php'">Переглянути</button>
                <button type="button" class="btn btn-sm btn-outline-secondary" onclick="window.location.href='publication-card.php'">Редагувати</button>
                </div>
                <small class="text-muted">06.06.2022</small>
            </div>
            </div>
        </div>
        </div>
    </div>
    
</div>


<?php
require_once "footer.php";
?>
<script src="../js/logout.js"></script>
</body>
</html>