<?php

// require '__connect_db.php';
require __DIR__. '/__connect_db.php';

$stmt = $pdo->query("SELECT * FROM `address_book`");


// 如果用for迴圈拿到false就不繼續執行
while($row = $stmt->fetch()) {
    echo "{$row['name']}  {$row['email']} <br>";
}
