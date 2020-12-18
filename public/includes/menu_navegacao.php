<?php
  session_start();
  $hrefLogin = '/public/pages/admin/form_login.php';
  $isLoggedIn = "";
  $buttonLogin = "";
  if(isset($_SESSION['logado'])) {
    $hrefLogin = '/public/pages/admin/deslogar.php';
    $isLoggedIn = "Deslogar";
    $buttonLogin = '<button class="btn btn-outline-danger"><a href="'.$hrefLogin.'" class="navbar-text" style="text-decoration:none;">'.$isLoggedIn.'</a></button>';
  } else {
    $isLoggedIn = "Logar";
    $buttonLogin = '<button class="btn btn-outline-success"><a href="'.$hrefLogin.'" class="navbar-text" style="text-decoration:none;">'.$isLoggedIn.'</a></button>';
  }
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Cardapio Web</a>
    <?=$buttonLogin?>
  </div>
</nav>