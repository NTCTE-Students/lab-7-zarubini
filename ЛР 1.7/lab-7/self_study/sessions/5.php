<?php 
    session_start();   
    if (!isset($_SESSION['first_visit_time'])) {
        $_SESSION['first_visit_time'] = date('m:d:y h:i:s');
	} else {
		$_SESSION['last_visit_time'] = date('m:d:y h:i:s');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        print('ПЕРВЫЙ РАЗ '. $_SESSION['first_visit_time'] . '<br>');
        print('ПОСЛЕДНИЙ РАЗ '. $_SESSION['last_visit_time'] . '<br>');
    ?>
</body>
</html>