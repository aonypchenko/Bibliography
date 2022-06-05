<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/publ-style.css">
    
</head>
<body class="body-style">

<!-- Header -->
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
      <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
        <img src="img\open-book-illustration_23-2147500911.png" width="40" height="32"><title></title></img>
        <span class="fs-4">BiblioIS</span>
      </a>

      <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
        <button type="button" class="btn btn-light me-md-3" onclick="window.location.href='publication-search.php'">Пошук публікацій</button>
      </nav>
    
      <button type="button" class="btn btn-primary" onclick="window.location.href='html-login.php'">Увійти</button>
    </div>


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
    <div class="container">
  <footer class="py-3 my-4" id="footer-style">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li class="nav-item"><a href="index.php" class="nav-link px-2 text-muted">Головна</a></li>
      <li class="nav-item"><a href="publication-search.php" class="nav-link px-2 text-muted">Пошук</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Про нас</a></li>
    </ul>
    <p class="text-center text-muted">© 2021 Company, Inc</p>
  </footer>
</div>
</body>
</html>