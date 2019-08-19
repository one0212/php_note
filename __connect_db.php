<?php

$db_host= 'localhost'; 
$db_name = 'mytest222'; // 資料庫名稱
$db_user = 'oneone'; // username
$db_pass = 'admin'; // password

$dsn = "mysql:host={$db_host};dbname={$db_name}";
// 哪個類型的資料庫


// 連線設定
$pdo_options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    // fetch關聯式陣列
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8 COLLATE utf8_unicode_ci"
];

$pdo = new PDO($dsn, $db_user, $db_pass, $pdo_options);



