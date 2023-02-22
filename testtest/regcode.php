<?php
session_start();
   require_once 'connect.php';
    $username = $_POST['username'];
    $password = $_POST['password'];

    $check_user = mysqli_query($connect,"INSERT INTO `users`(`id`, `username`, `password`) VALUES (NULL,'$username','$password')");

    $_SESSION['message'] = 'success';
    header('Location: ./login');

?>

