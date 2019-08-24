<?php

$db_host= 'localhost'; 
$db_name = 'mytest222'; // 資料庫名稱
$db_user = 'oneone'; // username
$db_pass = 'admin'; // password
// 變數為自訂 連線方式多為$db_較清楚


$dsn = "mysql:host={$db_host};dbname={$db_name}";
// $dsn設置哪個類型的資料庫 主機在哪裡 資料庫名稱是什麼
// 連線時將$dsn放進一個參數


// 連線設定
$pdo_options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    // fetch關聯式陣列
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8 COLLATE utf8_unicode_ci"
];

$pdo = new PDO($dsn, $db_user, $db_pass, $pdo_options);
// $pdo表連線的物件 PDO為一個類型 php data objects

if(!isset($_SESSION)){
    session_start();
}

