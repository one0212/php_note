<?php
if(! isset($_SESSION)){
    session_start();
}
if(! isset($_SESSION['loginUser'])){
    header('Location: 0820_04_page2.php');
    exit;
}