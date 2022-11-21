<?php
include "connection.php";
session_start();
$con = $GLOBALS['conn'];
$id = $_SESSION['USER_ID'];


$req = "DELETE FROM `orders` WHERE userId='$id'";
$res=mysqli_query($con,$req);



$sql = "DELETE FROM `userdata` WHERE id='$id'";
$result = mysqli_query($con,$sql);

header('location: logout.php');
