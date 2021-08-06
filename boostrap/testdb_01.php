<?php

require __DIR__. '/partials/init.php';

$stmt = $pdo->query("SELECT * FROM address_book LIMIT 10");

echo json_encode( $stmt->fetch(), JSON_UNESCAPED_UNICODE );


// fetchAll() 全部都拿出來
// echo json_encode( $stmt->fetchAll(PDO::FETCH_ASSOC), JSON_UNESCAPED_UNICODE );
