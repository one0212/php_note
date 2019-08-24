<?php
session_start();


unset($_SESSION['loginUser']);
// 僅登出,其他功能保留 清掉session變數

if(! empty($_SERVER['HTTP_REFERER'])){
    header('Location: '. $_SERVER['HTTP_REFERER']);
    // 設定http的header
} else {
header('Location: 0820_04_page2.php');
// location為拜訪完轉向哪個頁面顯示
}