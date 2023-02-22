<?php
session_start();
   require_once 'connect.php';
    $teamname = $_POST['teamname'];
    $pilotfirst = $_POST['pilotfirst'];
    $pilotsecond = $_POST['pilotsecond'];
    $money = $_POST['money'];
    $boss = $_POST['boss'];
    $team_start = $_POST['team_start'];
    

    $result = mysqli_query($connect, "INSERT INTO `komanda`(`id`, `pavadinimas`, `pirmas_pilotas`, `antras_pilotas`, `biudzetas`, `vadovas`, `ikurimo_data`) VALUES (NULL, '$teamname','$pilotfirst','$pilotsecond','$money','$boss', '$team_start')");
    
    $_SESSION['message'] = 'ikelta';
    header('Location: ./index.php');

?>

