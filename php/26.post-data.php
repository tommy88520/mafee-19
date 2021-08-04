
<?php

// echo $_GET['a'] ?? '';如果沒設定值 就是預設空字串

//設定回應給用用戶端的檔頭  對應requst.rest
header('Content-Type: application/json');

$a = isset($_POST['a']) ? intval($_POST['a']) : 0 ;



$b = isset($_POST['b']) ? intval($_POST['b']) : 0 ;

echo json_encode([
    'postData' => $_POST,
    'result' => $a +$b,
]);
// echo $a + $b;

