
<?php

// echo $_GET['a'] ?? '';如果沒設定值 就是預設空字串

$a = isset($_GET['a']) ? intval($_GET['a']) : 0 ;



$b = isset($_GET['b']) ? intval($_GET['b']) : 0 ;


echo $a + $b;

