<?php
include "connection.php";
include "scripts.php";
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.2/doc/assets/docs.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.2/src/parsley.css" />
    <!-- CSS only -->
    <link href="style.css" rel="stylesheet" />
    <link rel="icon" href="img/icon.png" type="image/png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/sketchy/bootstrap.min.css" integrity="sha384-RxqHG2ilm4r6aFRpGmBbGTjsqwfqHOKy1ArsMhHusnRO47jcGqpIQqlQK/kmGy9R" crossorigin="anonymous"><!-- JavaScript Bundle with Popper -->

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
        <a class="nav-item nav-link  text-white" href="index.php">Home <span class="sr-only"></span></a>
        <a class="nav-item nav-link text-white" href="allbooks.php">Books</a>
        <a class="nav-item nav-link text-warning disabled" href="aboutus.php">About us</a>
        <a class="nav-item nav-link text-white" href="contactus.php">Contact us</a>
    </div>
</div>
      <div class="d-flex">
      <a class=" nav-link text-white m-1" href="Login.php">Sign in </a>
        <a class="nav-link text-dark btn btn-warning m-1 px-3" href="signup.php">Sign up</a>
      </div>
  </div>
  </div>
</nav>


<h2 class="text-warning">About Us!</h2>
    <h3 style="text-align: center;">Welcome To <span id="W_Name1">Wise Library</span></h3>
    <p class="text-white"><span id="W_Name2">Wise Library</span> is a Professional <span id="W_Type1">ecommerce</span> Platform. Here we will provide you only interesting content, which you will like very much. We're dedicated to providing you the best of <span id="W_Type2">ecommerce</span>, with a focus on dependability and <span id="W_Spec">books</span>. We're working to turn our passion for <span id="W_Type3">ecommerce</span> into a booming <a href="https://www.blogearns.com/2021/05/free-about-us-page-generator.html" rel="do-follow" style="color: inherit; text-decoration: none;">online website</a>. We hope you enjoy our <span id="W_Type4">ecommerce</span> as much as we enjoy offering them to you.</p>
<p class="text-white">I will keep posting more important posts on my Website for all of you. Please give your support and love.</p>
<p class="text-white" style="font-weight: bold; text-align: center;">Thanks For Visiting Our Site<br><br>
<span style="color: blue; font-size: 16px; font-weight: bold; text-align: center;">Have a nice day!</span></p>
    




<!-- Footer -->
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<!-- JS FILE -->
<script src="scripts.js"></script>
<!-- Jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- parsely -->
<script src="parsley.js"></script>

</body>
</html>