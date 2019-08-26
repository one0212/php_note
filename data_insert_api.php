<?php
require __DIR__. '/__connect_db.php';

$result = [
    'success' => false,
    'code' => 400,
    'info' =>'沒有輸入姓名',
    'post' => $_POST,
];



// 如果沒有輸入欄位資料就離開
if (empty($_POST['name'])) {
    echo json_encode($result, JSON_UNESCAPED_UNICODE);
    exit;
}
// 用戶沒有填值：空字串 如果用isset會判斷會是true
// empty如果為空值結果就是false

/* 方法1
$sql = sprintf("INSERT INTO `address_book`(
            `name`, `email`, `mobile`, `birthday`, `address`, `created_at`
            ) VALUES (%s, %s, %s, %s, %s, NOW())",
            如果姓名出現''則會截斷 '%s'     !!!!所以仍建議prepare方式
            
    使用quote 則可以自動將s%加上單引號 則不會有截斷問題  如果字串本身有單引號 則會進行跳脫的動作 
    $pdo->quote($_POST['name']),
    $pdo->quote($_POST['email']),
    $pdo->quote($_POST['mobile']),
    $pdo->quote($_POST['birthday']),
    $pdo->quote($_POST['address'])
    // 最後一個不用加逗號
);

使用quote優點 可以看到完整組出sql的的樣子
echo $sql;
$stmt = $pdo->query($sql);
*/

// TODO: 檢查必填欄位, 欄位值的格式

// 方法2
$sql = "INSERT INTO `address_book`(`name`, `birthday`, `email`, `mobile`, `address`, `create_at`)
VALUES (?, ?, ?, ?, ?, NOW())";
// NOW()為sql的function 會拿到執行sql的時間

$stmt = $pdo->prepare($sql);
// prepare連線資料庫後準備sql樣板
// 也會檢查語法


$stmt->execute([
        $_POST['name'],
        $_POST['birthday'],
        $_POST['email'],
        $_POST['mobile'],
        $_POST['address'],
        // 對照幾個問號填值
]);
// execute真正執行sql 會把值替換進prepare($sql) 內容物為array

if($stmt -> rowCount()==1){
    // $stmt會產生一個rowCount方法 ：新增了幾筆
    $result['success'] = true;
    $result['code'] = 200;
    $result['info'] = '新增成功';
} else {
    $result['code'] = 420;
    $result['info'] = '新增失敗';
}

echo json_encode($result, JSON_UNESCAPED_UNICODE);
// encode:後端用json格式傳到前端




