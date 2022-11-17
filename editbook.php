<?php 

include 'scripts.php';
include 'connection.php';

if(!isset($_SESSION['USER_ID'])){
    header("location:login.php");
}

$conn = $GLOBALS['conn'];
$ided = $_GET['editedbook'];
$sql = "SELECT * FROM `orders` WHERE bookid='$ided'";
$result = mysqli_query($conn,$sql);
$row = $result->fetch_assoc();
$bookid = $row['bookid'];
$bookname = $row['bookname'];
$bookauthor = $row['author'];
$price = $row['Price'];
$pic = $row['cover'];
$_SESSION['cover'] = $pic;
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


<div class="justify-content-center w-100 mt-5 mb-5">
<form data-parsley-validate enctype="multipart/form-data" action="" class="row w-25 m-auto bg-dark rounded p-2 d-flex flex-column justify-content-center" method="POST">
<h2 class="text-warning justify-content-center">EDIT BOOK</h2>

<input  name="edbookname" value="<?php echo $bookname;  ?>" type="text" placeholder="Enter Book Name" class=" form-controle my-2 rounded border-0" data-parsley-length="[6, 50]">
<input value="<?php echo $bookauthor;  ?>" name="edauthorname" type="text" placeholder="Enter Author Name"class=" form-controle my-2 rounded border-0" data-parsley-length="[6, 50]">
<input value="<?php echo $price;  ?>" name="edprice" type="text" placeholder="Enter Price" class=" form-controle my-2 rounded border-0" required data-parsley-type="digits">
<input name="img"type="file" value=""
       id="avatar" name="avatar"
       accept="image/png, image/jpeg" class="form-control form-control-sm" required >
<button name="editbk" class="form-controle my-2 btn btn-warning" type="submite">ADD</button>

</form>
</div>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<!-- JS FILE -->
<script src="scripts.js"></script>
<!-- Jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- parsely -->
<script src="parsley.js"></script>dy>
</body>
</html>