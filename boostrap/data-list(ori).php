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

// 讓 $page 的值在安全的範圍
if ($page < 1) {
    header('Location: ?page=1');
    exit;
}
if ($page > $totalPages) {
    header('Location: ?page=' . $totalPages);
    exit;
}

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
<style>
    table tbody i.fas.fa-trash-alt {
        color: darkred;
    }
    table tbody i.fas.fa-trash-alt.ajaxDelete {
            color: darkorange;
            cursor: pointer;
        }
</style>
<div class="container">


    <div class="row" >
        <div class="col">
            <form action="data-list.php" class="form-inline my-2 my-lg-0 d-flex justify-content-end">
                <input class="form-control mr-sm-2" type="search" name="keyword" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </div>


    <div class="row">
        <div class="col">
            <nav aria-label="Page navigation example">
                <ul class="pagination d-flex justify-content-center">
                    <li class="page-item <?= $page <= 1 ? 'disabled' : '' ?>">
                        <a class="page-link" href="?page=<?= $page - 1 ?>">
                            <!-- href""後面可以接完整路徑 
                           http://localhost/mafee-19/boostrap/data-list.php?page=6#abcd
                        或是省略協定的部分
                        localhost/mafee-19/boostrap/data-list.php?page=6#abcd
                        或省略相同的主機
                        /mafee-19/boostrap/data-list.php?page=6#abcd
                        或只留query string(使用相同的路境(同一個檔案內))
                        ?page=2#abcd
                        甚至可以只留hash
                        #abcd(老師自己定義的)
                        -->
                            <i class="fas fa-arrow-circle-left"></i>
                        </a>
                    </li>

                    <?php for ($i = $page - 5; $i <= $page + 5; $i++) :
                        if ($i >= 1 and $i <= $totalPages) : ?>
                            <li class="page-item <?= $i == $page ? 'active' : '' ?>">
                                <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                            </li>
                    <?php endif;
                    endfor; ?>

                    <li class="page-item <?= $page >= $totalPages ? 'disabled' : '' ?>">
                        <a class="page-link" href="?page=<?= $page + 1 ?>">
                            <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col"><i class="fas fa-trash-alt"></i></th>
                        <th scope="col"><i class="fas fa-trash-alt"> ajax</i></th>
                        <th scope="col">sid</th>
                        <th scope="col">name</th>
                        <th scope="col">email</th>
                        <th scope="col">mobile</th>
                        <th scope="col">birthday</th>
                        <th scope="col">address</th>
                        <th scope="col"><i class="fas fa-edit"></i></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($rows as $r) : ?>
                        <tr data-sid="<?= $r['sid'] ?>">
                            <td>
                                <a href="data-delete.php?sid=<?= $r['sid'] ?>" onclick="return confirm('確定要刪除編號為 <?= $r['sid'] ?> 的資料嗎？')">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            </td>
                            <td>
                                <i class="fas fa-trash-alt ajaxDelete"></i>
                            </td>
                            <td><?= $r['sid'] ?></td>
                            <td><?= $r['name'] ?></td>
                            <td><?= $r['email'] ?></td>
                            <td><?= $r['mobile'] ?></td>
                            <td><?= $r['birthday'] ?></td>
                            <!--
                    <td><?= strip_tags($r['address']) ?></td>
                    -->
                            <td><?= htmlentities($r['address']) ?></td>
                            <td>
                                <a href="data-edit.php?sid=<?= $r['sid'] ?>">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>

</div>
<?php include __DIR__ . '/partials/scripts.php'; ?>
<script>
    const myTable = document.querySelector('table');

    myTable.addEventListener('click', function(event) {
        console.log(event.target);
        // 判斷有沒有點到橙色的垃圾筒
        if (event.target.classList.contains('ajaxDelete')) {
            console.log(event.target.closest('tr'));
            const tr = event.target.closest('tr');
            const sid = tr.getAttribute('data-sid');

            console.log(`tr.dataset.sid:`, tr.dataset.sid); // 也可以這樣拿

            if(confirm(`是否要刪除編號為 ${sid} 的資料？`)){
                fetch('data-delete-api.php?sid=' + sid)
                    .then(r=>r.json())
                    .then(obj=>{
                        if(obj.success){
                            tr.remove();  // 從 DOM 裡移除元素
                            // TODO: 1. 刷頁面, 2. 取得該頁的資料再呈現

                        } else {
                            alert(obj.error);
                        }
                    });
            }

        }
    });
</script>
<?php include __DIR__ . '/partials/html-foot.php'; ?>