<h2>
    <?php
//date_default_timezone_set這個設定只限定這個檔案 
    // date_default_timezone_set('Europe/Berlin');
    echo time(). '<br>';
    echo date("Y-m-d H:i:s"). '<br>';
    echo date("D N w"). '<br>';

    echo date("Y-m-d H:i:s", time()+40*24*60*60). '<br>';

    $t = strtotime('2021-09-06 08:00:00');

    echo date("Y-m-d H:i:s", $t). '<br>';



    ?>
</h2>
