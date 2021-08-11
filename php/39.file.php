<pre>
<?php


var_dump($_FILES);

// 多個檔案時
// $_FILES['avatar']['name'][0]  // 上傳檔案的原來的檔名第一個
// $_FILES['avatar']['name'][1]  // 上傳檔案的原來的檔名第二個
/*
array(1) {
  ["avatar"]=>
  array(5) {
    ["name"]=>
    array(2) {
      [0]=>
      string(20) "E8PeSqeVkAA49Of.jpeg"
      [1]=>
      string(51) "223262611_275947924339229_164572773490798598_n.jpeg"
    }
    ["type"]=>
    array(2) {
      [0]=>
      string(10) "image/jpeg"
      [1]=>
      string(10) "image/jpeg"
    }
    ["tmp_name"]=>
    array(2) {
      [0]=>
      string(45) "/Applications/XAMPP/xamppfiles/temp/phpPuwkSZ"
      [1]=>
      string(45) "/Applications/XAMPP/xamppfiles/temp/phpIYBTFz"
    }
    ["error"]=>
    array(2) {
      [0]=>
      int(0)
      [1]=>
      int(0)
    }
    ["size"]=>
    array(2) {
      [0]=>
      int(90437)
      [1]=>
      int(304572)
    }
  }
}
 */
?>
</pre>
