<?php 
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    session_unset();
    session_destroy();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3session</title>
</head>
<body>
    <?php 
        print("<h1>ПРИВЕТ {$_SESSION['username']}</h1> ");
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <!-- Ваше имя   <input type="text" name="username"> -->
        <input type="submit" value="Выйти?">
    </form>

</body>
</html>