<pre>
<?php

for($i=1; $i<10; $i++){
    $br[] = $i*$i;
    
}
array_push($br, 100, 101);

echo json_encode($br);


echo '----------<br>';
$ar = array(
    123,
    'name' => '李曉明/帥',
    'age' => 36,
    'gender' => 'male',
    'hellow',

);

echo json_encode($ar);

echo '<br>----------<br>';
echo json_encode($ar, JSON_UNESCAPED_UNICODE);//不要跳脫中文子

echo '<br>----------<br>';
echo json_encode($ar, JSON_UNESCAPED_SLASHES);//不要跳脫斜線
echo '<br>----------<br>';
echo json_encode($ar, JSON_UNESCAPED_SLASHES| JSON_UNESCAPED_UNICODE );//不要跳拖兩種



?>
</pre>