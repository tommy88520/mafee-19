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
?>
<?php include __DIR__. '/partials/html-head.php'; ?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <?php foreach($tree as $c1):  ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#<?= $c1['sid'] ?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?= $c1['name'] ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php foreach($c1['nodes'] as $c2):  ?>
                        <a class="dropdown-item" href="#<?= $c2['sid'] ?>"><?= $c2['name'] ?></a>
                        <?php endforeach;  ?>
                    </div>
                </li>

            <?php endforeach;  ?>
        </ul>

    </div>
    </div>
</nav>


<div class="container">
    <h2>Hello Cate</h2>
</div>
<?php include __DIR__. '/partials/scripts.php'; ?>
<?php include __DIR__. '/partials/html-foot.php'; ?>
