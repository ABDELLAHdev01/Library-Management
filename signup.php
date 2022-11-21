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
	<link href="style.css" rel="stylesheet" />
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
   <!-- BEGIN parsley css-->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.2/doc/assets/docs.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.2/src/parsley.css" />
  <!-- END parsley css-->
  <link rel="icon" href="img/icon.png" type="image/png">

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
        <a class="nav-item nav-link text-white" href="contactus.php">Contact us</a>
    </div>
</div>
      <div class="d-flex">
      <a class=" nav-link text-white m-1" href="signup.php">Sign up </a>
        <a class="nav-link text-dark btn btn-warning m-1" href="login.php">Sign in</a>
      </div>
  </div>
  </div>
</nav>

<div>
<div class="">
<div class="justify-content-center w-100 mt-4 mb-5">
    <form data-parsley-validate id="signupform" class="row w-50  m-auto bg-dark rounded p-2 d-flex flex-column justify-content-center" action="scripts.php" method="POST">
        <?php if (isset($_SESSION['dejakayn'])): ?>
				<div class="alert alert-danger alert-dismissible fade show">
				<strong>Oops ! </strong>
					<?php 
						echo $_SESSION['dejakayn']; 
						unset($_SESSION['dejakayn']);
					?>
					<button type="button" class="btn-close" data-bs-dismiss="alert"></span>
				</div>
			<?php endif ?>
        <h2 class="text-warning justify-content-center">SIGN UP</h2>
        <input id="namesu" name="name" class=" form-controle my-2 rounded border-0" type="text" placeholder="Enter name" required data-parsley-length="[6, 20]"	>
        <input id="email" name="email" class=" form-controle my-2 rounded border-0" type="email" placeholder="Enter email" required data-parsley-type="email" >
        <input id="password" name="password" class=" form-controle my-2 rounded border-0" type="Password" placeholder="Enter password" required data-parsley-length="[6, 10]">
        <button id="sub" name="signup" class="form-controle my-2 btn btn-warning" type="submite">SIGN UP</button>
            <p class="text-white">Alredy have account ? <a class="text-warning" href="login.php">Sign in now!</a></p>

    </form>
   

</div>

</div>
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

<!-- Footer -->
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<!-- JS FILE -->
<script src="scripts.js"></script>
<!-- Jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- parsely -->
<script src="parsley.js"></script>dy>
</html>