<?php

// require '__connect_db.php';
require __DIR__. '/__connect_db.php';
// __DIR__ 現在所在的資料夾
// 相當於引入此檔案 也可以用檔案內的變數

$stmt = $pdo->query("SELECT * FROM `address_book`");
// query()透過連線執行sql指令


$row = $stmt->fetch(); // 取得第一筆資料  
// $row = $stmt->fetchAll(); // 取得全部資料
print_r($row);

