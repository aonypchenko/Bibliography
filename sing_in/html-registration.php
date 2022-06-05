<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <title>Реєстрація</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/login-style.css">
  </head>
  <body class="text-center">
    
<main class="form-signin">
  <form class="form-general">
   
    <h1 class="h3 mb-3 fw-normal">Реєстрація</h1>

    <div class="form-floating" id="firstname-form">
      <input type="text" name="firstname" class="form-control mb-1" id="firstname" placeholder="Прізвище">
      <label for="floatingInput">Прізвище</label>
      <div id="errorFname"></div>
    </div>

    <div class="form-floating" id="name-form">
      <input type="text" name="name" class="form-control mb-1" id="name" placeholder="Ім'я">
      <label for="floatingInput">Ім'я</label>
      <div id="errorName"></div>
    </div>

    <div class="form-floating" id="patr-form">
      <input type="text" name="patr" class="form-control mb-1" id="patr" placeholder="Ім'я по батькові">
      <label for="floatingInput">Ім'я по батькові</label>
      <div id="errorPatr"></div>
    </div>

    <div class="form-floating" id="email-form">
      <input type="email" name="email" class="form-control mb-1" id="floatingInput" placeholder="Пошта">
      <label for="floatingInput">Пошта</label>
      <div id="errorEmail"></div>
    </div>

    <div class="form-floating" id="password-form">
      <input type="password" name="password" class="form-control mb-1" id="floatingPassword" placeholder="Пароль">
      <label for="floatingPassword">Пароль</label>
      <div id="errorPass"></div>
    </div>
    <br></br>
    <button class="btn btn-primary" id="registration" type="button">Зареєструватися</button>
    <p class="mt-5 mb-3 text-muted">© 2022</p>
  </form>
</main>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="../js/reg-validation.js"></script>

</body></html>