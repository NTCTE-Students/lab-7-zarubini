<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>КОРЗИНА</h1>
    <?php
        session_start();
        foreach ($_SESSION['cart'] as $i) {
            print($i . '<br>');
        }
    ?>
</body>
</html>