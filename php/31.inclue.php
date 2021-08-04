<?php
include './07.query-string.php';//包含某個php黨  會發出warning

echo '<br>';
require './07.query-string.php';//如果沒有資源的時候會發出error
