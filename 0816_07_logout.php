<?php
session_start();
// session_destroy() 
// 

unset($_SESSION['user']);
// 僅登出,其他功能保留 清掉session變數

unset($_SESSION['user']);
if(! empty($_SERVER['HTTP_REFERER'])){
    // $_SERVER 可以拿到從哪一個頁面轉過來此頁面的
    // Request Headers的Referer會顯示從哪一個頁面過來
    // empty() 用來判斷裡面是否為空值 空字串 空陣列 0 結果會拿到true
    header('Location: '. $_SERVER['HTTP_REFERER']);  // 如果有值就回去08檔案
    // 設定http的header
} else {
header('Location: 0816_06_login.php'); // 沒有值則轉向登入頁面
// location為拜訪完轉向哪個頁面顯示
}