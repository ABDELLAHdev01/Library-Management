<?php
session_start();
include('connection.php');

$currentname = "";
$currentemail ="";
$currnetpw = "";

$msg = "";

if(isset($_POST['signup']))        signup();
if(isset($_POST['login']))               signin();   
if(isset($_POST['save']))               edit();   



function signup(){
    // put inputs on variabls
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    //globaling conn
    $conn = $GLOBALS['conn'];
    //inserting the data
    $sql = "SELECT count(*) FROM userdata WHERE email = '$email'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    if($row['count(*)'] == 1){
 
     $_SESSION['dejakayn'] = "This email already exist";
     header('location: signup.php');

    }
 else{
    $sql = "INSERT INTO userdata (`name`, `email`, `password`) VALUES ('$name','$email','$password')";
    $result = mysqli_query($conn,$sql);
    //going to login after finishing
    header('location: login.php');

}
}



function signin(){
    //globaling conn
    $conn = $GLOBALS['conn'];
    // login inputs on variabls
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM `userdata` WHERE `email`= '$email' && `password`='$password'";
    $result = mysqli_query($conn,$sql);
    // checking if he select
    $num = mysqli_num_rows($result);
    if($num>0){
        
    $row = $result->fetch_assoc();
    $_SESSION['USER_ID']=$row['id'];
    $_SESSION['USER_NAME']=$row['name'];
    $_SESSION['USER_EMAIL']=$row['email'];
    $_SESSION['USER_PASSWORD']=$row['password'];
    
    header('location: dashboard.php');
    }else {
        $_SESSION['message'] = "Insert a valid data!";
        header('location: login.php');
        
    }


}

function edit(){
    $conn = $GLOBALS['conn'];

    $editedemail = $_POST['editedemail'];
    $editedpassword = $_POST['editedpassword'];
    $editedname = $_POST['editedname'];
    $id = $_SESSION['USER_ID'];
    $sql = "UPDATE `userdata` SET `name`='$editedname',`email`='$editedemail',`password`='$editedpassword' WHERE id='$id'";
    $result = mysqli_query($conn,$sql);
    header('location: dashboard.php');


}
function showbooks(){
    $conn = $GLOBALS['conn'];
    $id = $_SESSION['USER_ID'] ;
    $sql = "SELECT * FROM `orders` WHERE `userId`= '$id'";
    $result = mysqli_query($conn,$sql);
    while($row = $result->fetch_assoc()){
        $bookname = $row['bookname'];
        $bookauthor = $row['author'];


        echo '
        <button class="">
        <div class="card">
        <img src="img/1.jpg" alt="Avatar" >
        <div class="container">
          <h4><b>'.$bookname.'</b></h4>
          <p>'.$bookauthor.'</p>
        </div>
      </div>
      <i class="bi bi-pencil-square"></i>
      <i class="bi bi-trash3-fill"></i>
      </button>';}


}