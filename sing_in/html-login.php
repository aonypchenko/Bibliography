<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signin Template · Bootstrap v5.1</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="../css/login-style.css">
  </head>

 
<body class="text-center">
    
<main class="form-signin">
  <form class="form-general">
   
    <h1 class="h3 mb-3 fw-normal">Вхід</h1>

    <div class="form-floating" id="email-form">
      <input type="email" name="email" class="form-control mb-1" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Пошта</label>
      <div id="errorEmail"></div>
    </div>
    <div class="form-floating" id="password-form">
      <input type="password" name="password" class="form-control mb-1" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Пароль</label>
      <div id="errorPass"></div>
    </div>
    <br></br>
    <button class="btn btn-primary" id="login" type="button" onclick="getThree()">Увійти</button>
    <p class="mt-5 mb-3 text-muted">© 2022</p>
  </form>
</main>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="../js/login-validation.js"></script>
<script src="../js/two.js"></script>
</body></html>