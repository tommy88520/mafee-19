<h2>

    <?php


    $name = 'Peter';
    $a = 66;
    $b = "22";
    $c = "hi";

    echo "$a 
    +
     $b";
    echo '<br>'; //中間可換行

    echo "$a + $b";
    echo '<br>'; //變數轉換成變數值

    echo '$a + $b';
    echo '<br>';

    echo "{$a}555";
    echo '<br>';

    echo "{$a}555";

    $a = "xyz\nabc\"def\'ghi\\<br>";//雙引號指不會跳脫單引號
    $b = 'xyz\nabc\"def\'ghi\\<br>';//單引號只會跳脫單引號跟島斜線
    echo $a;
    echo $b;






    ?>
</h2>