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

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->

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
        <a class="nav-item nav-link text-white" href="aboutus.php">About us</a>
        <a class="nav-item nav-link disabled text-warning" href="contactus.php">Contact us</a>
    </div>
</div>
      <div class="d-flex">
      <a class=" nav-link text-white m-1" href="Login.php">Sign in </a>
        <a class="nav-link text-dark btn btn-warning m-1" href="signup.php">Sign up</a>
      </div>
  </div>
  </div>
</nav>



<h1 class="text-warning">Contact Us !</h1>
    <h2 class="text-white" style="text-align: center;">Welcome to <span id="W_Name"> Wise Library</span>!</h2>

    <p class="text-white" style="font-size: 17px;">Please email us if you have any queries about the site, advertising, or anything else.</p>

    <div style="text-align: center;">

      <img alt="contact-us" height="87" src="https://lh3.googleusercontent.com/-BA7qy8h_v1g/YLVCWDNZdCI/AAAAAAAAALw/rsHNJWX0BK4P5CuB0ymG8QkJ9A9E8KchgCLcBGAsYHQ/w320-h87/email-us-1805514__480.webp" width="320">

      <p style="margin-left: 25%;"><i class="fas fa-envelope-open-text" style="color: #2c3e50; font-size: 20px;"></i> <b><i> <span id="W_Email"><a href="mailto:wise@librart.info">wise@librart.info</a></span></i></b><br>

        <i class="fab fa-whatsapp-square" style="color: #3edc81; font-size: 20px;"></i> <b><span id="W_whatsapp"><a href="tel:"></a></span></b><br></p>    

      <h3 style="color: #3e005d;">We will revert you as soon as possible...!</h3>
      <p style="color: #3e005d; text-align: center;">Thank you for contacting us! <br><b>Have a great day</b></p>
      <span style="font-size: 1px; opacity: 0;">This page is generated with the help of <a href="https://www.blogearns.com/2021/06/free-contact-us-page-generator.html" style="color: inherit;">Contact Us Page Generator</a></span>
    </div>
  




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