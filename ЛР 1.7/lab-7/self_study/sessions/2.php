<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2sessions</title>
</head>
<body>
    <form action="" method="POST">
        Имя пользователя: <input type="text" name="username" required><br><br>
        Пароль пользователя: <input type="text" name="paassword" required><br><br>
        <input type="submit" value="Войти">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Получение имени пользователя из формы
        $username = $_POST['username'];
        $password = $_POST['paassword'];
    
        // Установка переменной сессии
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        header('Location: 21.php');
        exit();
    }    
?>
</body>
</html>