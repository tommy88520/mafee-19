<?php

require __DIR__. '/db_connect.php';


// 如果沒有啟用 session, 就然它啟用
if(! isset($_SESSION)) {
    session_start();
}

