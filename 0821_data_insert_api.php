<?php
require __DIR__. '/__connect_db.php';

$result = [
    'success' => false,
    'code' => 400,
    'info' =>'沒有輸入姓名',
    'post' => $_POST,
];



// 如果沒有輸入欄位就離開
if (empty($_POST['name'])) {
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

$sql = "INSERT INTO `address_book`(`name`, `birthday`, `email`, `mobile`, `address`, `create_at`) VALUES (?, ?, ?, ?, ?, NOW())";

$stmt = $pdo->prepare($sql);


$stmt->execute([
        $_POST['name'],
        $_POST['birthday'],
        $_POST['email'],
        $_POST['mobile'],
        $_POST['address'],

]);

if($stmt -> rowCount()==1){
    $result['success'] = true;
    $result['code'] = 200;
    $result['info'] = '新增成功';
} else {
    $result['code'] = 420;
    $result['info'] = '新增失敗';
}

echo json_encode($result, JSON_UNESCAPED_UNICODE);
// 後端用json格式傳到前端




