<?php 

include 'scripts.php';
include 'connection.php';

if(!isset($_SESSION['USER_ID'])){
    header("location:login.php");
}


$conn = $GLOBALS['conn'];
$id = $_SESSION['USER_ID'];
$sql = "SELECT * FROM `userdata` WHERE id='$id'";
$result = mysqli_query($conn,$sql);
$row = $result->fetch_assoc();
$name = $row['name'];
$email = $row['email'];
$password = $row['password'];

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

<div>
<div class="">
<div class="justify-content-center w-100 mt-3 mb-5">
    
    <form id="signupform" class="row w-25 m-auto bg-dark rounded p-2 d-flex flex-column justify-content-center" action="scripts.php" method="POST">
        <h2 class="text-warning justify-content-center">EDIT PROFILE</h2>
        <input id="name" name="editedname" value="<?php echo $name; ?>" class=" form-controle my-2 rounded border-0" type="text" placeholder="Enter name" required>
        <input id="email" name="editedemail" value="<?php echo $email; ?>" class=" form-controle my-2 rounded border-0" type="email" placeholder="Enter email" required>
        <input id="password" name="editedpassword" value="<?php echo $password; ?>" class=" form-controle my-2 rounded border-0" type="Password" placeholder="Enter password" required>
        
        <button id="sub" name="save" class="form-controle my-2 btn btn-warning" type="submite">SAVE</button>
        <button class="form-controle my-2 btn btn-danger"> <a href="" class="text-white">  DELETE ACCOUNT !  </a></button>
    </form>


</div>

</div>
</div>
<!-- Modal -->




<!-- js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" ></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>