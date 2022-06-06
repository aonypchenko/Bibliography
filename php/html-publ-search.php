
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
<div class="row g-5">
      
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Пошук публікації</h4>
        <form class="needs-validation" novalidate="">
          <div class="row g-3">
            

            <div class="col-md-5">
              <label for="country" class="form-label" >Тип публікації</label>
              <select class="form-select" id="type_p" required="">
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
              <label for="Name" class="form-label">Назва</label>
              <input type="text" class="form-control" id="Name" placeholder="" value="" required="">
              <!-- <div class="invalid-feedback">Valid first name is required.</div> -->
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Прізвище автора</label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>

            <div id="date_publ">
            <form>
                <div class="form-group">
                <label for="inputDate" class="form-label">Дата публікації:</label>
                <input type="date" class="form-control" >
                </div>
            </form>
            </div>

         

          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" type="submit">Пошук</button>
        </form>
      </div>
    </div>
<!-- -------------------------------------- -->
<?php
require_once "footer.php";
?>
<script src="../js/logout.js"></script>
</body>
</html>