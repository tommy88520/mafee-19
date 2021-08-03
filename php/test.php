<pre>
    <?php
    //  $ar2 = array();
    
     for ($i = 1; $i < 10; $i++) {
         $ar1[] = $i * $i;
         array_push($ar1, $i + $i);
     }
     echo 'first';
     print_r($ar1);
     echo '<br>';
     echo 'second';
     print_r($ar1);
     
     ?>
</pre>