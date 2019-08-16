<?php

session_start(); //啟動

if (! isset($_SESSION['my_session'])) {
    // 如果沒有設定
    $_SESSION['my_session'] = 1;
} else {
    $_SESSION['my_session'] ++;
}

echo $_SESSION['my_session'];