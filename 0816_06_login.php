<?php
session_start();
// 因瀏覽器預設get方式獲取所以跑到表單的method才會執行以下判斷

if(isset($_POST['account'])){
// 判斷表單內是否有account欄位

    if($_POST['account']=='one' and $POST['password']=='1234')
    // 比對帳號密碼是否正確, 正確才設定session
     {
        $_SESSION['user'] = $_POST['account'];
        // 將帳號設置給session
        // 進入到這表示已經有成功登入
    }

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
<!-- 判斷是否有設定$_SESSION['user'] -->
    <h2><?= $_SESSION['user']?> , 您好</h2>
    <!-- 有設定則發送問候語 -->
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