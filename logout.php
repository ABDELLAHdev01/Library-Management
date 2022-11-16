<?php
include 'scripts.php';
include 'connection.php';

session_start();
unset($_SESSION['USER_ID']);
unset($_SESSION['USER_NAME']);
unset($_SESSION['USER_EMAIL']);
unset($_SESSION['USER_PASSWORD']);

header('location: login.php');

die();

