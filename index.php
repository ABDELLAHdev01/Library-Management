<?php

include 'connection.php';
include 'scripts.php';

if(isset($_SESSION['USER_ID'])){
    header("location:dashboard.php");
}

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/sketchy/bootstrap.min.css" integrity="sha384-RxqHG2ilm4r6aFRpGmBbGTjsqwfqHOKy1ArsMhHusnRO47jcGqpIQqlQK/kmGy9R" crossorigin="anonymous"><link rel="icon" href="img/icon.png" type="image/png">

    <title>Wise Library</title>
</head>
<body class="bgb">

<nav class="navbar navbar-expand-lg bgnav">
<div class="container-fluid">
  <a class="navbar-brand text-warning" href="index.php">Wise <span class="text-white"> Library</span></a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>

</button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <div class="navbar-nav">
        <a class="nav-item nav-link disabled text-warning" href="#">Home <span class="sr-only"></span></a>
        <a class="nav-item nav-link text-white" href="allbooks.php">Books</a>
        <a class="nav-item nav-link text-white" href="contactus.php">About us</a>
        <a class="nav-item nav-link text-white" href="aboutus.php">Contact us</a>
    </div>
</div>
      <div class="d-flex">
        <a class=" nav-link text-white m-1" href="Login.php">Sign in </a>
        <a class="nav-link text-dark btn btn-warning m-1 px-3" href="signup.php">Sign up</a>
      </div>
  </div>
  </div>
</nav>


<div class="d-flex row" style="margin:0; padding:0;">
<div class="col-6 d-inline-block ">
<h2 class="text-white m-4">👋 Welcome to <span class="text-warning">Wise </span> <span class="text-white"> Library</span></h2>
<p class="container-fluid text-white m-4">Well, friends, it’s been another tough year. But as we wind down 2021, it is useful to remember the good parts, the pleasures small and large that got us through. And yes, a beautifully designed book can be one of those pleasures—especially when we’re still spending more time at home than perhaps we would like.</p>
</div>
<div class="col-5">
<img class="w-100 m-4 rounded" src="img/banner.jpg" alt="" >
</div>
</div>

<!-- test -->


<h2 class="text-white m-4">OUR BOOKS 👇</h2>

<section class="d-flex justify-content-around flex-wrap gap-3 overflow-hidden my-3">
                <?php echo books(); ?>
            </section>


</div>
<!-- Footer -->
<footer class="bg-dark  text-white d-flex justify-content-around navbar footer-size">
    
<div class="textdeco">
    <p><a href="index.php">Home</a></p>
    <p><a href="404.php">Books</a></p>
    <p><a href="404.php">About us</a></p>
    <p><a href="404.php">Contact us</a></p> 
</div>

<div class="textdeco">
    <p><a href="404.php">linkdin</a></p>
    <p><a href="404.php">Instagram</a></p>
    <p><a href="404.php">Twitter</a></p>
    <p><a href="404.php">Facebook</a></p> 
</div>



<div class="textdeco">
    <h6>Email : abdellahelghouladev@gmail.com </h6>
    <h6>Number: 0603554490</h6>
</div>

<div class="textdeco">
<a class="text-warning" href="index.php">Wise <span class="text-white"> Library</span></a>

</div>

</footer>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>