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
<?php
$age = isset($_GET['age']) ? intval($_GET['age']) : 0;

if($age >= 18){
?>
    <img src="./img/gettyimages-955480082_web.jpeg" alt="">
<?php
} else {
?>
    <img src="./img/_111434467_gettyimages-1143489763.jpeg" alt="">
<?php
}
?>
</body>
</html>