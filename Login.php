<?php
include "connection.php";
include "scripts.php";
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
        <a class="nav-item nav-link  text-white" href="index.php">Home <span class="sr-only"></span></a>
        <a class="nav-item nav-link text-white" href="404.php">Books</a>
        <a class="nav-item nav-link text-white" href="404.php">About us</a>
        <a class="nav-item nav-link text-white" href="404.php">Contact us</a>
    </div>
</div>
      <div class="d-flex">
      <a class=" nav-link text-white m-1" href="Login.php">Sign in </a>
        <a class="nav-link text-white btn btn-warning m-1" href="signup.php">Sign up</a>
      </div>
  </div>
  </div>
</nav>

<div>
<div class="">
<div class="justify-content-center w-100 mt-5 ">
    <!-- <div id="bgform"> -->
    <form class="row w-25 m-auto bg-dark rounded p-2 d-flex flex-column justify-content-center" action="scripts.php" method="POST">
    <?php if (isset($_SESSION['message'])): ?>
				<div class="alert alert-danger alert-dismissible fade show">
				<strong>Oops ! </strong>
					<?php 
						echo $_SESSION['message']; 
						unset($_SESSION['message']);
					?>
					<button type="button" class="btn-close" data-bs-dismiss="alert"></span>
				</div>
			<?php endif ?>
        <h2 class="text-warning justify-content-center">SIGN IN</h2>
        <input class=" form-controle my-2 rounded border-0" type="email" name="email" placeholder="ENTER EMAIL" required>
       
        <input name="password" class="form-controle my-2 rounded border-0" type="Password"  placeholder="ENTER PASSWORD" required>
        <button  class="form-controle my-2 btn btn-warning" type="submite" name="login"> SIGN IN</button>
       <p class="text-white">Dont have account ? <a class="text-warning" href="signup.php">register now!</a></p>
    </form>
    <!-- </div> -->
   
    <!-- </div>

<img class="banner rounded col-5 m-5" src="img/banner.jpg" alt="">


</div> -->
</div>


<!-- Footer -->
<footer class="bg-dark  text-white d-flex justify-content-around navbar fixed-bottom footer-size">
    
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

</footer>

<!-- Footer -->
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<!-- JS FILE -->
<script src="scripts.js"></script>

</body>
</html>