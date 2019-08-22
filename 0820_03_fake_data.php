<?php
exit; // 直接終止
// die('---'); 結束之前想要echo什麼字串


require __DIR__. '/__connect_db.php';

for($i=1; $i<70; $i++) {
    // $pdo -> query("INSERT INTO `address_book`(`name`,`email` ,`birthday`, `mobile`, `create_at`) VALUES
    // ('陳小華{$i}', 'jhdsj@gmail.com', '1991-02-02', '0912777888', '2019-08-20 12:00:00')");


    $s = "INSERT INTO `address_book`
    -- 要用”雙引號“才可以放變數在裡面
    (`name`, `email`, `mobile`, `birthday`, `address`, `created_at`)
    -- `sid`因為有設定A_I會自動遞增,所以不用再放在迴圈中
    VALUES
    ('陳小華{$i}', 'jhdsj@gmail.com', '0912777888', '1991-02-02', '台中市', '2019-08-20 12:00:00') ";
    //    echo $s;
    //    break;
    $pdo->query($s);
}