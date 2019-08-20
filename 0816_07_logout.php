<?php
session_start();
// session_destroy() 
// 

unset($_SESSION['user']);
// 僅登出,其他功能保留 清掉session變數

unset($_SESSION['user']);
if(! empty($_SERVER['HTTP_REFERER'])){
    header('Location: '. $_SERVER['HTTP_REFERER']);
    // 設定http的header
} else {
header('Location: 0816_06_login.php');
// location為拜訪完轉向哪個頁面顯示
}