<?php
include 'scripts.php';
include 'connection.php';

session_start();
unset($_SESSION['USER_ID']);


header('location: index.php');

die();

