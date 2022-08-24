<?php

session_start();

if (isset($_SESSION['user'])) {
    if (!$_SESSION['user'] === 'patrick') {
        header ('location: resgate.php');
        exit;
    }
} else {
    header ('location: home.php');
    exit;
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Olá</h1>
    <a href="logout.php">Sair</a>
</body>
</html>