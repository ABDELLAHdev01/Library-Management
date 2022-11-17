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
<!-- <footer class="bg-dark  text-white d-flex justify-content-around navbar fixed-bottom footer-size mt-2">
    
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

<div>
<a class="text-warning" href="index.php">Wise <span class="text-white"> Library</span></a>
</div>

</footer> -->

<!-- Footer -->
</body>
</html>