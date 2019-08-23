<?php
require __DIR__. '/__connect_db.php';
$page_name = '0820_02_data_list_fetch';

$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
// 用戶自己決定自己要看哪一頁 所以是從get方式過來
// 用戶有設定頁數則轉成整數頁 如果沒有設定則預設頁數為第一頁

$per_page = 10; // 每一頁要顯示幾筆

$t_sql = "SELECT COUNT(1) FROM `address_book`";

//$t_stmt = $pdo->query($t_sql);
//$totalRows = $t_stmt->fetch(PDO::FETCH_NUM)[0]; // 拿到總筆數
$totalRows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0]; // 拿到總筆數

$totalPages = ceil($totalRows/$per_page); // 取得總頁數
// 總筆數/一頁最多幾筆 = 總頁數(無條件進位)
echo "$totalRows <br>";
echo "$totalPages <br>";
exit;

// $sql為要顯示的資料
$sql = sprintf("SELECT * FROM `address_book` ORDER BY `sid` DESC LIMIT %s, %s",
        ($page-1)*$per_page, //索引值：頁數-1*一頁幾筆 從哪一個索引值開始呈現 與pk無關 因升幂與降冪呈現不同
            $per_page // 一頁呈現最多幾筆
);

$stmt = $pdo->query("SELECT * FROM `address_book` ORDER BY `sid` DESC");
// order by 依照流水號降冪排序

// $rows = $stmt->fetchAll(); 不用fetchAll則用while迴圈

?>
<?php include __DIR__. '/__head.php' ?>
<!-- __DIR__為文件所在的目錄 -->
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
        <?php while($r=$stmt->fetch()){  ?>
        <!-- while -->
        <tr>
            <td><?= $r['sid'] ?></td>
            <td><?= $r['name'] ?></td>
            <td><?= $r['email'] ?></td>
            <td><?= $r['mobile'] ?></td>
            <td><?= $r['birthday'] ?></td>
           <!-- address在資料表中為null -->
        </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
</div>
<?php include __DIR__. '/__footer.php' ?>