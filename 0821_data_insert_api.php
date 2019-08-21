<?php
require __DIR__. '/__connect_db.php';


// 如果沒有輸入欄位就離開
if (empty($_POST['name'])) {
    exit;
}

$sql = "INSERT INTO `address_book`(`name`, `birthday`, `email`, `mobile`, `address`, `create_at`) VALUES (?, ?, ?, ?, ?, NOW())";

$stmt = $pdo->prepare($sql);


$stmt->execute([
        $_POST['name'],
        $_POST['birthday'],
        $_POST['email'],
        $_POST['mobile'],
        $_POST['address'],

]);

echo $stmt->rowCount();




