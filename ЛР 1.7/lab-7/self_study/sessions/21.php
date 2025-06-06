<?php

session_start();
if (!isset($_SESSION['username'])) {
    // Если пользователь не авторизован, перенаправление на страницу входа
    header('Location: 2.php');
    exit(); }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2.1session</title>
</head>
<body>
   Ку 
   <?php print($_SESSION['username']); ?>

</body>
</html>