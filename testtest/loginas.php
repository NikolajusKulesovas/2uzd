<?php
session_start();
   require_once 'connect.php';
    $username = $_POST['username'];
    $password = $_POST['password'];

    $check_user = mysqli_query($connect,"SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$password'");

    $_SESSION['message'] = 'success';
    header('Location: ./make_team.php');

?>

