<?php
//設定cookie要在所有html之前
//其實是設定response headers
    setcookie('my_cookie', '1');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<?= isset($_COOKIE['my_cookie']) ? isset($_COOKIE['my_cookie']) : '' ?>
</body>
</html>