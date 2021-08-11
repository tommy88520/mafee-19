<pre>
<?php

// 上傳後的檔案要放在哪裡
$folder = __DIR__. '/imgs/';


// 如果有上傳檔案
if(! empty($_FILES)){

    if(move_uploaded_file(
        $_FILES['avatar']['tmp_name'],
        $folder. $_FILES['avatar']['name']
    )){
        echo 'OK';
    } else {
        echo 'move file error';
    }

} else {
    echo 'no files';
}


// var_dump($_FILES);
// 單一個檔案時
// $_FILES['avatar']['name']  // 上傳檔案的原來的檔名
/*
 array(1) {
  ["avatar"]=>
  array(5) {
    ["name"]=>
    string(51) "223262611_275947924339229_164572773490798598_n.jpeg"
    ["type"]=>
    string(10) "image/jpeg"
    ["tmp_name"]=>
    string(45) "/Applications/XAMPP/xamppfiles/temp/phpYbW59a"
    ["error"]=>
    int(0)
    ["size"]=>
    int(304572)
  }
}
 */
?>
</pre>
