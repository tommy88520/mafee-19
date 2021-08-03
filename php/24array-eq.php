<h3>
<?php
$ar = array(
    'name' => '李小明',
    'age' => 23,
    'gender' => '男生',
);
$ar2 = $ar;  // 複製新的陣列再指定 (設定值) , set by value
$ar2['name'] = '陳小華';

echo json_encode($ar, JSON_UNESCAPED_UNICODE);
echo '<br>------------<br>';
echo json_encode($ar2, JSON_UNESCAPED_UNICODE);
echo '<br>------------<br>';

$ar3 = &$ar;  // 設定位址, set by address
$ar3['name'] = '許大功';

echo json_encode($ar, JSON_UNESCAPED_UNICODE);
echo '<br>------------<br>';
echo json_encode($ar3, JSON_UNESCAPED_UNICODE);
echo '<br>------------<br>';
?>
</h3>