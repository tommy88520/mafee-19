<h2>
    
     <?php
    
    
    $name = 'Peter';
    $a = 66;
    $b = "22";
    $c = "hi";
    
    echo $a + $b;
    echo '<br>';

    echo $a * $b;
    echo '<br>';

    echo $c + $b;
    echo '<br>';

    echo $c * $b;
    echo '<br>'; //這樣會報版 因為非數值

    echo intval($c) + intval($b); //intval 會把非數值轉換為整數
    echo '<br>';
    
    echo intval($c) * intval($b);
    echo '<br>';



    ?>
</h2>








