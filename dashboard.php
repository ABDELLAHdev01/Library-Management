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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->

    <title>Wise Library</title>
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
<div class="d-flex">
<div class="col-11">
<h4 class="text-white m-5">👋 Welcome back <span class="text-warning"> <?php echo $name; ?> </span></h4>
</div>
<div >
    <br>
   <a href="adding.php"> <button class="btn btn-warning" >Add Book</button></a>
</div>
</div>
<?php if (isset($_SESSION['message'])): ?>
				<div class="alert alert-success alert-dismissible fade show">
				<strong>Success !</strong>
					<?php 
						echo $_SESSION['message']; 
						unset($_SESSION['message']);
					?>
					<button type="button" class="btn-close" data-bs-dismiss="alert"></span>
				</div>
			<?php endif ?>
            
<table class="table table-dark container">
  <thead>
    <tr>
      <th class="text-warning" scope="col">Cover</th>
      <th class="text-warning" scope="col">Book Name</th>
      <th class="text-warning" scope="col">Author Name</th>
      <th class="text-warning" scope="col">Price</th>
      <th class="text-warning" scope="col">Edit & Remove</th>
    </tr>
  </thead>
  <tbody>
    <?php echo showbooks(); ?>
  </tbody>
</table>
<!-- Modal -->




<!-- js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>