<?php
require __DIR__. '/__connect_db.php';
$page_name = '0820_02_data_list';
$page_title = '資料列表';

$page = isset($_GET['page']) ? intval($_GET['page']) : 1;

$per_page = 10; // 每一頁要顯示幾筆

$t_sql = "SELECT COUNT(1) FROM `address_book`";

$t_stmt = $pdo->query($t_sql);
$totalRows = $t_stmt->fetch(PDO::FETCH_NUM)[0]; // 拿到總筆數
// $totalRows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0]; // 拿到總筆數

$totalPages = ceil($totalRows/$per_page); // 取得總頁數

if($page < 1){
    header('Location: 0820_02_data_list.php');
    exit;
}
if($page > $totalPages){
    header('Location: 0820_02_data_list.php?page='. $totalPages);
    exit;
}

$sql = sprintf("SELECT * FROM `address_book` ORDER BY `sid` DESC LIMIT %s, %s",
        ($page-1)*$per_page,
            $per_page
);

$stmt = $pdo->query($sql);
// order by 依照流水號降冪排序

// $rows = $stmt->fetchAll(); 不用fetchAll則用while迴圈

?>
<?php include __DIR__. '/__head.php' ?>
<!-- __DIR__為文件所在的目錄 -->
<?php include __DIR__. '/__navbar.php' ?>
<div class="container">
<div style="margin-top: 2rem;">
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item">
                <a class="page-link" href="?page=<?= $page-1 ?>">
                    <i class="fas fa-chevron-left"></i>
                </a>
            </li>
          
            <?php
            $p_start = $page-5;
            $p_end = $page+5;
            for($i=$p_start; $i<=$p_end; $i++):
                if($i<1 or $i>$totalPages) continue;
                ?>
            <li class="page-item <?= $i==$page ? 'active' : '' ?>">
                <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
            </li>
            <?php endfor; ?>
            <li class="page-item">
                <a class="page-link" href="?page=<?= $page+1 ?>">
                    <i class="fas fa-chevron-right"></i>
                </a>
            </li>
        </ul>
    </nav>


    <table class="table table-striped table-bordered">
    <!-- table-bordered為table框線 -->
        <thead>
        <tr>
            <th scope="col"><i class="fas fa-trash-alt"></i></th>
            <th scope="col">sid</th>
            <th scope="col">姓名</th>
            <th scope="col">電子郵箱</th>
            <th scope="col">手機</th>
            <th scope="col">生日</th>
            <!-- <th scope="col">地址</th> -->
            <th><i class="fas fa-edit"></i></th>
        </tr>
        </thead>
        <tbody>
        <?php while($r=$stmt->fetch()){  ?>
        <!-- while -->
        <tr>
            <td>
                <a href="javascript:delete_one(<?= $r['sid'] ?>)"><i class="fas fa-trash-alt"></i></a>
            </td>
            <!-- 刪除資料 -->
            <td><?= $r['sid'] ?></td>
            <td><?= $r['name'] ?></td>
            <td><?= $r['email'] ?></td>
            <td><?= $r['mobile'] ?></td>
            <td><?= $r['birthday'] ?></td>
           <!-- address在資料表中為null -->
            <td><a href="0822_data_edit.php?sid=<?= $r['sid'] ?>"><i class="fas fa-edit"></i></a></td>
        </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
</div>
<script>
    function delete_one(sid) {
        if (confirm(`確定要刪除編號為${sid}的資料嗎?`)) {
            location.href = '0822_data_delete.php?sid=' + sid;
        }
    }
</script>
<?php include __DIR__. '/__footer.php' ?>