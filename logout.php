<?php
include 'scripts.php';
include 'connection.php';

session_start();
unset($_SESSION['USER_ID']);
// unset($_SESSION['USER_EM']);
// unset($_SESSION['PW']);

header('location: index.php');

die();

