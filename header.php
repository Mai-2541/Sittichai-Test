<?php
ob_start();
session_start();

date_default_timezone_set("Asia/Bangkok");
if(isset($_POST['login'])){
    $email = $_POST['sittichai.sa@rmutsvmail.com'];
    $password = $_POST['1122334455'];

    $_SESSION['user_id'] = 1;
    $_SESSION['user_level'] = 1; 
}

if(isset($_POST['logout'])){
  session_destroy();
  header('location:index.php');
}


$sess_user = $_SESSION["user_id"];
$sess_level = $_SESSION["user_level"]
?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sittichai samunual</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- style and google font -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- sweetalert -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

