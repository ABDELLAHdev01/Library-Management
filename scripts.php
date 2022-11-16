<?php
session_start();
include('connection.php');

if(isset($_POST['signup']))        signup();
if(isset($_POST['login']))               signin();   
if(isset($_POST['save']))               edit();   
if(isset($_POST['add']))               addbook();  
if(isset($_GET['deletebook']))      deletebook();
if(isset($_POST['editbk']))      editbook();




function signup(){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $conn = $GLOBALS['conn'];
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
    $_SESSION['message'] = "Profile updated !";

    header('location: dashboard.php');


}
function showbooks(){
    $conn = $GLOBALS['conn'];
    $id = $_SESSION['USER_ID'] ;
    $sql = "SELECT * FROM `orders` WHERE `userId`= '$id'";
    $result = mysqli_query($conn,$sql);
    while($row = $result->fetch_assoc()){
        $bookid = $row['bookid'];
        $bookname = $row['bookname'];
        $bookauthor = $row['author'];
        $price = $row['Price'];
        $pic = $row['cover'];


        echo '
        <tr>
      <th scope="row">'.$bookid.'</th>
      <td ><img style="height:7rem" src="img/'.$pic.'"></td>
      <td>'.$bookname.'</td>
      <td>'.$bookauthor.'</td>
      <td>'.$price.'</td>
      <td> <a href="editbook.php?editedbook='.$bookid.'"> <i class="bi bi-pencil-square text-warning"></i></a> <a  href="dashboard.php?deletebook='.$bookid.'"><i class="bi bi-trash3-fill text-danger"></i></a></td>

    </tr>';}


}
function addbook(){
    $conn = $GLOBALS['conn'];
    $id = $_SESSION['USER_ID'] ;

    $bookname = $_POST['bookname'];
    $authorname = $_POST['authorname'];
    $price = $_POST['price'];
    $img = $_POST['img'];
    $photo = $_FILES["img"]["name"];
    $target= "img/".$photo;
    $sourcePath = $_FILES['img']['tmp_name'];
    move_uploaded_file($sourcePath,$target);
    
    $sql = "INSERT INTO `orders`(`bookname`, `author`, `Price`, `cover`, `userId`) VALUES ('$bookname','$authorname','$price','$photo','$id')";
    $result = mysqli_query($conn,$sql);
    $_SESSION['message'] = "Book has been add!";

    header('location: dashboard.php');




}

function deletebook()
{
    $con = $GLOBALS['conn'];
      $iddel = $_GET['deletebook'];
      $sql = "DELETE FROM `orders` WHERE bookid='$iddel'";
      $result = mysqli_query($con,$sql);

      $_SESSION['message'] = "Book has been deleted!";
      
    //   header('location: dashboard.php');
}



function editbook(){
 $con = $GLOBALS['conn'];
   $ided = $_GET['editedbook'];



    $bookname = $_POST['edbookname'];
    $authorname = $_POST['edauthorname'];
    $price = $_POST['edprice'];
    $img = $_POST['img'];
    $photo = $_FILES["img"]["name"];
    $target= "img/".$photo;
    $sourcePath = $_FILES['img']['tmp_name'];
    move_uploaded_file($sourcePath,$target);
    
    $sql = "UPDATE `orders` SET `bookname`='$bookname',`author`='$authorname',`Price`='$price', `cover`='$photo' WHERE bookid='$ided'";
    $result = mysqli_query($con,$sql);
    $_SESSION['message'] = "Book has been edited!";

    header('location: dashboard.php');

}

function fillform(){
    $conn = $GLOBALS['conn'];
    $ided = $_GET['editedbook'];
    $sql = "SELECT * FROM `orders` WHERE userId='$ided'";
    $result = mysqli_query($conn,$sql);
    $row = $result->fetch_assoc();
    $bookid = $row['bookid'];
    $bookname = $row['bookname'];
    $bookauthor = $row['author'];
    $price = $row['Price'];
    $pic = $row['cover'];   
}


function books(){
    $conn = $GLOBALS['conn'];
    $sql = "SELECT * FROM `orders`";
    $result = mysqli_query($conn,$sql);
    while($row = $result->fetch_assoc()){
        $bookid = $row['bookid'];
        $bookname = $row['bookname'];
        $bookauthor = $row['author'];
        $price = $row['Price'];
        $pic = $row['cover'];


        echo '
        <div class="lg-col-3" style="width: 14rem;" data-bs-toggle="modal" data-bs-target="#bookInfo">
        <img class="img-thumbnail" src="img/'.$pic.'" alt="Crime-And-Punishment">
    </div>




        ';
} }