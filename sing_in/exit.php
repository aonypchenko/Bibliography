<?php

    setcookie('user', $user['login_email'], time()-3600,"/");
    header('Location: ../index.php');

?>