<?php 

include 'scripts.php';
include 'connection.php';

if(!isset($_SESSION['USER_ID'])){
    header("location:login.php");
}

$conn = $GLOBALS['conn'];
$id = $_SESSION['USER_ID'];

$count = "select * from orders where userID= $id";
$result = mysqli_query($conn, $count);
$num = mysqli_num_rows($result);


$countall = "SELECT * FROM `orders`;";
$resultall = mysqli_query($conn, $countall);
$numall = mysqli_num_rows($resultall);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS Style -->
	<link href="style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"> 
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<link rel="icon" href="img/icon.png" type="image/png">

    <title>EL GHOULAM Library</title>
</head>
<body class="bgb">

<nav class="navbar navbar-expand-lg bgnav">
<div class="container-fluid">
    
  <a class="navbar-brand text-white" href="dashboard.php">Wise <span class="text-warning"> Library</span></a>

</div>

<div class="d-flex me-3">
<a href="books.php"><i class="bi bi-book text-warning m-2 icon-size"></i></a>

<a href="profile.php"><i class="bi bi-person-circle text-warning m-2 icon-size"></i></a>
<a href="logout.php"><i class="bi bi-box-arrow-right text-danger m-2 icon-size"></i></a>

</div>
</nav>

<section class="statistics">
        <div class="booksDivider d-flex align-items-center my-3">
        </div>
        <div class="d-flex justify-content-between">
          <div class="bg-cstm rounded my-3 d-flex flex-column justify-content-between" style="width: 30%;">
            <p class="text-white text-center py-2">Total Of Your Books</p>
            <p class="text-white text-center fs-1 fw-bold"><?php echo $num; ?></p>
          </div>
          <div class="bg-cstm rounded my-3 d-flex flex-column justify-content-between" style="width: 30%;">
            <p class="text-white text-center py-2">Total of Books</p>
            <p class="text-white text-center fs-1 fw-bold"><?php echo $numall; ?></p>
          </div>
        
        </div>
      </section>
<h2 class="text-white m-4">ALL BOOKS 👇</h2>


</div>
<section class="d-flex justify-content-around flex-wrap gap-3 overflow-hidden my-3">
                <?php echo books(); ?>
            </section>


</div>
<!-- Modal -->




<!-- js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>