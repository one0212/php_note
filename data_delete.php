<?php
require __DIR__. '/__connect_db.php';

$sid = isset($_GET['sid']) ? intval($_GET['sid']) : 0;

if(! empty($sid)) {
    $sql = "DELETE FROM `address_book` WHERE `sid`= $sid";
    // where後面輸入第幾筆, 如果where後面是1 則資料表會全刪
    $pdo->query($sql);
}

header('Location: '. $_SERVER['HTTP_REFERER']);