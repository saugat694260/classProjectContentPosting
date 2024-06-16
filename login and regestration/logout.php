<?php 
session_start();
include '.././phpFiles/connection.php';
setcookie('user_id','', 0, "/");
unset($_COOKIE['user_id']);
unset($_SESSION['user_id']);
session_destroy();
 header("location:./loginPage.php");


?>