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


$countuser = "SELECT * FROM `userdata`";
$resdata = mysqli_query($conn, $countuser);
$numallusers = mysqli_num_rows($resdata );


$sumreq = "SELECT SUM(Price) as priceSum FROM orders";
$ressum  = mysqli_query($conn,$sumreq);
$prcSum =$ressum->fetch_assoc(); 
$resPriceSum=$prcSum['priceSum'];
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/sketchy/bootstrap.min.css" integrity="sha384-RxqHG2ilm4r6aFRpGmBbGTjsqwfqHOKy1ArsMhHusnRO47jcGqpIQqlQK/kmGy9R" crossorigin="anonymous"><!-- JavaScript Bundle with Popper -->
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

<div class="row mt-5">
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="bg-warning card shadow border-start-primary py-2">
                                <div class="card-body ">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-primary fw-bold text-xs mb-1"><span>Your Books</span></div>
                                            <div class="text-dark fw-bold h5 mb-0"><span><?php echo $num; ?></span></div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-calendar fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="bg-warning card shadow border-start-success py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-primary fw-bold text-xs mb-1"><span>All Books</span></div>
                                            <div class="text-dark fw-bold h5 mb-0"><span><?php echo $numall; ?></span></div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-dollar-sign fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="bg-warning card shadow border-start-success py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-primary fw-bold text-xs mb-1"><span>Total Users</span></div>
                                            <div class="text-dark fw-bold h5 mb-0"><span><?php echo $numallusers; ?></span></div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-dollar-sign fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="bg-warning card shadow border-start-warning py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-primary fw-bold text-xs mb-1"><span>TOTAL PRICE</span></div>
                                            <div class="text-dark fw-bold h5 mb-0"><span><?php echo $resPriceSum ; ?>DH</span></div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-comments fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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