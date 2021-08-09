<?php

require __DIR__. '/db_connect.php';

// if(! isset($_SESSION)){
//     session_start();
// } 可以判斷require的檔案有沒重複啟用session

// 如果沒有啟用 session, 就不啟用
if(! isset($_SESSION)) {
    session_start();
}

