<?php
date_default_timezone_get('Asia/Taipei');
// 設定時區

echo time().'<br>';

echo date("Y-m-d H:i:s"). '<br>';
// 顯示當前時間
echo date("Y-m-d", time()+30*24*60*60). '<br>';
// 30天後的時間
echo date("Y-m-d", strtotime('+30 days')). '<br>';
// strtotime string-to-time
echo date("Y-m-d", strtotime('+2 months')). '<br>';
echo date("Y-m-d", strtotime('2019/8/2')). '<br>';
