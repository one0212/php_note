<?php
session_start();
// 因預設get方式獲取所以跑到表單的method才會執行以下判斷

$accounts = [
    'one' => '00',
    'one1' => '01',
    'one2' => '02',
    'one3' => '03',
    'one4' => '04',
];
// 沒有使用資料庫的方式

if(isset($_POST['account'])){
// 判斷表單內account有沒有值

    if(isset($accounts[$_POST['account']])){
        // $accounts[$_POST['account']] 輸入的帳號丟到陣列中, 取得對應到密碼 => 判斷密碼是否有值
        // 有的話代表帳號是正確的
        if($_POST['password']==$accounts[$_POST['account']]){
            // 密碼配對  輸入進來的密碼 == 儲存在陣列中的密碼
            $_SESSION['user'] = $_POST['account'];
            // 如果密碼正確才將帳號放入session中
        }
    }


    // if($_POST['account']=='one' and $POST['password']=='1234')
    // // 找到帳號密碼相符合 
    //  {
    //     $_SESSION['user'] = $_POST['account'];
    //     // 將帳號設置給session
    // }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php if (isset($_SESSION['user'])): ?>
    <h2><?= $_SESSION['user']?> , 您好</h2>
    <p><a href="0816_07_logout.php">登出</a></p>

<?php else: ?>
<!-- 如果帳密不符合則繼續停留在表單上 -->
    <form action="" method="post"> 
    <!-- 傳表單給自己所以不用action -->
        <input type="text" name="account" placeholder="帳號"><br>
        <input type="password" name="password" placeholder="密碼"><br>
        <input type="submit">
    </form>
<?php endif; ?>
</body>
</html>