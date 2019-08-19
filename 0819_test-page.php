<?php

// require '__connect_db.php';
require __DIR__. '/__connect_db.php';

$stmt = $pdo->query("SELECT * FROM `address_book`");

$row = $stmt->fetch(); // 取得第一筆資料  
$row = $stmt->fetchAll(); // 取得全部資料
print_r($row);

