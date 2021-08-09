<?php
include __DIR__ . '/partials/init.php';
$title = '資料列表';
//every page have 5 page 
$perPage = 5;
//用戶決定第幾頁，沒有給就是第一頁
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;


//總共有幾筆

$totalRows = $pdo->query("SELECT count(1) FROM address_book")->fetch(PDO::FETCH_NUM)[0];


// echo "$totalRows"; exit;
//總共有幾頁,才能決定分頁按鈕
$totalPages = ceil($totalRows / $perPage); // 正數是無條件進位
// echo "$totalRows, $totalPages"; exit;

//SELECT * FROM address_book ORDER BY sid DESC LIMIT 0,5
//SELECT * FROM address_book ORDER BY sid DESC LIMIT 5,5 依此類推
$sql = sprintf(
    "SELECT * FROM address_book ORDER BY sid DESC LIMIT %s, %s",
    ($page - 1) * $perPage,
    $perPage
);

$rows = $pdo->query($sql)
    ->fetchAll();





?>
<?php include __DIR__ . '/partials/html-head.php'; ?>
<?php include __DIR__ . '/partials/nav-bar.php'; ?>
<div class="container">
    <div class="row justify-content-end">
        <div class="col">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
    <!--                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>-->

                        <?php for($i=1; $i<=$totalPages; $i++): ?>
                        <li class="page-item">
                            <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                        </li>
                        <?php endfor; ?>

    <!--                    <li class="page-item"><a class="page-link" href="#">Next</a></li>-->
                    </ul>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">sid</th>
                        <th scope="col">name</th>
                        <th scope="col">email</th>
                        <th scope="col">mobile</th>
                        <th scope="col">birthday</th>
                        <th scope="col">address</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($rows as $r) : ?>
                        <tr>
                            <td><?= $r['sid'] ?></td>
                            <td><?= $r['name'] ?></td>
                            <td><?= $r['email'] ?></td>
                            <td><?= $r['mobile'] ?></td>
                            <td><?= $r['birthday'] ?></td>
                            <td><?= $r['address'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>

</div>
<?php include __DIR__ . '/partials/scripts.php'; ?>
<?php include __DIR__ . '/partials/html-foot.php'; ?>