<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/publ-style.css">
    
</head>
<body class="body-style">

<!-- Header -->
<?php
require_once "header.php";
?>


<div><h1 class="sph1">Пошук публікацій</h1></div>
<div class="field">
  <div>
  <p class="fname">Заклад:</p>
  <input type="search" class="form-control" placeholder="Пошук...">
  </div>
  <div>
  <p class="fname">Галузь:</p>
  <input type="search" class="form-control" placeholder="Пошук...">
  </div>
  <div>
  <p class="fname">Тип публікації:</p>
  <input type="search" class="form-control" placeholder="Пошук...">
  </div>
  <div>
  <p class="fname">Прізвище:</p>
  <input type="search" class="form-control" placeholder="Пошук...">
  </div>
  <div>
  <p class="fname">Ім'я:</p>
  <input type="search" class="form-control" placeholder="Пошук...">
  </div>
</div>

<div id="btn-search">
  <div><button type="button" class="btn btn-primary" >Пошук</button></div>
</div>

    <!-- Footer -->
    <?php
require_once "footer.php";
?>
</body>
</html>