<?php
include './includes/header.php';
?>


<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="./img/logo.svg" alt="Logo" height="50" class="ms-3">
    </a>

    <div class="d-flex">
        <div class="mt-2">
    <li class="nav-item dropdown me-4">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Usuário Logado
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Minha conta</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Meu portfólio</a></li>
            
          </ul>
        </li>
        </div>



       <a href="./index.php" class="btn btn-md btn-login" type="button">SAIR </a>
    </div>
  </div>
</nav>

