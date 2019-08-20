<?php
require __DIR__. '/__connect_db.php';

$stmt = $pdo->query("SELECT * FROM `address_book` ORDER BY `sid` DESC");
// query()為執行SQL的指令
// order by 依照流水號降冪排序

$rows = $stmt->fetchAll();
// stmt為資料庫格式 將其轉換成array存入 $rows

?>
<?php include __DIR__. '/__head.php' ?>
<?php include __DIR__. '/__navbar.php' ?>
<div class="container">
<div style="margin-top: 2rem;">
    <table class="table table-striped table-bordered">
    <!-- table-bordered為table框線 -->
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">姓名</th>
            <th scope="col">電子郵箱</th>
            <th scope="col">手機</th>
            <th scope="col">生日</th>
            <!-- <th scope="col">地址</th> -->
        </tr>
        </thead>
        <tbody>
        <?php foreach($rows as $r): ?>
        <tr>
            <td><?= $r['sid'] ?></td>
            <td><?= $r['name'] ?></td>
            <td><?= $r['email'] ?></td>
            <td><?= $r['mobile'] ?></td>
            <td><?= $r['birthday'] ?></td>
           <!-- address在資料表中為null -->
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
</div>
<?php include __DIR__. '/__foot.php' ?>