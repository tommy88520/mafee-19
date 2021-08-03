<pre>
    
    <?php
    $str = '{"0":123,"name":"\u674e\u66c9\u660e\/\u5e25","age":36,"gender":"male","1":"hellow"}';
    
    $obj = json_decode($str);//轉換為php的object
    $ar = json_decode($str, true);//轉換為關聯式陣列
    
    echo '<br>----------<br>';
    
    print_r($obj);
    echo '<br>----------<br>';
    
    print_r($ar);
    echo '<br>----------<br>';
    
    echo $obj->name; //查看物件的屬性  因為這裡是object

    echo '<br>----------<br>';
    echo $ar['name'];// 陣列的元素值 這裡是陣列
    ?>
    
</pre>
