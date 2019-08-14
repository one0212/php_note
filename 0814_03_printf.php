<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<table border="1">
    <?php for($i=1; $i<10; $i++): ?>
    <tr>
        <?php for($k=1; $k<10; $k++): ?>
       <td><?php printf('%s * %s = %s', $i, $k, $i*$k) ?></td>
       <!-- 格式化字串 再輸出結果 -->
        
        <td><?= sprintf('%s * %s = %s', $i, $k, $i*$k) ?></td>
        <!-- sprintf回傳為字串 所以仍需要echo輸出 -->
        <?php endfor ?>
    </tr>
    <?php endfor ?>

</table>
</body>
</html>