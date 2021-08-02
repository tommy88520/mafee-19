<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div>
    <?php
    
    define("MY_CONSTANT", 234); //自訂常數

    echo MY_CONSTANT;
    echo '<br>';


    echo true;//true會在頁面上會顯示1
    echo '<br>';

    echo false;
    echo '<br>';

    
    echo __DIR__;  // 該 php 所在的實體資料夾
    echo '<br>';
    echo __FILE__; // 該 php 所在的路徑(包含檔名)
    echo '<br>';
    echo __LINE__;
    echo '<br>';
    echo PHP_VERSION;
    echo '<br>';
    
    ?>
</div>
</body>
</html>