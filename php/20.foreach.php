<pre>
<?php

for($i=1; $i<10; $i++){
    $br[] = $i*$i;
    
}
array_push($br, 100, 101);
foreach ($br as $v){
    echo " $v <br>";
}

echo '<br>----------<br>';

$ar = array(
    123,
    'name' => 'David',
    'age' => 36,
    'gender' => 'male',
    'hellow',

);
foreach ($ar as $k=>$v){
    echo " $k => $v <br>";

}
echo '----------<br>';
echo count($ar);
?>
</pre>