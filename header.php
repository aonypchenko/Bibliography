<!-- HEADER -->
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <a href="index.php" class="d-flex align-items-center text-dark text-decoration-none">
    <img src="img\open-book-illustration_23-2147500911.png" width="40" height="32"><title></title></img>
    <span class="fs-4" onclick="window.location.href='index.php'">BiblioIS</span>
  </a>

  <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
    <button type="button" class="btn btn-light me-md-3" onclick="window.location.href='html-publ-search.php'">Пошук публікацій</button>
  </nav>
    
<!-- Если пользователь не зарегался -->
<?php
if(!isset($_COOKIE['email']) OR trim($_COOKIE['email'])==''):
?>
  <button type="button" class="btn btn-primary" onclick="window.location.href='sing_in/html-registration.php'">Реєстрація</button>

  <nav class="d-inline-flex mt-2 mt-md-0 ms-md-2">
  <button type="button" class="btn btn-primary" onclick="window.location.href='sing_in/html-login.php'">Увійти</button>
  </nav>

  <?php
  elseif(isset($_COOKIE['email']) OR trim($_COOKIE['email'])!=''):
  ?>
  <nav class="d-inline-flex mt-2 mt-md-0 ms-md-2">
  <button type="button" name="exit_user" class="btn btn-light me-md-3" onclick="window.location.href='php/add-publication.php'">Додати публікацію</button>
  </nav>
  <nav class="d-inline-flex mt-2 mt-md-0 ms-md-2">
  <button type="button" name="exit_user" class="btn btn-light me-md-3" onclick="window.location.href='php/my-publication.php'">Мої публікації</button>
  </nav>
  <nav class="d-inline-flex mt-2 mt-md-0 ms-md-2">
  <button id="logout" class="btn btn-primary">Вийти</button>
  </nav>
  <?php endif;?>
  <script src="js/logout.js"></script>
<!--  -->
</div>