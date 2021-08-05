<?php
session_start();  // 啟用 session

if(! isset($_SESSION['num'])){
    $_SESSION['num'] = 1;
} else {
    $_SESSION['num'] ++;
}
//unset($_SESSION['num']); //刪掉某個session變數
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?= $_SESSION['num'] ?>
</body>
</html>