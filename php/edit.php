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
<div class="row g-5" id="add_elements">
      
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Редагувати публікацію</h4>
        <form class="needs-validation">
          <div class="row g-3">

            <div class="col-sm-6">
              <label for="Name" class="form-label">Назва</label>
              <input type="text" class="form-control" id="Name">
              <!-- <div class="invalid-feedback">Valid first name is required.</div> -->
            </div>

            <div id="date_publ">
            <form>
                <div class="form-group">
                <label for="inputDate" class="form-label">Дата публікації:</label>
                <input type="date" class="form-control" id="date_input">
                </div>
            </form>
            </div>

            <div id="div-one" class='col-sm-6'>
            <label for='url_p' class='form-label'>Посилання</label>
              <input type='text' class='form-control' id='url_p'>
              <div class='invalid-feedback'>Valid last name is required.</div>
            </div>
            <div id="div-two" class='col-sm-6'></div>
            <div id="div-three" class='col-sm-6'></div>
            <div id="div-four" class='col-sm-6'></div>
            
          <hr class="my-4">
          
          <input class="w-100 btn btn-primary btn-lg" type="button" id="save" value="Save"/>
        </form>
      </div>
    </div>
<!-- -------------------------------------- -->
<?php
require_once "footer.php";
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="../js/edit.js"></script>
</body>
</html>