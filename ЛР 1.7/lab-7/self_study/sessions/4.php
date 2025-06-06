<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // проверяет что тыкнул пользователь
    if (isset($_POST['tocart'])) {
        // перебирает весь массив пост
        foreach ($_POST as $key => $value) {
            // если есть ключ с товар_ кладет его в корзину
            if (str_contains($key, 'tovar_')) {
                if (isset( $_SESSION['cart'])) {
                     $_SESSION['cart'][] = $value;
                } else {
                     $_SESSION['cart'] = [];
                }
            }
        }
    } elseif (isset($_POST['delcarl'])) {
        // удаление товара с совпадением 
        $del_arr = []; #массив в котором выбранные товары для удаления
        foreach ($_POST as $key => $value) {
            if (str_contains($key, 'tovar_')) {
                $del_arr[] = $value;
            }
        }
        // удаляет все совпадения с del_arr 
        $_SESSION['cart'] = array_diff( $_SESSION['cart'], $del_arr);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4session</title>
</head>
<body>
    <h1>ТОВАР </h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        товар1 
        <input type="checkbox" name="tovar_1" value="товар1"> <br>
        товар2 
        <input type="checkbox" name="tovar_2" value="товар3"> <br>
        товар3 
        <input type="checkbox" name="tovar_3" value="товар3"> <br>
        <br>
        <input type="submit" name="tocart" value="в корину">
        <input type="submit" name="delcarl" value="удалить из корзины">
    </form>
    <br>
    <a href="41.php">>>в корзину</a>
</body>
</html>