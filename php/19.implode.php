<pre>
<?php

for($i=1; $i<10; $i++){
    $br[] = $i*$i;
    // array_push($br, 100, 101);

}
print_r($br);
echo '<br>';

array_push($br, 100, 101);


echo implode(',', $br);  //將陣列接成字串
echo '<br>';
//echo $br; // 不要直接將陣列轉換為字串


$str = '1-3-5-7-15';

$ar = explode('-', $str); //將字串切成陣列

print_r($ar);
?>
</pre>