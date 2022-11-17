<?php

include 'connection.php';
include 'scripts.php';


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS Style -->
	<link href="style.css" rel="stylesheet" />
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <title>Wise Library</title>
</head>
<body class="bgb">

<nav class="navbar navbar-expand-lg bgnav">
<div class="container-fluid">
  <a class="navbar-brand text-warning" href="index.php">Wise <span class="text-white"> Library</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
  </button>
  <div class="collapse navbar-collapse  " id="navbarNavAltMarkup">
    <div class="navbar-nav">
        <a class="nav-item nav-link disabled text-warning" href="#">Home <span class="sr-only"></span></a>
        <a class="nav-item nav-link text-white" href="404.php">Books</a>
        <a class="nav-item nav-link text-white" href="404.php">About us</a>
        <a class="nav-item nav-link text-white" href="404.php">Contact us</a>
    </div>
</div>
      <div class="d-flex">
        <a class=" nav-link text-white m-1" href="Login.php">Sign in </a>
        <a class="nav-link text-dark btn btn-warning m-1" href="signup.php">Sign up</a>
      </div>
  </div>
  </div>
</nav>
<!-- 404 -->
<center> <h1 class="text-muted">404</h1></center>
<center> <h3 class="text-muted">Ops ! This Page Makaynach ^_^</h3></center>
<!-- Footer -->
</body>
</html>