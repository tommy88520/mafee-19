<?php
include __DIR__. '/partials/init.php';

$sql = "SELECT * FROM `categories` ORDER BY `parent_sid`, `sequence`";
$rows = $pdo->query($sql)->fetchAll();

$dict = [];
foreach($rows as &$r){
    $dict[$r['sid']] = $r;
}

$tree = [];
foreach($dict as $sid => $item){
    if($item['parent_sid']==0){
        $tree[] = &$dict[$sid];
    } else {
        // 不是第一層，就一定會有上一層
        $dict[$item['parent_sid']]['nodes'][] = &$dict[$sid];
    }
}

echo json_encode($tree, JSON_UNESCAPED_UNICODE);

// 台灣地址 JSON
// https://gist.github.com/abc873693/2804e64324eaaf26515281710e1792df
