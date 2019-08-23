<?php
require __DIR__. '/__connect_db.php';

$result = [
    'success' => false,
    'code' => 400,
    'info' =>'資料欄位不足',
    'post' => $_POST,
];



// 如果沒有輸入欄位就離開
if (empty($_POST['email']) or empty($_POST['password'])) {
    echo json_encode($result, JSON_UNESCAPED_UNICODE);
    exit;
}

/*
$sql = sprintf("INSERT INTO `address_book`(
            `name`, `email`, `mobile`, `birthday`, `address`, `created_at`
            ) VALUES (%s, %s, %s, %s, %s, NOW())",
            
            需用quote 如果姓名出現''則會截斷 '%s'
    $pdo->quote($_POST['name']),
    $pdo->quote($_POST['email']),
    $pdo->quote($_POST['mobile']),
    $pdo->quote($_POST['birthday']),
    $pdo->quote($_POST['address'])
    // 最後一個不用加逗號
);
echo $sql;
$stmt = $pdo->query($sql);
*/

// TODO: 檢查必填欄位, 欄位值的格式


$sql = "SELECT `id`, `email`, `nickname` FROM `members` WHERE `email`=? AND `password`=SHA1(?)";

$stmt = $pdo->prepare($sql);


$stmt->execute([
        $_POST['email'],
        $_POST['password'],

]);

$row = $stmt->fetch();

if(! empty($row)){
    $_SESSION['loginUser'] = $row;

    $result['success'] = true;
    $result['code'] = 200;
    $result['info'] = '登入成功';
} else {
    $result['code'] = 420;
    $result['info'] = '登入失敗';
}

echo json_encode($result, JSON_UNESCAPED_UNICODE);
// 後端用json格式傳到前端




